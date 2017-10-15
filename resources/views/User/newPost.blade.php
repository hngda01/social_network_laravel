@extends('Layout.index')
@section('content')
<form action="createPost" method="POST" role="form" enctype="multipart/form-data">
{{ csrf_field() }}
	<legend>new post</legend>

	<div class="form-group">
		<label for="">title</label>
		<input type="text" class="form-control" name="title" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">category</label>
		<input type="text" class="form-control" name="category" placeholder="Input field">
		<br>
		<select name="category_select">
			@foreach($category as $cat)
			<option value="{{$cat->id}}">{{$cat->name}}</option>
			@endforeach
		</select>
	</div>
	<hr>
	<div class="form-group">
		<label for="">content</label>
		<br>
		<textarea name="content" cols="60" rows="5"></textarea>
	</div>
	<div class="form-group">
		<label for="">upload image</label>
		<br>
		<input type="file" name="image">
	</div>
	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
