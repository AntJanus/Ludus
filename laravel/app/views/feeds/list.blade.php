@extends('templates.main')

@section('header')
    <div class="nav-container nav-white">
        <div class="nav">
            <ul>
			@foreach($category->subCategories as $cat)
                <li>
                    <a href="/links/{{$cat->slug}}">{{$cat->name}}</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
@stop

@section('content')

<h3>Feed List</h3>
<ul class="block-list feed-list">
	@foreach($links as $link)
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