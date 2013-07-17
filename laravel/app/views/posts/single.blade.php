@extends('templates.main')

@section('content')

<h2>{{$post->title}}</h2>
{{$post->content}}
<ul class="list-meta">
	<li>{{$post->votes}} upvotes</li>
	<li>{{$post->clicks}} clicks</li>
	<li><a href="/posts/{{$post->slug}}">Comments</a></li>
</ul>
<div class="feed-comments">
	<ul class="block-list comment-block">
		<li>Comment 1</li>
	</ul>
</div>

@stop

@section('sidebar')
<ul class="block-list">
	<li><h4>Title</h4>
		Description of all kinds	
	</li>
	<li>
		<h4>Title</h4>
		Description of all kinds
	</li>
</ul>
@stop