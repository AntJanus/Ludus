@extends('templates.main')

@section('content')
<div id="ludus-header">
    <div class="ludus-share">
        <h3>Category Name</h3>
        <a href="/links/add" class="btn btn-primary">Add Link +</a> <a href="/posts/add" class="btn btn-success">Add Post +</a> <a href="#" class="btn btn-secondary">Sign Up!</a>
    </div>
</div>
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
