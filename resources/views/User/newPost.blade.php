@extends('Layout.index')
@section('content')
<form action="createPost" method="POST" role="form">
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
		<select>
			@foreach($category as $cat)
			<option value="">{{$cat->name}}</option>
			@endforeach
		</select>
	</div>

	

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
