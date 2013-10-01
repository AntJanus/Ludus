@extends('templates.main')

@section('content')

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
