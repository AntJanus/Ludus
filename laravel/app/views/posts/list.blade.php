@extends('templates.main')

@section('content')
<div id="ludus-header">
    <div class="ludus-share">
        <h3>Category Name</h3>
        <a href="/links/add" class="btn btn-primary">Add Link +</a> <a href="/posts/add" class="btn btn-success">Add Post +</a> <a href="#" class="btn btn-secondary">Sign Up!</a>
    </div>
</div>
<h3>Feed List</h3>
<div class="list-group list-links">
    @foreach($posts as $post)
    <div class="list-group-item">
        <a href="#" class="pull-right"><img src="#" width="75px" height="75px" class="img-thumbnail"></a>
        <a href="{{$post->url}}" class="list-group-item-heading"><h4>{{$post->title}}</h4></a>
        <p class="list-group-item-text">
        {{$post->description}}
        </p>
        <ul class="list-inline">
            <li>{{$post->votes}} upvotes</li>
            <li>{{$post->clicks}} clicks</li>
            <li><a href="/posts/{{$post->id}}">Comments</a></li>
        </ul>
    </div>
    @endforeach
</div>

@stop
