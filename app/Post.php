<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    
    protected $table = "posts";

    protected $fillable = ['title','content','category_id','user_id','slug','external_id'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function category(){
    	
    	return $this->belongsTo('App\Category');
    }   

    public function user(){
    	
    	return $this->belongsTo('App\User');
    } 
    public function images(){
    	
    	return $this->hasMany('App\Image');
    }  
    public function tags(){
    	
    	return $this->belongsToMany('App\Tag')->withTimestamps();
    }     
    public function favorites(){
    	
    	return $this->hasMany('App\Favorite');
    } 
    public function scopeSearch($query, $title){
        $thequery=$query->where('title','like','%'.$title.'%');
        $thequery2= $query->where('title','!=',' ');
        if(count($thequery) > 0){
            return $thequery;
        }else{
            return $thequery2;
        }
    }
}
