@if(count($errors) > 0)
	<div >
		<div 
				style="border:1px solid red ;
				background-color: #fff;
				margin:20px;
				color: red;
				border-radius: 2px" >
			<ul>
				@foreach($errors -> all() as $error)
					<li style="list-style: none;text-align: center;">{{$error}}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif
@if(Session::has('mess'))
	<div class="row">
		<div class="col-md-4 col-md-offset -4">
			{{Session::get('mess')}}
		</div>
	</div>
@endif


@if(Session::has('mess'))
	<div class="alert alert-info" role = "alert">
		{{Session::get('mess')}}
	</div>
@endif

