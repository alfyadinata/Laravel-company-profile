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
	<meta property="og:title" content="{{ $config->company_name }}" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="{{ url('/') }}/" />
	<meta property="og:description" content="{{ $config->meta_description }}" />
	<meta property="og:image" content="{{ asset('images/'.$config->banner_1) }}" />


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

</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url({{ asset('images/'.$config->banner_1) }});">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="/">
							<img class="logo" src="{{ asset('images/'.$config->logo) }}" alt="logo">
							<img class="logo-alt" src="{{ asset('images/'.$config->logo) }}" alt="logo">
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
					<li><a href="#home">Home</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#testimonial">Testimonial</a></li>
					<li><a href="#blog">Blog</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">{{ $config->slogan }}</h1>
							<p class="white-text">{!! $config->slogan_description !!}   </p>
							<!-- <button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button> -->
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->

	<!-- /About -->



	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Featured Works</h2>
				</div>
				<!-- /Section header -->
            @foreach($portfolio as $p)
				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="{{ asset('images/'.$p->images) }}" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<!-- <span></span> -->
						<h3>{{$p->title}}</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="{{ asset('images/'.$p->images) }}"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->
            @endforeach

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">What we offer</h2>
				</div>
				<!-- /Section header -->

                <!-- service -->
                @foreach($service as $data)
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="{{ $data->icon }}"></i>
						<h3>{{ $data->title }}</h3>
						<p>{{ $data->description }}</p>
					</div>
                </div>
                @endforeach
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="about" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">About Us</h2>
					</div>
                    <p>
                            {{$config->why_choose_us}}

                    </p>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="{{ asset('images/'.$config->banner_2) }}" alt="">
                        <img class="img-responsive" src="{{ asset('images/'.$config->banner_1) }}" alt="">
                        <img class="img-responsive" src="{{ asset('images/'.$config->banner_2) }}" alt="">
						<!-- <img class="img-responsive" src="./img/about2.jpg" alt=""> -->
					</div>
                </div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->



	<!-- /Numbers -->

	<!-- Pricing -->

	<!-- /Pricing -->


	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding">

        <!-- Background Image --> 
		<div class="bg-img" style="background-image: url({{ asset('images/'.$config->banner_1) }});">
			<div class="overlay"></div>
        </div> 
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

                        <!-- testimonial -->
                        @foreach($testi as $x)
						<div class="testimonial">
							<div class="testimonial-meta">
                                @if($x->avatar == "male")
                                    <img src="https://junglejobs.ru/assets/img/male-avatar.png" alt="avatar">
                                @else
                                    <img src="http://www.nirmalamatrimony.com/assets/images/Fimage.jpg" alt="avatar">
                                @endif
								<h3 class="white-text">{{$x->name}}</h3>
								<span>{{$x->jobs}}</span>
							</div>
							<p class="white-text">{{$x->description}}</p>
                        </div>
                        @endforeach
						<!-- /testimonial -->


					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	<!-- Team -->

	<!-- /Team -->

	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Recents news</h2>
				</div>
				<!-- /Section header -->

                <!-- blog -->
                @foreach($blog as $k)
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive"  src="{{ asset('images/'.$k->images)}}" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Admin</li>
								<li><i class="fa fa-clock-o"></i>{{ $k->created_at->diffForHumans() }}</li>
							</ul>
							<h3>{{ $k->title }}</h3>
							<p>{!! str_limit($k->description,100,(' ....')) !!}</p>
							<a href="{{ url('blog/'.$k->url) }}">Read more</a>
						</div>
					</div>
                </div>
                @endforeach
				<!-- /blog -->

			</div>
			<!-- /Row -->
			<a href="{{url('blogs')}}">Other Blogs</a>

		</div>
		<!-- /Container -->

	</div>
    <!-- /Blog -->


	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Contact</h2>
				</div>
				<!-- /Section-header -->
				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>{{ $config->fax }}</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>{{ $config->email }}</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>{{ $config->address}}</p>
					</div>
				</div>
				<!-- /contact -->
				<!-- contact form -->
				@if (session()->has('send'))
				<script>alert('Success Send a Message');</script>
				@endif
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form" action="{{ url('/contact_us') }}" method="POST">
					{{csrf_field()}}
						<input type="text" class="input" name="name" placeholder="Name" required>
						<input type="email" class="input" name="email" placeholder="Email" required>
						<input type="text" class="input" name="subject" placeholder="Subject" required>
						<textarea class="input" placeholder="Message" name="message" required></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

                    <!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="{{ asset('images/'.$config->logo) }}" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="{{ $config->fb }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="{{ $config->tweet }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="{{ $config->ig }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>

					<!-- /footer follow -->
					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018 {{ $config->company_name }}. Developed By Alfy Adinata
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
