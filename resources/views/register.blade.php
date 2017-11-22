@extends("Layout.index")
@section("content")
<div class="container page-register-01"> 
  <div class="page-register-01-b">   
    <div class="row">
      <div class="col-sm-6">
        <h1 class="page-register-02">Keep me in your memory</h1>
      </div>
      <div class="col-sm-6">
        <form action="register" method="POST" role="form">
		{{ csrf_field() }}
          <div class="form-group">
            <label>User Name:</label>
            <input class="form-control" type="text" name="name">
          </div>
          <p class="page-register-03">This field is empty</p>
          <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="text" name="email">
          </div>
          <p class="page-register-03">This field is empty</p>
          <div class="form-group">
            <label>Password:</label>
            <input class="form-control" type="password" name="password">
          </div>
          <p class="page-register-03">This field is empty</p> 
          <button type="submit" class="btn btn-primary page-register-05">Register</button>    
        </form>
        <p class="page-register-06"><a href="#">Already have an account? Log in!</a></p>
      </div>
    </div> 
  </div>
</div> 

@endsection
{{-- <!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="register" method="POST" role="form">
		{{ csrf_field() }}
		<legend>Register</legend>
		<div class="form-group">
			<label for="">user name:</label>
			<input type="text" class="form-control" name="name" placeholder="Input name">
		</div>
		<div class="form-group">
			<label for="">email</label>
			<input type="text" class="form-control" name="email" placeholder="Input field">
		</div>
		<div class="form-group">
			<label for="">password</label>
			<input type="text" class="form-control" name="password" placeholder="Input field">
		</div>	
	
		<button type="submit" class="btn btn-primary">register</button>
	</form>
</body>
</html> --}}