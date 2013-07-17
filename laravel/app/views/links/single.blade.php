@extends('templates.main')

@section('content')

<h3>Feed List</h3>
<ul class="block-list feed-list">
	<li>
		<div class="feed-item">
		<a href="{{$link->url}}"><h4>{{$link->title}}</h4></a>
		{{$link->description}}
		<ul class="list-meta">
			<li>{{$link->votes}} upvotes</li>
			<li>{{$link->clicks}} clicks</li>
			<li><a href="/links/{{$link->slug}}">Comments</a></li>
		</ul>
	</div>
	<div class="feed-comments">
		<ul class="block-list comment-block">
			<li>Comment 1</li>
		</ul>
	</div>
	</li>
</ul>

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