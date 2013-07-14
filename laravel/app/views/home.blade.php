@extends('templates.main')

@section('content')

<h3>Feed List</h3>
<ul class="block-list feed-list">
	<li>
		<div class="feed-item"><h4>Title</h4>
			Description of all kinds
			<ul class="list-meta">
				<li><a href="#">Upvote</a></li>
				<li><a href="#">3 clicks</a></li>
				<li><a href="#">Save</a></li>
				<li><a href="#">Comment</a></li>
			</ul>
		</div>
	</li>
	<li>
		<div class="feed-item"><h4>Title</h4>
			Description of all kinds
			<ul class="list-meta">
				<li><a href="#">Upvote</a></li>
				<li><a href="#">3 clicks</a></li>
				<li><a href="#">Save</a></li>
				<li><a href="#">Comment</a></li>
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