<?php

namespace App\Http\Controllers;
use App\Create;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Create::all();

        //return view('creates');

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('creates.create');
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
'image_path'
]);

  Create::create($input);   
  return redirect('/creates');
     
        
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $creates=Create::all();
        //return view('articles.index)->with('$articles',$article);
        return view('creates.show',compact('creates'));
        //$post=Create::findOrFail($id);
        //return view('posts.show',compact('post'));
        // return view('create.index');//here we are looking for 1 single post
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
