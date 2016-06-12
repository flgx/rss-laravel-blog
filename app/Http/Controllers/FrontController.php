<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Post;
use App\Favorite;
use Auth;
use FastFeed\Factory;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Search the new posts from ball.ie.
        $fastFeed = Factory::create();
        $fastFeed->addFeed('default', 'http://www.balls.ie/feed');
        $fastFeed->addFeed('default', 'http://www.joe.ie/feed');
        $items = $fastFeed->fetch('default');

     
        $posts = Post::orderBy('id','DESC')->paginate(4);
        //Make the relations in 1 array.
        $posts->each(function($posts){
         $posts->category;
         $posts->user;
        });

        foreach($items as $item){

            $idid=$item->getId();
            $existPost =Post::where('external_id', '=', $idid)->first();
            $newpost= new Post();
     
            


                if($item->getContent() != NULL && $item->getContent() != ''  && $existPost == ''){
                    $newpost->title = $item->getName();
                    $newpost->content = $item->getContent();
                    $newpost->external_id = $item->getId();
                    $newpost->user_id = 5;
                    $newpost->category_id = 1;
                    $newpost->created_at = $item->getDate();
                    $newpost->save();
               }
        } 
        
        return view('home')->with('posts',$posts);
    }
    public function store(Request $request)
    {
       
        $post = Post::find();

        return view('welcome')->with('posts',$posts);
    }

  
}
