<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Comment;
use App\Upvote;
use Illuminate\Http\Request;

Use App\Http\Requests\CreatePostRequest;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 $posts=Post::all();
 //$posts=Post::latest()->();
 return view('/post',compact('posts')); 
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
        //
      
        return view('posts.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   //it was previously this b4 using the advance validation  public function 
   //store(Request $request)
    {
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
'artist_name'=>'required|max:50',
'record_label'=>'required|max:100',
'image_path',
//'video_path'=>'Content-Length|max: 9788664'
//'photo' => 'mimes:jpeg,bmp,png'

       ]);
       Post::create($input);       
                  //return $request->all();
        //return $request->get('title');
        //return $request->title;
//Post::create($request->all());
return redirect('/post');
//u can aswell use these 3 follwn lines
//1, $input=$request->all();
//2, $input['title']=$request->title;
//3,Post::create($request->all());
//0r use these 3 following lines
//1, $post = new post;
//2, $post->title=$request->title;
//3, $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
   

    public function show($id)
    {
        $post=Post::findOrFail($id);
        //return view('posts.show',compact('post'));
         return view('/posts.show',compact('post'));//here we are looking for 1 single post
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
        $post=Post::findOrfail($id);
        return view('posts.edit',compact('posts'));
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
        DB::table('posts')
        ->where('id', $id)
        ->update([
            'vote' => DB::raw('vote + 1')
        ]);
         //return view('result');
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
        $post=Post::find($id); 
        $post->delete();
        return redirect('/post');
    }


    public function contact()
    {
        return view('contact');
        
    }
    public function gallery()
    {
        return view('gallery');
        
    }


 

    public function register()
    {
        return view('register');
        
    }
    public function advert()
    {
        return view('advert');
        
    }









    public function about()
    {
        return view('about');
    }
 

    public function music_page()
    {
        $musics = ["loving_u","mywoman","jelosy"];
        //return view('post')->with('id',$id,'name',$name);
        return view('music_page',compact('musics'));
    }
    public function insert()
    {

        //return view('post')->with('id',$id,'name',$name);
       // return view('post',compact('id','name'));
    }


}