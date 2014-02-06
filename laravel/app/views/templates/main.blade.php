<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bower_components/ludus-bootstrap-theme/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="/bower_components/jquery/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    @yield('javascript')
</head>
<body>
    <nav class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="/bower_components/ludus-bootstrap-theme/images/logo.png"></a>
            </div>

            <div class="collapse navbar-collapse navbar-main">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="{{URL::route('linkList')}}">Links</a>
                    </li>
                    <li>
                        <a href="{{URL::route('postList')}}">Posts</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        @if(Auth::user())
                        <a href="{{URL::route('logout')}}">Logout</a>
                        @else
                        <a href="{{URL::route('login')}}">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="navbar-inverse navbar-default navbar-bottom">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-secondary">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-secondary">
                <ul class="nav navbar-nav">
                    @foreach($mainCategories as $cat)
                    <li>
                        <a href="/links/{{$cat->slug}}">{{$cat->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@yield('header')
<div class="container" id="ludus-content">
    <div class="row">
        <div class="col-md-8">
            @yield('content')
        </div>
        <div class="col-md-4">
            @section('sidebar')
            <div class="ludus-widget">
                <h3>Popular Articles</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Web Development</a></li>
                </ul>
            </div>
            <div class="ludus-widget">
                <h3>Learn more</h3>
                <p>Learn more about this Category. Explore our resources in order to learn the most you can and get the most you can get out of it</p>
                <ul class="list-unstyled">
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Guide To Learning</a></li>
                    <li><a href="#">Ludus Spot</a></li>
                </ul>
            </div>
            <div class="ludus-widget">
                <a href="#"><img src="#" class="img-thumbnail" style="width: 100%; height: 100px"></a>
            </div>
            @show
        </div>
    </div>
</div>
@yield('javascript-bottom')
</body>
</html>



