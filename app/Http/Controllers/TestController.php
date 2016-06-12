<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Cviebrock\EloquentSluggable\Sluggable;
class TestController extends Controller
{
    public function add (){
		$post = new Post([
		    'title' => 'This other post',
		]);
		$post->user_id = 1;
		$post->category_id = 1;
		$post->save();

		echo $post->slug;
    	
    }
}
