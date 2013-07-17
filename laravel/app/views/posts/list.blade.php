@extends('templates.main')

@section('content')

<h3>Feed List</h3>
<ul class="block-list feed-list">
	@foreach($posts as $post)
	<li>
		<a href="{{$post->url}}"><h4>{{$post->title}}</h4></a>
		{{$post->description}}
		<ul class="list-meta">
			<li>{{$post->votes}} upvotes</li>
			<li>{{$post->clicks}} clicks</li>
			<li><a href="/posts/{{$post->slug}}">Comments</a></li>
		</ul>
	</li>
	@endforeach
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