@extends('Layout.index')
@section('content')
<form action="writeComment" method="POST" role="form" >
{{ csrf_field() }}
	<legend>new post</legend>
	<input type="hidden" name="diary_id" value='{{ $diary->id }}' />

	<div class="form-group">
		<label for="">title</label>
		<input type="text" class="form-control" name="title" value="{{$diary->title}}">
	</div>
	<div class="form-group">
		<label for="">category</label>
		<input type="text" class="form-control" name="category" value="{{$diary->id_category}}">
		
	</div>
	<hr>
	<div class="form-group">
		<label for="">content</label>
		<br>
		<textarea name="content" cols="60" rows="5">{{$diary->content}}</textarea>
	</div>
	<div class="form-group">
		<img src="images/im.png" width="100" height="100">
	</div>
	<hr>
	<hr>
	<h3>Comment</h3>
	<table>
		@foreach($comment as $cmt)
		<tr>
			<th>{{$cmt->id_user}} :</th>
			<td> {{$cmt->content}}</td>
		</tr>
		@endforeach
	</table>
	<div class="form-group">
		<label for="">write comment</label>
		<input type="text" class="form-control" name="comment" placeholder="input comment">
		
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection