<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $directory ="/images";
    
    
    public function getPathAttribute($value){
    return $this->$directory.$value;
    
    }
    
            //use SoftDeletes;
             
            protected $Dates=['deleted_at'];
           
                //
            protected $fillable=['artist_name','vote','video_path','record_label','image_path','name','body','image_path2'];
         
            /*
                public function user(){
                    return $this->belongsTo('App\User');
                }
                */
                public function tags(){
    return $this->morphToMany('App\Tag','taggable');
                }

                public function comments(){
                    return  $this->hasMany('App\Post');
                  }


}
