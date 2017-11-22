<form action="editInfo" method="POST" role="form" enctype="multipart/form-data">
{{ csrf_field() }}
	<legend>user info</legend>

	<div class="form-group">
		<label for="">id</label>
		<input type="text" class="form-control" name="title" value="{{$info[0]->id}}">
	</div>
	<div class="form-group">
		<label for="">date of birth</label>
		<input type="text" class="form-control" name="birth_day" value="{{$info[0]->date_of_birth}}">
	</div>
	<div class="form-group">
		<label for="">school</label>
		<input type="text" class="form-control" name="school" value="{{$info[0]->school}}">
	</div>
	<div class="form-group">
		<label for="">address</label>
		<input type="text" class="form-control" name="address" value="{{$info[0]->address}}">
	</div>
	<div class="form-group">
		<label for="">hobby</label>
		<input type="text" class="form-control" name="hobby" value="{{$info[0]->hobby}}">
	</div>
	
	<button type="submit" class="btn btn-primary">Edit info</button>
</form>