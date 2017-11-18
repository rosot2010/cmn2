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
                    <script src="/js/jquery.js"></script>
                    <link href="./assets/sass/_variable.scss" rel="stylesheet"/> 
                    <link href="./css/bootstrap.min.css" rel="stylesheet">
                    <link href="../css/app_naijatop100.css" rel="stylesheet"/>
                    <link href="./css/app.css')}}" rel="stylesheet">
                
                    <link href="./css/libs.css')}}" rel="stylesheet">
                    <script src="/js/bootstrap.min.js"></script>
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
   <a href="/home"> <img class="img-responsive" style="max-height:40px;margin-left:20px;float:left;margin-top:60px;" src="{{URL::asset('images/aahome2.jpeg') }}"/></a>

    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li><a href="{{('/home')}}">Home <span class="sr-only">(current)</span></a></li>
      <li><a href="{{('/gallery')}}">Gallery</a></li>
      <li><a href="{{('/post')}}">Forum</a></li>
      <li><a href="{{('/about')}}">About us</a></li>
      <li><a href="{{('/contact')}}">Contact us</a></li>
      <li><a href="{{('/articles')}}">News</a></li>

          

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
 
</nav>
<br />
<div class="container-fluid">
<div class="row">
<aside class="col-sm-2">
<ul class="nav" id="side-menu">

      <li>
          <a href="{{('/photos/create')}}"><i class="fa fa-dashboard fa-fw"></i> Upload Event Pics</a>
      </li>

      <li>
          <a href="{{('post')}}"><i class="fa fa-wrench fa-fw"></i>Vote<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
              <li>
                  <a href="{{('/result')}}">Vote Results</a>
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
                                   <a href="{{('/photos/create')}}">Recent uploads</a>
                               </li>
                               <li>
                                   <a href="{{('/photos')}}">Recent eventuploads </a>
                               </li>
                               <li>
                                   <a href="#">Gist and comments</a>
                               </li>
                               <li>
                               <a href="{{('/posts/create') }}">Admin</a>
                               <a href="{{('/articles/create') }}">Admin2</a>
                               </li>
                           </ul>
                           <!-- /.nav-third-level -->
                       </li>
                   </ul>
                   <!-- /.nav-second-level -->
               </li></ul>                                                                                         
</aside>
     <aside class="col-sm-2">
        
     <a href="{{('/post')}}">
            <img class="img-responsive" src="{{URL::asset('images/aaawiz1.jpeg')}}">
        <h4>Name:Wiz kid
                    Song:Bad
                    Release date:2017</h4> 
                            </a>
                            <a href="{{('/post')}}">
                                <img class="img-responsive" src="{{URL::asset('images/aaaabank.jpeg')}}">
                            <h4>Name:Banky w
                                        Song:toobad
                                        Releaase date :oct 2017</h4> 
                                                </a>
                                                <a href="{{('/post')}}">
                                                    <img class="img-responsive" src="{{URL::asset('images/aaaaTIWA.jpeg')}}">
                                                <h4>Name:Tiwa savage
                                                            Song:m love
                                                            Release date:2018</h4> 
                                                                    </a>
                                                                    <a href="{{('/post')}}">
                                                                        <img class="img-responsive" src="{{URL::asset('images/aaaadav.jpeg')}}">
                                                                    <h4>Name:Davido
                                                                                Song:Aye
                                                                                Release date:jan 2016</h4> 
                                                                                        </a>
                                                                                        <a href="{{('/post')}}">
                                                                                            <img class="img-responsive" src="{{URL::asset('images/aaa2f.jpeg')}}">
                                                                                        <h4>Name:2face
                                                                                                    Song:Aye
                                                                                                    Release date:jan 2016</h4> 
                                                                                                            </a>
                                                                                                            <a href="{{('/post')}}">
                                                                                                                <img class="img-responsive" src="{{URL::asset('images/aaaPSQ.jpeg')}}">
                                                                                                            <h4>Name:Womens Shoes
                                                                                                                        Price:12.99GBP
                                                                                                                        Size:UK8</h4> 
                                                                                                                                </a>
                                                                                                                                <a href="{{('/post')}}">
                                                                                                                                    <img class="img-responsive" src="{{URL::asset('images/aaDba.jpeg')}}">
                                                                                                                                <h4>Name:Womens Shoes
                                                                                                                                            Price:12.99GBP
                                                                                                                                            Size:UK8</h4> 
                                                                                                                                                    </a>                  
                                                                                                                                                    <a href="{{('/post')}}">
                                                                                                                                                        <img class="img-responsive" src="{{URL::asset('images/aaFlav.jpeg')}}">
                                                                                                                                                    <h4>Name:Womens Shoes
                                                                                                                                                                Price:12.99GBP
                                                                                                                                                                Size:UK8</h4> 
                                                                                                                                                                        </a>
                                                                                                                                                                        <a href="{{('/post')}}">
                                                                                                                                                                            <img class="img-responsive" src="{{URL::asset('images/aakisD.jpeg')}}">
                                                                                                                                                                        <h4>Name:Womens Shoes
                                                                                                                                                                                    Price:12.99GBP
                                                                                                                                                                                    Size:UK8</h4> 
                                                                                                                                                                                            </a>
                                                                                                                                                                                            <a href="{{('/post')}}">
                                                                                                                                                                                                <img class="img-responsive" src="{{URL::asset('images/aaaadav.jpeg')}}">
                                                                                                                                                                                            <h4>Name:Womens Shoes
                                                                                                                                                                                                        Price:12.99GBP
                                                                                                                                                                                                        Size:UK8</h4> 
                                                                                                                                                                                                                </a>
                                                                                                                                                                                                                <a href="{{('/post')}}">
                                                                                                                                                                                                                    <img class="img-responsive" src="{{URL::asset('images/aaolaM.jpeg')}}">
                                                                                                                                                                                                                <h4>Name:Womens Shoes
                                                                                                                                                                                                                            Price:12.99GBP
                                                                                                                                                                                                                            Size:UK8</h4> 
                                                                                                                                                                                                                                    </a>
     </aside>
  <section class="col-sm-4">
      <article>
          
          <h3>Naijatop100hitz </h3>
          
          <img class="img-responsive" src="{{URL::asset('images/aaarapower13.jpeg')}}"/>
          <div class="row">
             
              <table>
                  <tr> <p class="col-sm-10">
          <td>Expecting your artist to top the chart:Vote</td><br/>
          <td>10-30th march</td><br />
          <td>Vote now</td><br /></p>
       </tr>
  </table>
          
              <div class="col-sm-2">
                 <a href="{{('/post')}}"> <input type="button" class="btn btn-primary" value="more..."/></a>
              
              </div>
          
          </div>

        </article>
        <article>
                
                <h3>Expecting your artist to top the chart:Vote</h3>
                
                <img class="img-responsive" src="{{URL::asset('images/aaarapower14.jpeg')}}"/>
                <div class="row">
                   
                    <table>
                        <tr> <p class="col-sm-10">
                <td>Expecting your artist to top the chart:Vote</td><br/>
                <td>10-30th march</td><br />
                <td>Vote now</td><br /></p>
             </tr>
        </table>
                
                    <div class="col-sm-2">
                       <a href="{{('/post')}}"> <input type="button" class="btn btn-primary" value="more..."/></a>
                    
                    </div>
                
                </div>
      
              </article>
              <article>
                    
                    <h3>Upcoming events in lagos</h3>
                    
                    <img class="img-responsive" src="{{URL::asset('images/aaarapower15.jpeg')}}"/>
                    <div class="row">
                       
                        <table>
                            <tr> <p class="col-sm-10">
                    <td>Expecting your artist to top the chart:Vote</td><br/>
                    <td>10-30th march</td><br />
                    <td>Vote now</td><br /></p>
                 </tr>
            </table>
                    
                        <div class="col-sm-2">
                           <a href="{{('/post')}}"> <input type="button" class="btn btn-primary" value="more..."/></a>
                        
                        </div>
                    
                    </div>
          
                  </article> 

  </section>
  <aside class="col-sm-4">
      <a href="{{('/post')}}">
          <img class="img-responsive" src="{{URL::asset('images/aaarapower4.jpeg')}}">
          <h4>Events:jan 2018
            Venue:Muson centre
            Lagos</h4> 
                          </a>
                          
          <a href="{{('/post')}}">
          <img class="img-responsive" src="{{URL::asset('images/aaarapower14.jpeg')}}">
          <h4>Events:jan 2018
            Venue:Muson centre
            Lagos</h4> 
                          </a>
                          <a href="{{('/post')}}">
                                <img class="img-responsive" src="{{URL::asset('images/aaarapower8.jpeg')}}">
                                <h4>Events:jan 2018
                                    Venue:Muson centre
                                    Lagos</h4> 
                                                </a>

                                                <a href="{{('/post')}}">
                                                        <img class="img-responsive" src="{{URL::asset('images/aakisD.jpeg')}}">
                                                        <h4>Events:jan 2018
                                                            Venue:Muson centre
                                                            Lagos</h4>  
                                                                        </a>
                                                                        <a href="{{('/post')}}">
                                                                                <img class="img-responsive" src="{{URL::asset('images/aaarapower6.jpeg')}}">
                                                                                <h4>Events:jan 2018
                                                                                    Venue:Muson centre
                                                                                    Lagos</h4> 
                                                                                                </a>                                                    
                                                                                                <a href="{{('/post')}}">
                                                                                                    <img class="img-responsive" src="{{URL::asset('images/aaaabank.jpeg')}}">
                                                                                                    <h4>Events:jan 2018
                                                                                                        Venue:Muson centre
                                                                                                        Lagos</h4>  
                                                                                                                    </a>
                                                                                                                    <a href="{{('/post')}}">
                                                                                                                        <img class="img-responsive" src="{{URL::asset('images/aaSka.jpeg')}}">
                                                                                                                        <h4>Events:jan 2018
                                                                                                                            Venue:Muson centre
                                                                                                                            Lagos</h4>  
                                                                                                                                        </a>
                                                                                                                                        <a href="{{('/post')}}">
                                                                                                                        <img class="img-responsive" src="{{URL::asset('images/aasa.jpeg')}}">
                                                                                                                        <h4>Events:jan 2018
                                                                                                                            Venue:Muson centre
                                                                                                                            Lagos</h4>  
                                                                                                                                        </a>
                                                                                                                                        <a href="{{('/post')}}">
                                                                                                                        <img class="img-responsive" src="{{URL::asset('images/aaatiwaS.jpeg')}}">
                                                                                                                        <h4>Events:jan 2018
                                                                                                                            Venue:Muson centre
                                                                                                                            Lagos</h4>  
                                                                                                                                        </a> 
                                                     
  </aside>
</div>
</div>  
<div style="margin-top:150px;"></div>
<footer class="container-fluid">

     <div class="container-fluid">
             <div class="row">
                     <section class="col-sm-4">
                   

                       <ul class="footer-links">
                             <li><a href="{{('/home')}}">Home</a></li>
                                   <li><a href="{{('/Gallery')}}">Gallery</a></li>
                                       <li><a href="{{('/post')}}">Vote</a></li>
                                   <li><a href="{{('/articles')}}">News</a></li>
                                <li><a href="{{('/events')}}">Events</a></li>
                            <li><a href="{{('/contact')}}">Contact Us</a></li>	
                       </ul>
                     </section>
                     <section class="col-sm-4">

                        <ul class="footer-links">
                             <li><a href="{{('/about')}}">About Us</a></li>
                                      <li><a href="{{('/Advert')}}">Advertise with us</a></li>
                                            <li><a href="{{('/login')}}">Login</a></li>
                                      <li><a href="{{('/register')}}">Sign Up</a></li>

                                      <li><a href="{{('/map')}}">Site map</a></li>
                            
                        </ul>
                     </section>
                     <section class="col-sm-4">
                      <ul class="footer-links">
                              <li><a href="{{('/post')}}">like</a></li>
                                   <li><a href="{{('/contact')}}">Office</a></li>
                                              
                                   <p style="font-size:13px;font-style:italic;text-align:center;color:white">All information on this site is <strong>&copy;naijatop100hitz<a  href="#"style="color:orange">Privacy policy.</a><a href="{{('/disclaim')}}"style="color:orange;"> Disclaimer.</a></p>
                                   
                                    <li></li>
                               <li></li>
                          
                        
                      </ul>
                     </section>
             </div></div>
</footer> 
 
    
@endsection

