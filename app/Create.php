<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    public $directory ="/images";
    
    
    public function getPathAttribute($value){
    return $this->$directory.$value;
    }
    

    protected $fillable=['image_path'];

    
    

}
