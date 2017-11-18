<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $directory ="/images";
    
    protected $fillable=['image_path','name'];
    public function getPathAttribute($value){
    return $this->$directory.$value;
  
    }
}
