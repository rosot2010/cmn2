<?php

namespace App\Http\Controllers;
use App\Vote;
use App\Post;
use Illuminate\Http\Request;

class VotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 $votes=Vote::all();
 //$posts=Post::latest()->();
 return view('/vote',compact('votes')); 
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
        //$artist_name=Vote::findOrfail($id);
        return $request->all();
         //$posts=  $request->all();
         //echo $post;
        // $artist_name->update($request->all());
         //return $id;
        //return view('vote.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $input= $request->all();
        

        $this->validate($request,[
'artist_name'=>'required|max:50',
'id'=>'required|max:50',
 
        ]);
        Vote::create($input);       
                  // return $request->all();
         //return $request->get('title');
         //return $request->title;
 //Post::create($request->all());
// return redirect('/vote');
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
        //
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
       $post=Vote::findOrfail($id);
        // return $request->all();
         //$posts=  $request->all();
         echo $post;
        // $post->update($request->all());
        // return $artist_name;
         //return redirect('/post');
    
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
