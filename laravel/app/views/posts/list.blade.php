@extends('templates.main')

@section('content')
<div id="ludus-header">
    <div class="ludus-share">
        <h3>Category Name</h3>
        <a href="/links/add" class="btn btn-primary">Add Link +</a> <a href="/posts/add" class="btn btn-success">Add Post +</a> <a href="#" class="btn btn-secondary">Sign Up!</a>
    </div>
</div>
<h3>Feed List</h3>
<ul class="list-group">
    @foreach($posts as $post)
    <li class="list-group-item">
        <a href="{{$post->url}}"><h4>{{$post->title}}</h4></a>
        {{$post->description}}
        <ul class="list-inline">
            <li>{{$post->votes}} upvotes</li>
            <li>{{$post->clicks}} clicks</li>
            <li><a href="/posts/{{$post->id}}">Comments</a></li>
        </ul>
    </li>
    @endforeach
</ul>

@stop
