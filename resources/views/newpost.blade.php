@extends('layout')

@section('content')
<h1><center>Create New Post</center></h1>
<form action="{{route('allposts.store')}}" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="row">
	<div class="col-md-10 col-md-offset-1">
	<fieldset class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
		<small class="text-muted">We'll prompt your title.</small>
		</fieldset>
	<fieldset class="form-group">
		<label for="content">Post</label>
		<input type="text" class="form-control" name="content" id="content" placeholder="Enter Post">
		<small class="text-muted">We'll prompt your post.</small>
	</fieldset>
	<button type="submit" class="btn btn-success">Submit</button>
	<a href="/allposts"><button type="button" class="btn btn-primary">Back</button></a>
</form>
</div>

@endsection