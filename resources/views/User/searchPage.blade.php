@extends("layout.index")
@section("content")
	<form action="searchFriend" method="POST" role="form">
	{{csrf_field()}}
		<legend>Form title</legend>
	
		<div class="form-group">
			<label for="">search friend</label>
			<input type="text" class="form-control" name="text" placeholder="enter name">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">search</button>
	</form>
	@if(isset($listResult))
	<table border="1px" width="100%">
		<tr>
			<td>{{$listResult->id}}</td>
			<td> {{$listResult->name}}</td>
			<td><a href="" title="">add friend</a></td>
		</tr>
	</table>
	@endif
@endsection