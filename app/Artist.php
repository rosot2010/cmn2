<?php
use App\Video;
use App\Tag;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //
    protected  $fillable=['name'];
    public function photos(){
        return $this->morphMany('App\Photo','imageable');
            }
            public function videos(){
                return $this->morphMany('App\Video','imageable');
                    }   
                    public function tags(){
                        return $this->morphToMany('App\Tag','taggable');
                                    }  
                                    //get the votes associated with a given artist
                                    public function votes(){
                                        return $this->belongsToMany('App\Vote','taggable');
                                                    }                  
                    
}
