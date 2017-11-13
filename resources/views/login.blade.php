@extends("Layout.index")
@section("content")
<div class="container page-login-01"> 
  <div class="page-login-01-b">   
    <div class="row">
      <div class="col-sm-6">
        <h1 class="page-login-02">Keep me in your memory</h1>
      </div>
      <div class="col-sm-6">
        <form action="" method="POST">
        {{ csrf_field() }}
          <div class="form-group">
            <label>Username:</label>
            <input class="form-control" type="text" name="user_name">
          </div>
          <p class="page-login-03">This field is empty</p>
          <div class="form-group">
            <label>Password:</label>
            <input class="form-control" type="password" name="password">
          </div>
          <p class="page-login-03">Wrong password</p>        
          <div class="checkbox page-login-04">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary page-login-05">Login</button>    
        </form>
        <p class="page-login-06"><a href="#">New register?</a></p>
      </div>
    </div> 
  </div>
</div> 
@endsection
{{-- <!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="POST">
	{{ csrf_field() }}
	<legend>please login</legend>

	<div class="form-group">
		<label for="">Email</label>
		<input type="text" class="form-control" name="user_name" placeholder="enter your email">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" class="form-control" name="password" placeholder="enter your password">
	</div>

	<button type="submit" class="btn btn-primary">login</button>
</form>
</body>
</html> --}}