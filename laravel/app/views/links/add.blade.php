@extends('templates.main')

@section('content')

<h3>Add A Link</h3>
<p>Please add a link at your convenience. Make it a good one too!</p>
{{ Form::open(array('url' => 'links/add', 'method' => 'post', 'class'=>'form-horizontal')) }}
<div class="form-group">
        {{Form::label('title', 'Title', array('class'=>'col-md-2 control-label'))}}
    <div class="col-md-8">
        {{Form::text('title', '', array('class' => 'form-control'))}}
    </div>
</div>
<div class="form-group">
        {{Form::label('url', 'URL', array('class'=>'col-md-2 control-label')) }}
    <div class="col-md-8">
        {{Form::text('url', '',array('class' => 'form-control'))}}
    </div>
</div>
<div class="form-group">
        {{Form::label('category', 'Category',array('class'=>'col-md-2 control-label'))}}
    <div class="col-md-8">
        {{Form::select('category', $menu, '', array('class' => 'form-control'))}}
    </div>
</div>
<div class="form-group">
    <div class="col-md-2">
        &nbsp;
    </div>
    <div class="col-md-8">
        {{Form::submit('Submit', array('class' => 'btn btn-primary'))}}
    </div>
</div>
{{ Form::close()}}
@stop
