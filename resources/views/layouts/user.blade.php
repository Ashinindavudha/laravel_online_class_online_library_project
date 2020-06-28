<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Online_Library</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('user/theme/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="{{ asset('user/theme/css/font-awesome.min.css') }}" rel="stylesheet">     
    <!-- Custom CSS -->
    <link href="{{ asset('user/theme/css/style.css') }}" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
</head>

<body>
    
    <div class="wrapper">
        
        <!-- header -->
        <header>
            <!-- navigation -->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img class="img-responsive" src="{{ asset('user/theme/img/1.jpg') }}" width="70px" height="70px" alt="Logo" /></a>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#work">Works</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">User_Login <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/login">Admin_Login</a></li>
                                    <li><a href="/register">Register</a></li>
                                    <li><a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Logout</a></li>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        
        <!-- banner -->
        <div class="banner">
            <div class="container">
                <!-- heading -->
                <h2>We are an advertising firm in over the world</h2>
                <!-- sub heading -->
                <h3>We show the features of your Brand</h3>
                <!-- access button -->
                <a href="#" class="btn btn-default">SEE OUR WORKS</a>
            </div>
        </div>
        <!-- banner end -->
        
        <!-- works -->
        @yield('content')
        <footer>
            <div class="container">
                <p><a href="#">Home</a> | <a href="#work">works</a> | <a href="#team">Team</a> | <a href="#contact">Contact</a></p>
                <!-- logo image -->
                <img class="img-responsive" src="img/logo.png" alt="" />
                <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
                <!-- copy right -->
                <!-- This theme comes under Creative Commons Attribution 4.0 Unported. So don't remove below link back -->
                <p class="copy-right">Copyright &copy; 2014 <a href="#">Your Site</a> | Designed By : <a href="http://www.indioweb.in/portfolio">IndioWeb</a>, All rights reserved. </p>
            </div>
        </footer>

    </div>
    
    
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="{{ asset('user/theme/js/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('user/theme/js/bootstrap.min.js') }}"></script>
    <!-- Respond JS for IE8 -->
    <script src="{{ asset('user/theme/js/respond.min.js') }}"></script>
    <!-- HTML5 Support for IE -->
    <script src="{{ asset('user/theme/js/html5shiv.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('user/theme/js/custom.js') }}"></script>
</body> 
</html>