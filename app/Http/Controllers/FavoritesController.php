<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Post;
use App\Favorite;
use Auth;
class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $auth_id = Auth::user()->id;
            $favorites = Favorite::orderBy('id','DESC')->where('user_id','=', $auth_id)->paginate(5);
            $favorites->each(function($favorites){
                $favorites->post;
            });
            return View('admin.favorites.index')->with('favorites',$favorites);           
        }else{
            redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $exist = Favorite::where('post_id','=',$request['post_id'])->where('user_id','=',$request['user_id'])->get()->toArray();

        if(count($exist) > 0){
            return response()->json(['message'=> 'Error'],200);             
        }else{

            $favorite = new Favorite();
            $favorite->post_id = $request['post_id'];
            $favorite->user_id = $request['user_id'];
            $post = Post::find($request['post_id']);

            $favorite->post()->associate($post);
            $favorite->save();
            return response()->json(['message'=> 'Success'],200);   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $favorite = Favorite::find($id);
        $favorite->delete();
        Flash::error("Post removed from your favorite list.");
        return redirect()->route('admin.favorites.index');
    }
}
