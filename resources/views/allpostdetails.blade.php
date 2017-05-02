@extends('layout')

@section('title', 'Post Details')

@section('content')
<h1><center>Post {{ $post -> title }}</center></h1>
	<div class="panel panel-default">
		<div class="panel-body">
		{{ $post -> content }}
		</div>
	</div>
<a href="/allposts">
<button type="button" class="btn btn-primary">Back</button></a>
<a class="btn btn-danger" onclick="return confirm('Are you confirm to delete the post?')" href="/allposts/{{ $post -> post_id}}" role="button">Delete</a>
@endsection