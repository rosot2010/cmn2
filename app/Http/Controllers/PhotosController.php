<?php

namespace App\Http\Controllers;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos=Photo::all();
        //$posts=Post::latest()->();
        return view('/photo',compact('photos')); 
           //return view('post');
           //return $posts=Post::all();
          //return dd($posts=Post::all());
           }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
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


'image_path',
//'video_path'=>'Content-Length|max: 9788664'
//'photo' => 'mimes:jpeg,bmp,png'

  ]);
  Photo::create($input);       

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
         }
         public function show()
         {
             $photos=Photo::all();
             //return view('posts.show',compact('post'));
              return view('/photo',compact('photos'));//here we are looking for 1 single post
              
         }
    
    /**
     * 
     * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo=Photo::findOrfail($id);
        return view('photos.edit',compact('photos'));
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function gallery(){

        return view('/gallery');
    }
}
