<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>
    {{$config->company_name}}
    </title>

    <link rel="icon" href="{{ asset('images/'.$config->logo) }}">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/bootstrap.min.css')}}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/owl.theme.default.css')}}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/magnific-popup.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('user/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('user/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
                            <img class="logo" src="{{ asset('images/'.$config->logo) }}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="/">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->
	</header>
    <!-- /Header -->
    
    <div id="blog" class="section md-padding bg-grey">

<!-- Container -->
<div class="container">

    <!-- Row -->
    <div class="row">

        <!-- Section header -->
        <div class="section-header text-center">
            <h2 class="title">Blogs</h2>
        </div>
        <!-- /Section header -->

        <!-- blog -->
        @foreach($blog as $data)
        <div class="col-md-4">
            <div class="blog">
                <div class="blog-img">
                    <img class="img-responsive"  src="{{ asset('images/'.$data->images)}}" alt="">
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li><i class="fa fa-user"></i>Admin</li>
                        <li><i class="fa fa-clock-o"></i>{{ $data->created_at->diffForHumans() }}</li>
                    </ul>
                    <h3>{{ $data->title }}</h3>
                    <p>{!! str_limit($data->description,40,(' ....')) !!}</p>
                    <a href="{{ url('blog/'.$data->url) }}">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
        <!-- /blog -->

    </div>
    <!-- /Row -->
        <center>{{ $blog->links() }}</center>
</div>
<!-- /Container -->

</div>
<!-- /Blog -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">
					<!-- footer logo -->
					<div class="footer-logo">
                        <a href="index.html"><img src="{{asset('images/'.$config->logo)}}" alt="logo"></a>
					</div>
					<!-- /footer logo -->
					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="{{ $config->fb }}"><i class="fa fa-facebook"></i></a></li>
						<li><a href="{{ $config->tweet }}"><i class="fa fa-twitter"></i></a></li>
						<li><a href="{{ $config->ig }}"><i class="fa fa-instagram"></i></a></li>
                    </ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright ©
                            2016- <?php echo date('Y'); ?> {{ $config->company_name }} all Right Reserved 
                        </p>
					</div>
					<!-- /footer copyright -->
				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{ asset('user/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('user/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.magnific-popup.js')}}"></script>
	<script type="text/javascript" src="{{ asset('user/js/main.js')}}"></script>

</body>

</html>
