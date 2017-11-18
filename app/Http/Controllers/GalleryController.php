<?php
namespace App\Http\Controllers;
use App\Gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
      $images=Gallery::all();
      return view('galleries/media.index',compact('images'));
     //return 'ok u';
  }
      
    
    public function create(){
        
                return view('galleries.media.create');
              // return 'whaoo u';
            }
            public function store(Request $request){
              //it was previously this b4 using the advance validation  public function 
              //store(Request $request)
              $input= $request->all();
              
          if($file=$request->file('file')){
          $name=$file->getClientOriginalName();
          $file->move('images',$name);
          $input['image_path']=$name;
          //$name is inthis case is tmp_name
          }
          
          
          $request->file('file');
          $file=$request->file('file');
          echo'<br>';
          //echo $file->getClientSize();
             $this->validate($request,[
          'image_path'
          ]);
          
            Gallery::create($input);   
            return redirect('/create');
               
                  
               }
        /*  
     public function show(){
        $images=Gallery::all();
                return view('/galleries.show',compact('images'));
               //return 'ok u';
            }
*/


}

