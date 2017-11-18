<br /><br />
@extends('layouts.app')
@section('content')
<header class="container-fluid">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
   <meta property="og:video:type"content="swf_flv_player.exe" />
<meta property="og:video:type" content="application/x-shockwave-flash" />
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    <script src="../js/jquery.js"></script>
    <link href="./assets/sass/_variable.scss" rel="stylesheet"/> 
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/app_naijatop100.css" rel="stylesheet"/>
    <link href="./css/app.css')}}" rel="stylesheet">

    <link href="./css/libs.css')}}" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>  
      <a class="navbar-brand" href="#"style="color:white;"> 
       <img class="img-responsive" style="max-height:80px;" src="{{URL::asset('images/aaarapower2.jpg') }}"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="{{('home')}}">Home <span class="sr-only">(current)</span></a></li>
      <li><a href="{{('gallery')}}">Gallery</a></li>
      <li><a href="{{('post')}}">Forum</a></li>
      <li><a href="{{('about')}}">About us</a></li>
      <li><a href="{{('contact')}}">Contact us</a></li>
      <li><a href="{{('articles')}}">News</a></li>

          

        <li class="dropdown">
        <a href="{{('event')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{('#')}}">General Award nights</a></li>
            <li><a herf="{{('#')}}">Gala Award nights</a></li>
            <li><a href="{{('#')}}">Glo Award nights</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @guest
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
      @else
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endguest
  </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
 
</nav><aside class="col-sm-4">
  <a href="{{('post')}}">
          <img class="img-responsive" src="{{URL::asset('images/aaarapower4.jpeg')}}">
          <h4>Events:jan 2018
            Venue:Muson centre
            Lagos</h4> 
                          </a>
                          
                          <a href="{{('post')}}">
          <img class="img-responsive" src="{{URL::asset('images/aaarapower14.jpeg')}}">
          <h4>Events:jan 2018
            Venue:Muson centre
            Lagos</h4> 
                          </a>
                          <a href="{{('post')}}">
                                <img class="img-responsive" src="{{URL::asset('images/aaarapower8.jpeg')}}">
                                <h4>Events:jan 2018
                                    Venue:Muson centre
                                    Lagos</h4> 
                                                </a>

                                                <a href="{{('post')}}">
                                                        <img class="img-responsive" src="{{URL::asset('images/aaarapower7.jpeg')}}">
                                                        <h4>Events:jan 2018
                                                            Venue:Muson centre
                                                            Lagos</h4>  
                                                                        </a>
                                                                        <a href="{{('post')}}">
                                                                                <img class="img-responsive" src="{{URL::asset('images/aaarapower6.jpeg')}}">
                                                                                <h4>Events:jan 2018
                                                                                    Venue:Muson centre
                                                                                    Lagos</h4> 
                                                                                                </a>                                                    
                                                                                              
                                                                                                  
                                                     
  </aside>
<article >


     
<article>
@if($articles)

     @foreach($articles as $article)
       
   
             <ul style="list-style-type:none;magin-top:50px">
             <li style="font-weight:bold;color:black">{{$article->title}}</li>
             <li style="font-weight:bold;color:black">{{$article->image_path}}</li>
             <li style="font-weight:bold;color:black">{{$article->content}}</li>
           </ul>
 
        @endforeach 
@endfif

<button class="btn-success btn"click()>vote</button>
</ul>  <h3>Comment</h3>
    <section class="col-sm-4">
{!!Form::open(['method'=>'store','action'=>'commentsController@store'])!!}
<div class="form-group">
{!!Form::label('name','Name')!!}
{!!Form::text('name',null,['class'=>'form-control'])!!}<br />
{!!Form::label('comment','Comment')!!}
{!!Form::textarea('body',null,['class'=>'form-control'])!!}
{!!Form::submit('post',['class'=>'btn btn-primary'])!!}
</div>
{!!Form::close()!!}
@if(count($errors)>0)
<div class="alert alert-danger">
<ul> 
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
</section></article>
<div class="container-fluid">
  <div class="row">
  <aside class="col-sm-2">
  <ul class="nav" id="side-menu">
  
        <li>
            <a href="{{('photos/create')}}"><i class="fa fa-dashboard fa-fw"></i> Upload Event Pics</a>
        </li>

        <li>
            <a href="{{('post')}}"><i class="fa fa-wrench fa-fw"></i>Vote<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{('result')}}">Vote Results</a>
                </li>

                

            </ul>
            <!-- /.nav-second-level -->
        </li>  <li>
                     <a href="#"><i class="fa fa-sitemap fa-fw"></i>Interviews<span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level">
                         <li>
                             <a href="#">Recent Interviews</a>
                         </li>
                         <li>
                             <a href="#">Old Interviews</a>
                         </li>
                         <li>
                             <a href="#">Events <span class="fa arrow"></span></a>
                             <ul class="nav nav-third-level">
                                 <li>
                                     <a href="#">Event Venues</a>
                                 </li>
                                 <li>
                                     <a href="{{('photos/create')}}">Upload Recent</a>
                                 </li>
                                 <li>
                                     <a href="{{('photos')}}">Recent eventuploads </a>
                                 </li>
                                 <li>
                                     <a href="#">Gist and comments</a>
                                 </li>
                                 <li>
                                 <a href="{{('posts/create') }}">Admin</a>
                                 <a href="{{('articles/create') }}">Admin2</a>
                                 </li>
                             </ul>
                             <!-- /.nav-third-level -->
                         </li>
                     </ul>
                     <!-- /.nav-second-level -->
                 </li></ul>                                                                                         
  </aside>

  </div></div>

                    
    <div style="margin-top:50px;"></div>
    <footer class="container-fluid">
    
         <div class="container-fluid">
                 <div class="row">
                         <section class="col-sm-4">
                       
 
                           <ul class="footer-links">
                                 <li><a href="{{('home')}}">Home</a></li>
                                       <li><a href="{{('Gallery')}}">Gallery</a></li>
                                           <li><a href="{{('post')}}">Vote</a></li>
                                       <li><a href="{{('articles')}}">News</a></li>
                                    <li><a href="{{('events')}}">Events</a></li>
                                <li><a href="{{('contact')}}">Contact Us</a></li>	
                           </ul>
                         </section>
                         <section class="col-sm-4">
 
                            <ul class="footer-links">
                                 <li><a href="{{('about')}}">About Us</a></li>
                                          <li><a href="{{('Advert')}}">Advertise with us</a></li>
                                                <li><a href="{{('login')}}">Login</a></li>
                                          <li><a href="{{('register')}}">Sign Up</a></li>
 
                                          <li><a href="{{('map')}}">Site map</a></li>
                                
                            </ul>
                         </section>
                         <section class="col-sm-4">
                          <ul class="footer-links">
                                  <li><a href="{{('post')}}">like</a></li>
                                       <li><a href="{{('contact')}}">Office</a></li>
                                                  
                                       <p style="font-size:13px;font-style:italic;text-align:center;color:white">All information on this site is <strong>&copy;naijatop100hitz<a  href="#"style="color:orange">Privacy policy.</a><a href="{{('disclaim')}}"style="color:orange;"> Disclaimer.</a></p>
                                       
                                        <li></li>
                                   <li></li>
                              
                            
                          </ul>
                         </section>
                 </div></div>
 </footer> 
     
     
 @endsection