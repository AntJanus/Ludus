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
    <h3>Comments</h3>
    <ul class="ludus-comments list-group">
        <li class="ludus-comments-item list-group-item"><div class="list-group-item-text">pien, eu auctor nunc purus id arcu. In ut luctus risus, quis luctus tellus. Fusce vehicula massa a nulla convallis venenatis. Nulla semper, velit ac venenatis pretium, nulla purus auctor risus, et rhoncus metus orci in orci. Vestibulum ante ipsum primis
            <ul class="list-inline">
                <li><a href="#"><img src="../../images/avatar.jpg" width="25px" height="25px"> Antonin Januska</a></li>
                <li><a href="#">like</a></li>
            </ul></div>
        </li>
    </ul>
</div>

@stop
