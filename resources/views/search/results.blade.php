@extends('layouts.app')

@section('content')
	<h3>Your search for "{{Request::input('query')}}"</h3>
	@if(!$users->count())
		<p>No results found,sorry</p>
	@else
		<div class="row">	
			<div class="col-lg-12">
				@foreach($users as $user)
					@include('User.userblock')
				@endforeach
			</div>
		</div>
	@endif
@endsection