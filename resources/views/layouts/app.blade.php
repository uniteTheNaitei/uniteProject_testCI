<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="css/top.css">
    
  <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
   

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
   

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top ">
            <div class="container" id="header">
               

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav nav-tabs" role="tablist">
                           <li ><a href="#">Home</a></li>
                         <li class="active"><a href="#">Profile</a></li>
                         <li><a href="#">Messages</a></li>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: white">
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
                                        <a href="profile" >My Profile</a>
                                        <a href="tutorial" >My Tutorial</a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
            
                </ul>
                </div>
            </div>
        </nav>

        @yield('content')
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 font">
                            <h3 >About Us</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                        </div>

                        <div class="col-md-4 font">
                            <h3 >Our Address</h3>
                            <ul class="contact-info">
                                <li>198 West 21th Street, Suite 721 New York NY 10016</li>
                                <li>+ 1235 2355 98</li>
                                <li><a href="#">info@yoursite.com</a></li>
                                <li><a href="#">www.yoursite.com</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 font ">
                            <h3 >Drop us a line</h3>
                                <div class="form-group">
                                    <label for="name" class="sr-only" >Name</label>
                                    <input type="name" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="message" class="sr-only">Message</label>
                                    <textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="button" class="btn btn-primary" value="Send Message">
                                </div>
                        
                        </div>
                    </div>
                    <div class="row copy-right">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <div class="font1">
                                <span class="glyphicon glyphicon-cloud-upload"></span>
                               <span class="glyphicon glyphicon-stats"></span>
                               <span class="glyphicon glyphicon-send"></span>
                               <span class="glyphicon glyphicon-floppy-disk"></span>
                               <span class="glyphicon glyphicon-search"></span>
                            </div>
                            <p>Copyright 2016 Free Html5 <a href="#">Fitness</a>. All Rights Reserved. <br>Made by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
                        </div>
                    </div>
                </div>
            </div>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
