<?php

namespace App\Http\Controllers;
use App\Article;
//use App\Comment;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function index()
    {
 $articles=Article::all();
 //$posts=Post::latest()->();
 return view('/article',compact('articles')); 
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
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
'title'=>'required|max:50',
'body'=>'required|max:5000',
'image_path'
//'photo' => 'mimes:jpeg,bmp,png'

       ]);
       Article::create($input);       
                  //return $request->all();
        //return $request->get('title');
        //return $request->title;
//Post::create($request->all());
return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article=Article::findOrFail($id);
        //return view('articles.index)->with('$articles',$article);
        return view('/articles.show',compact('article'));
        
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
