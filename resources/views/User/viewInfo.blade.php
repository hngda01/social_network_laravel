<form action="createPost" method="POST" role="form" enctype="multipart/form-data">
{{ csrf_field() }}
	<legend>user info</legend>

	<div class="form-group">
		<label for="">id</label>
		<input type="text" class="form-control" name="title" value="{{$info[0]->id}}">
	</div>
	<div class="form-group">
		<label for="">date of birth</label>
		<input type="text" class="form-control" name="title" value="{{$info[0]->date_of_birth}}">
	</div>
	<div class="form-group">
		<label for="">school</label>
		<input type="text" class="form-control" name="title" value="{{$info[0]->school}}">
	</div>
	<div class="form-group">
		<label for="">address</label>
		<input type="text" class="form-control" name="title" value="{{$info[0]->address}}">
	</div>
	<div class="form-group">
		<label for="">hobby</label>
		<input type="text" class="form-control" name="title" value="{{$info[0]->hobby}}">
	</div>
	
	<br>
	<a href="editInfo" title="">edit info</a>
</form>