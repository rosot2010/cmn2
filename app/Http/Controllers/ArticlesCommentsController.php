<?php

namespace App\Http\Controllers;
use App\Articlecomment;
use Illuminate\Http\Request;

class ArticlesCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  


    public function index()
    {
        //
        //return view('articlescomments.index');

        $articlecomments=Articlecomment::all();
        //$posts=Post::latest()->();
        return view('/articlecomment',compact('articlecomments')); 


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
       public function store(Request $request)

    {
//Auth::user()->articlescomment

  $input= $request->all();
        $this->validate($request,[
'name'=>'required|max:50',
'body'=>'required|max:500',
//'image_path',
//'video_path'=>'Content-Length|max: 9788664'
//'photo' => 'mimes:jpeg,bmp,png'

       ]);
       Articlecomment::create($input);       

return redirect('/articlecomment');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articlecomments=Articlecomment::findOrFail($id);
        //return view('posts.show',compact('post'));
         return view('show',compact('articlecomments'));//here we are looking for 1 single post
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
