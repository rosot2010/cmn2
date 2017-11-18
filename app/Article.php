<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $directory ="/images";
    
    
    public function getPathAttribute($value){
    return $this->$directory.$value;
    
    }
    
            //use SoftDeletes;
             
            protected $Dates=['deleted_at'];
           
                //
            protected $fillable=['title','body','image_path'];
}
