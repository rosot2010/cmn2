<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

    protected $fillable=['artist_name'];


    //get the artist associated with the given vote
    public function artists(){
        return $this->belongsToMany('App\Artist','name')->withTimestamps();
                    } 
}
