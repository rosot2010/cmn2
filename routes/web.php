<?php
use App\Post;
use App\Gallery;

use App\User;
use App\Artist;
use App\Photos;
use App\Product;
use App\Video;
use App\Tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/create',function(){
$artist= Artist::Find(1);
$artist->photos()->create(['path'=>'image.jpeg']);
});

  Route::get('/create',function(){
            $artist = Artist::create(['name'=>'Tiwa savage']);
            $video = Video::create(['name'=>'video.mp4']);
            });
            
            Route::get('/read',function(){
                $artist=Artist::findOrFail(1);
                foreach($artist->tags as $tag){
                    echo $tag;
                }
                });
                     
                
                    Route::get('/read',function(){
                        $artist=Artist::findOrFail(1);
                        foreach($artist->tags as $tag){
                            echo $tag;
                        }
                        });

   
                        Route::get('/create',function(){
                            $artist = Artist::create(['name'=>'Tiwa savage']);
                            $tag1=Tag::find(1);
                            $artist->tags()->save($tag1);
                            $video = Video::create(['name'=>'video.mp4']);
                            $tag2=Tag::find(1);
                            $video->tags()->save($tag2);
                            });
                            */
                       //NOTE     for vote USE,$posts=Post::where('user_count','<'20)->firstOrFail

                       
                                 
                               
                       


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post','PostsController@index');
Route::get('/galleries/media/index','GalleryController@index');
Route::get('/galleries/media/create','GalleryController@create');
Route::get('/galleries/show','GalleryController@show');
Route::get('/galleries/create','GalleryController@store');
Route::get('/create','ArticlesController@show');
Route::get('/article','ArticlesController@show');
Route::get('/news','NewsController@news');
Route::get('/post/{id}','PostsController@index');
Route::get('/create','PostsController@create');
Route::get('/show/{id}','PostsController@show');
Route::get('/show/{id}','ArticlesController@show');
Route::get('/contact','PostsController@contact');
Route::get('/createnews','PostsController@createnews');
Route::get('/about','PostsController@about');
Route::get('/news','PostsController@news');
Route::get('/gallery','PostsController@gallery');
Route::get('/disclaim','PostsController@disclaim');
Route::get('/policy','PostsController@policy');
Route::get('/post/{id}','PostsController@index');
//Route::get('/vote','PostsController@vote');
Route::get('/result','PostsController@result');
Route::get('/advert','PostsController@advert');
Route::get('/show','PostsController@show');
Route::get('/post/{id}/{name}','PostsController@show_post');
Route::get('/music_page','PostsController@music_page');

Route::get('/posts/update',function(){
    //DB::table('posts')->increment('vote');  
    //DB::table('posts')->increment('vote', 1);
   // DB::table('posts')->increment('vote', 1, ['id' => '$id']);

});












Route::get('/insert',function(){
    DB::insert('insert into posts(title,body)values(?,?)',['family mater',
    'what is it about']);
    });
    //DB::insert('insert into votes(name,count)values(?,?)',['wzkid','1'])->Increment('count');
   
//To acces datas from database using eloquent,u ve to make a model using comand
// line often in the name of the data u wana acess eg if the name of the
//  table is post table,u make Post model this ll ve access to the model methods
   Route::get('/find', function () {
        $posts=Post::all();
      foreach($posts as $post){
            return $post->title;
            } 
         });
    /*
      Route::get('/posts{id}', function ($id) {
        return view('articles.show');
             
       });
       */
    



    Route::get('/find', function () {
        $posts=Post::all();
      
        foreach($posts as $post){
            return $post->title;
            
      
        } 
        
      });
//Using eloquent to insert
      Route::get('/basicinsert',function(){
        
                $vote= new Vote;
                $vote->$user_id;
               
                $vote->save();
              });
      //for mass insert,u must first go and adjust the post 
      //model by filling in the fillable
      //Route::get('/create',function(){
       // Post::create(['title'=>'another day part2 of 4','body'=>'Anothe,jingolojingoist']);
       //       }); 
              //Route::get('/create',function(){
               // Post::create(['artist_name'=>'davido','votes'=>'5']);
               //       }); 
                     // Route::get('/create',function(){
                      //  Vote::create(['artist_name'=>'[davido','votes'=>'5']);
                       //       });             
                
        Route::get('/findwhere', function (){
        $posts=Post::where('id',3)->orderBy('id','desc')->take(1)->get();
      
            return $posts;
            });
            Route::get('/find', function () {
                $result=Post::find(2);
              
                    return $result->body;
                    });  
/*
                    Route::get('/read', function () {
                        $posts=Post::all();
                      
                        foreach($posts as $post){
                            return $post->title;
                            } 
                        }); 
                        */

                        Route::get('/create', function () {
                            $image_path=Create::all();
                           foreach($image_path as $image_path){
                              return $image_path->content;
                           }
                        });
                       
                        Route::get('/user/{id}/role',function($id){
                            $user= User::find($id);
                            foreach($user->roles as $role){
                              return $role->name;
                            }


                            Route::get('/read', function () {
                                $articles=Article::all();
                               foreach($articles as $article){
                                  return $article->content;
                               }
                            });

                         
                            Route::get('/gallery', function () {
                            $posts = Create::all();
                                foreach($posts as $post){
                                    return $post->image_path;
                                    
                                 }
                               
                            });
                            
                           


                            
                                    }); 
                                  
                                    Route::resource('/articlecomment','ArticlesCommentsController');
                                  
                                    //Route::resource('/admin','AdminController');

                                    Route::resource('/photos','PhotosController');
                                    Route::resource('/photos/create','PhotosController');
                                    Route::resource('/posts/photos','PhotosController');
                                    Route::resource('/posts/photos/create','PhotosController');
                                    Route::resource('/photos','PhotosController');
                                    Route::resource('/creates','MediaController');
                                    Route::resource('/creates','MediaController');
                                    Route::resource('/vote/vote','VotesController');
                                    Route::resource('/vote/vote','VotesController');
                                    Route::resource('/vote','VotesController');
                                    Route::resource('/articles/post','ArticlesController'); 
                                    Route::resource('/articles','ArticlesController');  
                                    Route::resource('/articles','ArticlesController');
                                    Route::resource('/articles/article','ArticlesController');
                                    Route::resource('/posts','PostsController'); 
                                    Route::resource('/posts/create','PostsController'); 
                                    Route::resource('/posts','PostsController'); 
                                    Route::resource('/post','PostsController');  
     /*                         
    Route::group(['middleware'=>'User'],function(){

        Route::resource('/comments','commentsController');
        Route::resource('/commentsReplies','commentsRepliesController');
        
    }) ; 
    */           
     Route::resource('/posts','PostsController');
 
       
     Route::get('/update',function($id){
         //$id=1;
        $updated= DB::update('update posts set vote="1" where id=?',$id); //or[id];use $id 
      return $updated;
      });  
            
   Route::get('/admin',['Middleware'=>'role',function(){


    //return view('login');
   }] );                                   
                                                                
                              
//Many to many relation


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
