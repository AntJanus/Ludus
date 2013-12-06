@extends('templates.main')

@section('header')
<div class="navbar navbar-default">
    <div class="container">
        <div class="nav-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-sub">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse navbar-sub">
                <ul class="nav navbar-nav">
                    @foreach($category->subCategories as $cat)
                    <li>
                        <a href="/links/{{$cat->slug}}">{{$cat->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')
<div id="ludus-header">
    <div class="ludus-share">
        <h3>Category Name</h3>
        <a href="/links/add" class="btn btn-primary">Add Link +</a> <a href="/posts/add" class="btn btn-success">Add Post +</a> <a href="#" class="btn btn-secondary">Sign Up!</a>
    </div>
</div>
<h3>Feed List</h3>
<div class="list-group list-links">
 @foreach($links as $link)
 <div class="list-group-item">
    <a href="#" class="pull-right"><img src="#" width="75px" height="75px" class="img-thumbnail"></a>
    <a href="{{$link->url}}" class="list-group-item-heading"><h4>{{$link->title}}</h4></a>
    <p class="list-group-item-text">
        {{$link->description}}
    </p>
    <ul class="list-inline">
        <li>{{$link->votes}} upvotes</li>
        <li>{{$link->clicks}} clicks</li>
        <li><a href="/links/{{$link->id}}">Comments</a></li>
    </ul>
</div>
@endforeach
</div>

@stop
