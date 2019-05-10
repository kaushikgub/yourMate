<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Your Mate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href=" {{ asset('css/open-iconic-bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/animate.css') }} ">
    
    <link rel="stylesheet" href="  {{ asset('css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/owl.theme.default.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/magnific-popup.css') }} ">

    <link rel="stylesheet" href=" {{ asset('css/aos.css') }} ">

    <link rel="stylesheet" href=" {{ asset('css/ionicons.min.css') }} ">

    <link rel="stylesheet" href=" {{ asset('css/bootstrap-datepicker.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/jquery.timepicker.css') }} ">

    
    <link rel="stylesheet" href=" {{ asset('css/flaticon.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/icomoon.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
	<script src="{{asset('js/jquery.min.js')}}"></script>
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{asset('/')}}">Your<span>mate.</span></a>
	      <button id="menu_open" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span>
	      </button>

	      <div class="collapse navbar-collapse" id="collapse_target">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{asset('/')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Developer</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Projects</a></li>
	          <li class="nav-item"><a href=" {{url('user/review')}} " class="nav-link">Review</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{url('login')}}" class="nav-link">Login</a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{url('registration')}}" class="nav-link">Registration</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	  <div class="hero-wrap js-fullheight" style="margin-top: 9.3%; background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5";>
      <div class="overlay"></div>
      <div class="container" style="margin-top: 8%">
		  <div class="row">
			  <div class="col-md-5">
				  <p id="info_message" class="text-center text-success font-italic">We will build  up your project. Ask us Anything</p>
			  </div>
		  </div>


        <div class="row">
        	<div class="col-md-5">
				{{ Form::open(array('url' => 'massage')) }}

        			<div class="form-group">
						<label>Name</label>
        				<input class="form-control" type="text" name="name" placeholder="Your Name" required>
					</div>

        			<div class="form-group">
						<label>Mobile Number</label>
        				<input class="form-control" type="number" name="number" placeholder="Your Mobile No" required>
					</div>

					<div class="form-group">
						<label>Email address</label>
						<input type="email" class="form-control" placeholder="Your Email" required >
					</div>

					<div class="form-group">
						<label>Question</label>
						<textarea type="text" class="form-control" name="massage" placeholder="Your Question" required ></textarea>
					</div>

        			<div class="form-group">
        				<input class="btn btn-info w-100" type="submit" value="SENT">
        			</div>
				{{ Form::close() }}
        	</div>
        </div>
      </div>
    </div>
  </body>
</html>