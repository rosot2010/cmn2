<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['name'];
    public function photos(){
        return $this->morphMany('App\Photo','imageable');
            }
            public function videos(){
                return $this->morphMany('App\Video','imageable');
                    }    
}
