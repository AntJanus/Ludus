@extends('templates.main')

@section('content')

<h2>{{$post->title}}</h2>
{{$post->content}}
<ul class="list-inline">
    <li>{{$post->votes}} upvotes</li>
    <li>{{$post->clicks}} clicks</li>
    <li><a href="/posts/{{$post->id}}">Comments</a></li>
</ul>
<hr />
<div>
    <h4>Comments</h4>
    <ul >
        <li>Comment 1</li>
    </ul>
</div>

@stop
