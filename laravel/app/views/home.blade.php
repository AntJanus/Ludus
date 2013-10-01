@extends('templates.main')

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
