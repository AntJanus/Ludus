<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/tseczka.css">

    @yield('javascript')
</head>
<body>
    <div class="nav-container nav-main nav-right">
        <div class="nav">
            <a href="/" class="nav-title emboss">Ludus</a>
            <ul >
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
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-9">
                @yield('content')
            </div>
            <div class="col-3 last">
                @yield('sidebar')
            </div>
        </div>
    </div>
    @yield('javascript-bottom')
</body>
</html>