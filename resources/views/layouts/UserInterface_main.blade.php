<!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

        <style type="text/css">

            /*************** Nab var********************************/
            body {
                background-color: #eee
            }


            /************************** navbar **********************************/
            .navbar-light{
                margin-bottom:20px;
            }
            /************************** Footer **********************************/



            .footer-section {
                background: #262626;
                padding-bottom: 0;
            }

            .spad {
                padding-top: 100px;
                
            }

            a {
                color: #007bff;
                text-decoration: none;
                background-color: transparent;
            }

            .footer-section {
                background: #262626;
                padding-top: 50px;
                margin-top: 60px;
            
            }

            .footer-widget {
                margin-bottom: 0px;
                margin-left: 0;
                margin-right: 0;
                width: 100%;
                max-width: none;
                margin-top: 0;
            }
            .footer-widget .single-footer-widget h5 {
                color: rgb(175, 175, 153);
                font-size: 23px;
                margin-bottom: -5px;
                text-align: center;
                letter-spacing: 1px
            }
            .footer-widget .single-footer-widget  span {
            margin-left: 90px;
            }
            .footer-widget .single-footer-widget .single-h4{
                margin-left: -30px;
            }
            .footer-widget .single-footer-widget ul{
                margin-top:10px
            }
            .footer-widget .single-footer-widget ul li {
                color: #fff;
                font-size: 14px;
                font-weight: 500;
                list-style: none;
                line-height: 36px;
                opacity: 0.5;
                text-align: left;
                letter-spacing: 1px;
                margin-left: 50px;
                margin-top:10px
            }
            .single-footer-widget .sp{
                color:transparent;
                margin-left:85px;
                border-bottom:1px solid white
            }
            .single-footer-widget .sp1{
                color:transparent;
                margin-left:85px;
                border-bottom:1px solid white ;
                padding-left:0px
            }
            .social-links{
                height: 50px;
                text-align: center;
            }
            .social-links a {
                margin-right: 100px;
                display: inline-block;
                font-size: 25px;
            }

            .social-links a i {
                font-size: 15px;
                color: white;
                float: left;
                margin-right: 10px;
                margin-top: 15px;
                overflow: hidden;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }

            .social-links a span {
                display: inline-block;
                font-size: 12px;
                font-weight: 400;
                text-transform: uppercase;
                color: #9f9fa0;
                padding-top: 10px;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
            }

            .social-links-warp {
                background: #222121;
                padding: 30px 0 0 150px;
                height: 100px;
                margin-bottom: 0;
            }
            .social-links{
                width: 100%;
                margin:0
            }
            .text {
                text-align: center;
                margin-top: 0px;
                font-weight: bold;
                background:  #222121;
                width: 100%;
                max-width: none;
                padding: 10px;
                color:  #9f9fa0;
                font-size: 14px;
            }

            .text-center p {
                font-size: 15px;
                color: #7b7b7b;
                font-weight: 400;
                line-height: 1.6;
                font-family: "Montserrat", sans-serif;
                margin: 0 0 15px 0;
            }
        </style>
    </head>
    <body>
    <!--                NavBar                     -->
    <nav class="navbar navbar-expand-lg  navbar-light" style="background-color: #454152ef;margin-bottom: 0px;">
        <!-- <a style="color:white; font-size: 25px; margin-right: 30px; margin-left: 60px;background: #4b89e7; padding: 2px 15px;"class="navbar-brand all" href="#">AI Lab</a> -->
        <img style="border-radius: 50%; width: 60px; margin-right: 20px;" src="{{ asset('img/d025bf96-bf25-4d84-92ef-b6b7535c0a09.jpg')}}"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div  class="collapse navbar-collapse" id="navbarText">
    <ul style="margin-top: 10px;" class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="color:white; font-size: 17px;" class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color:white; font-size: 17px;" class="nav-link" href="{{url('/Profile')}}">Profile</a>
      </li>
      <li class="nav-item">
        <a style="color:white; font-size: 17px;"class="nav-link" href="{{url('/Pretest')}}">Test</a>
      </li>
    </ul>
       
    <span class="navbar-text">
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="btn btn-secondary nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    @if(Auth::user()->Category == "Admin")

                                    <a class="dropdown-item" href="{{url('/dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a>

                                    @endif

                                    <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                                  
                
    </span>
  </div>
</nav>
<div class="">
    @yield('User_content')
</div>
    <div class="footer-section footboot">
        <div class="container-foot">
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h5 class="single-h4">About us</h5>
                            <ul class="wid1">
                                <li>About Us</li>
                                <li>Community</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                        </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h5>Customer Care</h5>
                            <ul>
                                <li>Search</li>
                                <li>Privacy Policy</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h5>Our Services</h5>
                            <ul>
                                <li>Our Fields</li>
                                <li>Terms and conditions</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="social-links-warp">
            <div class="social-links">
            <a href="https://www.facebook.com/Prof-Aboul-ella-Otifey-Hassanien-114242096930798" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="https://twitter.com/egycct" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="https://www.youtube.com/user/aboaboaboaboabo1?app=desktop" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
            
            </div>
        </div>
        <div class="text">
            <p>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved SRGE
            </p>
        </div>
    </div>
 </body>
    </html>
