<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PostRequest;
use Laracasts\Flash\Flash;
use App\Post;
use App\Tag;
use App\Image;
use App\Category;
use Auth;
class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->type == 'admin'){
            $images = Image::all();
            $images->each(function($images){
                $images->post;
            }); 
            return view('admin.images.index')
            ->with('images',$images);                       
        }else{
            return redirect()->route('admin.dashboard.index');
        }


    }

}
