<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('css/open-iconic-bootstrap.min.css')}}>
    <link rel="stylesheet" href={{ asset('css/animate.css')}}>

    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css')}}>
    <link rel="stylesheet" href={{ asset('css/magnific-popup.css')}}>

    <link rel="stylesheet" href={{ asset('css/aos.css')}}>

    <link rel="stylesheet" href={{ asset('css/ionicons.min.css')}}>

    <link rel="stylesheet" href={{ asset('css/bootstrap-datepicker.css')}}>
    <link rel="stylesheet" href={{ asset('css/jquery.timepicker.css')}}>


    <link rel="stylesheet" href={{ asset('css/flaticon.css')}}>
    <link rel="stylesheet" href={{ asset('css/icomoon.css')}}>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <img src="./images/logo_flipped.png" width="200px" class="navbar-brand" href="index.html"/>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{ route('events.index') }}" class="nav-link">Events</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Speakers</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Schedule</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	          <li class="nav-item cta mr-md-2"><a href="#" class="nav-link">Buy ticket</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/slide.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Events</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Events <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section">
        <div class="container">
            <form action="{{ route('events.index') }}" method="get">
                @if($events->count()>0)
                    <div class="row d-flex">
                        @foreach($events as $event)
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                            <a href="blog-single.html" class="block-20" style="background-image: url('uploads/{{ $event->img }}');">
                            </a>
                            <div class="text pt-4">
                                <div class="meta mb-3">
                                <div><a href="#">{{ $event->startdate }}</a></div> -
                                <div><a href="#">{{ $event->endtime }}</a></div>
                                </div>
                                <h3 class="heading mt-2">{{ $event->name }}</h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            </div>
                            <a class="btn btn-primary btn-right btn-md " href="{{ route('ticket.create' , 'id='.$event->id)}}">Book Ticket</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                <h2>No data found</h2>
                @endif
            </form>
        </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Plataforma.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Speakers</a></li>
                <li><a href="#" class="py-2 d-block">Shcedule</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src={{ asset('js/jquery.min.js')}}></script>
  <script src={{ asset('js/jquery-migrate-3.0.1.min.js')}}></script>
  <script src={{ asset('js/popper.min.js')}}></script>
  <script src={{ asset('js/bootstrap.min.js"')}}></script>
  <script src={{ asset('js/jquery.easing.1.3.js')}}></script>
  <script src={{ asset('js/jquery.waypoints.min.js')}}></script>
  <script src={{ asset('js/jquery.stellar.min.js')}}></script>
  <script src={{ asset('js/owl.carousel.min.js')}}></script>
  <script src={{ asset('js/jquery.magnific-popup.min.js')}}></script>
  <script src={{ asset('js/aos.js')}}></script>
  <script src={{ asset('js/jquery.animateNumber.min.js')}}></script>
  <script src={{ asset('js/scrollax.min.js')}}></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src={{ asset('js/google-map.js')}}></script>
  <script src={{ asset('js/main.js')}}></script>
  <link rel="stylesheet" href="{{ asset('lib/noty.css') }}">
  <script src="{{ asset('lib/noty.min.js') }}"></script>

  </body>
</html>
