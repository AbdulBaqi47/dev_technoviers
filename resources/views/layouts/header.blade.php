<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Technoviers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Favicon-->
	<link rel="icon" href="{{url('img/new-titleicon.png')}}" type="image/png" />
	<!-- google fonts -->

	<!-- Css link -->
	<link rel="stylesheet" href="{{url('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('/owl.transitions.css')}}">
	<link rel="stylesheet" href="{{url('css/animate.min.css')}}">
	<link rel="stylesheet" href="{{url('css/lightbox.css')}}">
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('css/preloader.css')}}">
	<link rel="stylesheet" href="{{url('css/image.css')}}">
	<link rel="stylesheet" href="{{url('css/icon.css')}}">
	<link rel="stylesheet" href="{{url('css/style.css')}}">
	<link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <style>
        #logo-image{
        height: 80px;
        width: 200px;
    }
    </style>
</head>


<body id="top">
	<header id="navigation" class="navbar-fixed-top animated-header">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- /responsive nav button -->

				<!-- logo -->
				<h1 class="navbar-brand">
					<a href="#body"><img src="{{url('img/logo.png')}}" id="logo-image" alt=""></a>
				</h1>
				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="navigation">
				<ul id="nav" class="nav navbar-nav menu">
					<li><a href="#top">Home</a></li>
					<li><a href="#features">Service</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#pricing-table">Price</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#testimonial">Testimonial</a></li>
					<li><a href="#contact-form">Contact</a></li>
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="margin-left: 5%;" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
				</ul>
			</nav>
			<!-- /main nav -->
		</div>
	</header>
