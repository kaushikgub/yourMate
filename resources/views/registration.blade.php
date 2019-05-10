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
                <li class="nav-item cta mr-md-2"><a href="{{url('login')}}" class="nav-link">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<section style="margin-top: 10%;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mx-auto">
                <h3>Registration Form</h3>
            </div>
        </div>

        {{ Form::open(array('url' => 'registration')) }}

        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Your Name" required>
                    @if ($errors->has('name'))
                        <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Mobile Number</label>
                    <input class="form-control" type="number" name="mobile_no" placeholder="Your Mobile No" required>
                    @if ($errors->has('mobile_no'))
                        <div class="alert alert-info">{{ $errors->first('mobile_no') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input class="form-control" type="email" name="email" placeholder="Your Email" required >
                    @if ($errors->has('email'))
                        <div class="alert alert-info">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="Your Password" required>
                    @if ($errors->has('password'))
                        <div class="alert alert-info">{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Conform Password</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="Your Password" required>
                </div>


            </div>

            <div class="col-md-5 mx-auto">

                <div class="form-group">
                    <label>Need a..</label>
                    <select name="need" type="text" class="form-control">
                        <option value="Project">Project</option>
                        <option value="Thesis">Thesis</option>
                        <option value="Project/Thesis Paper">Project/Thesis Paper</option>
                        <option value="Project & Paper">Project & Paper</option>
                        <option value="Thesis & Paper">Thesis & Paper</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Project/Thesis Topic</label>
                    <input class="form-control" name="topic" type="text">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" placeholder="Description"></textarea>
                </div>


                <div class="form-group">
                    <input type="checkbox" value="accepted" name="checked" required>
                    <label>I Accepted all the Condition. <a href="#">Read here</a></label>
                    @if ($errors->has('checked'))
                        <div class="alert alert-info">{{ $errors->first('checked') }}</div>
                    @endif
                </div>

            </div>
        </div>


        <div class="row mb-5">
            <div class="col-md-6 mx-auto">
                <input class="btn btn-info w-100 p-2" type="submit" value="REGISTRATION" >
            </div>
        </div>

        {{ Form::close() }}
    </div>
</section>

</body>
</html>