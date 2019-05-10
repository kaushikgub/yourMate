<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Mate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    {{--<link rel="stylesheet" href=" {{ asset('css/open-iconic-bootstrap.min.css') }} ">--}}
    {{--<link rel="stylesheet" href=" {{ asset('css/animate.css') }} ">--}}

    {{--<link rel="stylesheet" href="  {{ asset('css/owl.carousel.min.css') }} ">--}}
    {{--<link rel="stylesheet" href=" {{ asset('css/owl.theme.default.min.css') }} ">--}}
    {{--<link rel="stylesheet" href=" {{ asset('css/magnific-popup.css') }} ">--}}

    {{--<link rel="stylesheet" href=" {{ asset('css/aos.css') }} ">--}}

    {{--<link rel="stylesheet" href=" {{ asset('css/ionicons.min.css') }} ">--}}

    {{--<link rel="stylesheet" href=" {{ asset('css/bootstrap-datepicker.css') }} ">--}}
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">
    {{--<link rel="stylesheet" href=" {{ asset('css/jquery.timepicker.css') }} ">--}}


    {{--<link rel="stylesheet" href=" {{ asset('css/flaticon.css') }} ">--}}
    {{--<link rel="stylesheet" href=" {{ asset('css/icomoon.css') }} ">--}}
    {{--<link rel="stylesheet" href=" {{ asset('css/style.css') }} ">--}}
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
<section class="container-fluid mt-5">
    <div class="row">
        <div class="col">

        </div>
    </div>
    <div class="row container-fluid">
        <div class="col-md-9">
            <h4 class="text-center mb-3 font-italic text-info">All Posts</h4>
            @foreach($posts as $post)
                <div class="row border rounded border-info bg-light mb-5">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-success">{{$post->title}}<span class="h6">....... by {{$post->user_id}}</span></h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h5 class="text-primary">{{$post->key_word}}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p>{{$post->post}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-md-3">
            <h4 class="text-center mb-3 font-italic text-info">Make a Post</h4>
            {{ Form::open(array('url' => 'save/post')) }}
            <div class="row">
                <div class="col">
                    @if(Session::has('message'))
                        <p class="alert alert-danger">{{ Session::get('message') }}</p>
                    @endif
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" type="text" name="title" placeholder="Post Title" required>
                        @if ($errors->has('title'))
                            <div class="alert alert-info">{{ $errors->first('title') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Key Word</label>
                        <input id="key_word" class="form-control" type="text" name="key_word" placeholder="Title Keyword">
                        @if ($errors->has('checked'))
                            <div class="alert alert-info">{{ $errors->first('key_word') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>post</label>
                        <textarea id="post" class="form-control" type="text" name="post" placeholder="Post" required></textarea>
                        @if ($errors->has('checked'))
                            <div class="alert alert-info">{{ $errors->first('post') }}</div>
                        @endif
                    </div>


                    <div class="form-group">
                        <input class="btn btn-info w-100" type="submit" value="Save Post">
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</section>
</body>
</html>