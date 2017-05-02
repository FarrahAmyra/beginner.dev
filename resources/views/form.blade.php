<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css") }}">
</head>
<body>
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
	<form action="/output" method="POST">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<fieldset class="form-group">
			<label for="exampleInputName">Name</label>
			<input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter name">
			<small class="text-muted">We'll prompt your name.</small>
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
			<small class="text-muted">We'll never share your email with anyone else.</small>
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter email">
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleSelect1">Example select</label>
			<select class="form-control" id="eexampleSelect11">
				<option>1</option>
				<option></o</option>
				<option></o</option>
				<option></o</option>
				<option></o</option>
			</select>
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleSelect1">Example multiple select</label>
			<select multiple class="form-control" id="exampleSelect1">
				<option></o</option>
				<option></o</option>
				<option></o</option>
				<option></o</option>
				<option></o</option>
			</select>
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleTextarea">Example Text area</label>
			<textarea class="form-control" id="exampleTextarea" name="textarea" rows="3"></textarea>
		</fieldset>
		<fieldset class="form-group">
			<label for="exampleInputFile">File input</label>
			<input type="file" class="form-control-file" id="exampleInputFile">
			<small class="text-muted">This is some placeholder bEnter emaill>
		</fieldset>
		<div class="radio">
			<label>
				<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				Option one is this and that&mdash;be sure to include why it's great
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				Option two can be something else and selecting it will deselect option one
			</label>
		</div>
		<div class="radio disabled">
			<label>
				<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
				Option three is disabled
			</label>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox"> Check me out
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>