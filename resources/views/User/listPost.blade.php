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
			<th>title</th>
			<th>category</th>
			<th></th>
			<th></th>
		</tr>
		@foreach($diary as $key)
		<tr>
			<td>{{$key->id}}</td>
			<td><a href="viewPost/{{$key->id}}" title="">{{$key->title}}</a></td>
			<td>{{$key->id_category}}</td>
			<td><a href="deletePost/{{$key->id}}" >Delete</a></td>
			<td><a href="editPost/{{$key->id}}" >Edit</a></td>
		</tr>
		@endforeach
	</table>
@endsection