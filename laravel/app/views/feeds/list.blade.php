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

<h3>Feed List</h3>
<div class="list-group">
    @foreach($links as $link)
    <div class="list-group-item">
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

@section('sidebar')
<ul class="list-unstyled">
    <li><h4>Title</h4>
        Description of all kinds
    </li>
    <li>
        <h4>Title</h4>
        Description of all kinds
    </li>
</ul>
@stop
