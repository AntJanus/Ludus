@extends('templates.main')

@section('content')

<div>
    <a href="{{$link->url}}"><h2>{{$link->title}}</h2></a>
    {{$link->description}}
    <ul class="list-inline">
        <li>{{$link->votes}} upvotes</li>
        <li>{{$link->clicks}} clicks</li>
        <li><a href="/links/{{$link->id}}">Comments</a></li>
    </ul>
</div>
<hr />
<div >
    <h3>Comments</h3>
    <ul>
        <li>Comment 1</li>
    </ul>
</div>

@stop
