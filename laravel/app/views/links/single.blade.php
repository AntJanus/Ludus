@extends('templates.main')

@section('content')

<div class="ludus-link list-group-item">
    <a href="#" class="pull-right"><img src="#" width="95px" height="95px" class="img-thumbnail"></a>
    <a href="{{$link->url}}" class="ludus-title"><h2>{{$link->title}}</h2></a>
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
  <ul class="ludus-comments list-group">
    <li class="ludus-comments-item list-group-item">
        <div class="list-group-item-text">
            Text of a comment
            <ul class="list-inline">
                <li><a href="#"><img src="../../images/avatar.jpg" width="25px" height="25px"> Antonin Januska</a></li>
                <li><a href="#">like</a></li>
            </ul>
        </div>
    </li>
</ul>
</div>

@stop
