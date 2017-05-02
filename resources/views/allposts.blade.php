@extends('layout')

@section('content')
@include('flash::message')

	<h1><center>All posts</center></h1>
	
<!-- 	@foreach($posts as $post)
	<div class="panel panel-default">
		<div class="panel-body">
		<a href="allposts/{{$post->post_id}}">
			<h3>{{ $post->title }}</h3></a>
		</div>
	</div>

	@endforeach -->

	<table class="table table-striped">
		<thead>
			<tr>
				<th >Title</th>
				<th>Post</th>
				<th width="5%">Action</th>

	<br><br>
			</tr>
		</thead>
		<tbody>
		@foreach($posts as $post)
			<tr>
				<td>
					<a href="/allposts/{{ $post->post_id }}">{{ $post->title}}</a>
				</td>
				<td>{{ $post->content}}</td>
				<td>
					<a class="btn btn-warning" href="/allposts/{{ $post -> post_id}}/edit" role="button">Edit</a>
				</td>
				<td>
				{!! Form::open(['method' => 'POST', 'route' => 'allposts.destroy', $post->post_id, 'class' => 'form-horizontal']) !!}
				
				{!! Form::hidden('_method', 'Delete') !!}
				    <div class="btn-group pull-right">
				        {!! Form::submit("Delete", ['class' => 'btn btn-success']) !!}
				    </div>
				
				{!! Form::close() !!}
					<a class="btn btn-danger" href="/allposts/{{ $post -> post_id }}" onclick="return confirm('Are you confirm to delete the post?')"  role="button">Delete</a>
				</td>

				bootform
			</tr>
		@endforeach
		</tbody>
	</table>

	<center><a href="{{ route('allposts.create')}}"><button type="button" class="btn btn-success">New Post</button></a></center>

@endsection