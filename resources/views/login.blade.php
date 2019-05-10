<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
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
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Your<span>mate.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Developer</a></li>
                <li class="nav-item"><a href="" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="" class="nav-link">Review</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                <li class="nav-item cta mr-md-2"><a href="{{asset('/registration')}}" class="nav-link">Registration</a></li>
            </ul>
        </div>
    </div>
</nav>
<section style="margin-top: 10%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 mx-auto">
                <h3>Login Form</h3>
            </div>
        </div>

        {{ Form::open(array('url' => 'login')) }}

        <div class="row">
            <div class="col-md-6 mx-auto">
                @if(Session::has('message'))
                    <p class="alert alert-danger">{{ Session::get('message') }}</p>
                @endif
                <div class="form-group">
                    <label>Email address</label>
                    <input class="form-control" type="email" name="email" placeholder="Your Email" required >

                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="Your Password" required>
                </div>


                <div class="form-group">
                    <input class="btn btn-info w-100" type="submit" value="LOG-In">
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</section>

</body>
</html>