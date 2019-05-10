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
<header>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{asset('/')}}">Your<span>mate.</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_target" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>

            </button>

            <div class="collapse navbar-collapse" id="collapse_target">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{asset('/')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Developer</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Projects</a></li>
                    <li class="nav-item"><a href="{{url('/user/review')}}" class="nav-link">Review</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                    <li class="nav-item cta mr-md-2"><a href="{{url('logout')}}" class="nav-link">Log-Out</a></li>
                 </ul>
            </div>
        </div>
    </nav>
</header>
<section class="container-fluid" style="margin-top: 9%">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <p class="text-info text-center font-italic">Make An Order Now</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {{ Form::open(array('url' => 'login')) }}

                    <div class="row">
                        <div class="col-md-6 mx-auto">

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
                                <input class="btn btn-info w-100" type="submit" value="Order">
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>

        </div>

        <div class="col-md-6">

        </div>
    </div>
</section>
</body>
</html>