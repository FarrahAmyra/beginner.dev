@extends('layout')

@section('title', 'Edit Post')

@section('content')
	<h1><center> Edit Post {{ $post -> title}} </center></h1>
	{!! Form::model($post,['method' => 'POST', 'url' => array('/allposts', $post->post_id), 'class' => 'form-horizontal']) !!}
	<input type="hidden" name="_method" value="PUT">

	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
	    {!! Form::label('title', 'Title') !!}
	    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('title') }}</small>
	</div>

	<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
	    {!! Form::label('content', 'Content') !!}
	    {!! Form::textarea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
	    <small class="text-danger">{{ $errors->first('content') }}</small>
	</div>
	    <div class="btn-group pull-right">
	        {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
	    </div>
	
	{!! Form::close() !!}

	<a href="/allposts"><button type="button" class="btn btn-primary">Back</button></a>
@endsection