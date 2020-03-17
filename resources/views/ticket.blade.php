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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

    <link rel="stylesheet" href={{ asset('css/flaticon.css')}}>
    <link rel="stylesheet" href={{ asset('css/icomoon.css')}}>
    <link rel="stylesheet" href={{ asset('css/style.css')}}>

  </head>
  <body>
  @include('sweet::alert')
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			<img src={{ asset('images/logo_flipped.png')}} width="200px" class="navbar-brand" href="index.html"/>
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

    <div class="hero-wrap" style="background-image: url('../images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-lg-6 col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"> <br><span>Event Name 2020</span></h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="icon-calendar mr-2"></span>20-23 November 2019 - 171 Tahrir Street, Downtown, Cairo - Egypt</p>
            <div id="timer" class="d-flex">
						  <div class="time" id="days"></div>
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
						</div>
          </div>
          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5">
            <form action="{{ route('ticket.store') }}" class="request-form ftco-animate" method="POST">
                @csrf
                @method('post')
                  <h3>Your Ticket</h3>
                        <input class="form-control" type="hidden" name="event_id" value="{{ $event->id }}" required>
	    				<div class="form-group">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Enter your Name" required>
	    				</div>
	    				<div class="form-group">
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Enter your Email" required>
	    				</div>
    					<div class="form-group">
                            <input class="form-control" type="tel" name="phone" value="{{ old('phone') }}"  placeholder="Enter your Phone"required>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <span class="select-arrow"></span>
                        </div>
	            <div class="form-group">
	              <input type="submit" value="Book Now" class="btn btn-primary py-3 px-4">
	            </div>
	    	</form>
          </div>
        </div>
      </div>
    </div>


@if (Session::has('sweet_alert.alert'))
<script>
  swal({
      text: "{!! Session::get('sweet_alert.text') !!}",
      title: "{!! Session::get('sweet_alert.title') !!}",
      timer: {!! Session::get('sweet_alert.timer') !!},
      icon: "{!! Session::get('sweet_alert.type') !!}",
      buttons: "{!! Session::get('sweet_alert.buttons') !!}",

      // more options
  });
</script>
@endif


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src={{ asset('js/jquery.min.js')}}></script>
  <script src={{ asset('js/jquery-migrate-3.0.1.min.js')}}></script>
  <script src={{ asset('js/popper.min.js')}}></script>
  <script src={{ asset('js/bootstrap.min.js')}}></script>
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

  <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>
