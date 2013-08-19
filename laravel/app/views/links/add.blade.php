@extends('templates.main')

@section('content')

<h3>Add A Link</h3>
{{ Form::open(array('url' => 'links/add', 'method' => 'post')) }}
<div class="row form-group">
	<div class="col-4">
		{{Form::label('title', 'Title')}}
	</div>
	<div class="col-8 last">
		{{Form::text('title')}}
	</div>
</div>
<div class="row form-group">
	<div class="col-4">
		{{Form::label('url', 'URL') }}
	</div>
	<div class="col-8 last">
		{{Form::text('url')}}
	</div>
</div>
<div class="row form-group">
	<div class="col-4">
		{{Form::label('category', 'Category')}}
	</div>
	<div class="col-8 last">
		{{Form::select('category', $menu)}}
	</div>
</div>
<div class="row form-group">
	<div class="col-4">
		{{Form::label('subcategory', 'SubCategory')}}
	</div>
	<div class="col-8 last">
		{{Form::select('subcategory', $submenu)}}
	</div>
</div>
<div class="row form-group">
	<div class="col-4">
		&nbsp;
	</div>
	<div class="col-8 last">
		{{Form::submit('Submit')}}
	</div>
</div>
{{ Form::close()}}
@stop