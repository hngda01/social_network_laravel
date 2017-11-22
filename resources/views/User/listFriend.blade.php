@extends('Layout.index')
@section('content')
	{{-- @php
		foreach ($diary as $key) {
			echo $key->id."<br>";
		}
	@endphp --}}
	<table border="1px" width="100%">
		<tr>
			<th>stt</th>
			<th>name</th>			
			<th></th>
			<th></th>
		</tr>
		@foreach($listFriend as $key)
		<tr>
			<td>{{$key->id}}</td>
			<td><a href="viewPost/{{$key->id}}" title="">{{$key->friend_id}}</a></td>
			<td>{{$key->id_category}}</td>
			<td><a href="" >Delete</a></td>
			<td><a href="" >Edit</a></td>
		</tr>
		@endforeach
	</table>
@endsection