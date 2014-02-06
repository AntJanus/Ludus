@extends('templates.main')

@section('content')

<h3>Add A Post</h3>
{{ Form::open(array('url' => 'posts/add', 'method' => 'post')) }}
<div class="form-group">
    {{Form::text('title', '', array('class' => 'form-control'))}}
</div>
<div class="form-group">
    {{Form::textarea('content', '',array('class' => 'form-control', 'data-provide' => 'markdown', 'data-savable' => 'true'))}}
</div>
<div class="form-group">
{{Form::text('description', 'Description', array('class' => 'form-control'))}}
</div>
<div class="form-group">
    {{Form::select('category', $menu, '', array('class' => 'form-control'))}}
</div>
<div class="form-group">
    {{Form::submit('Publish', array('class' => 'btn btn-primary'))}}
</div>
{{ Form::close()}}
@stop


@section('javascript')
<script src="/bower_components/markdown/lib/markdown.js"></script>
<script src="/bower_components/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<link href="/bower_components/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet">
@stop
