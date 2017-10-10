<!DOCTYPE html>
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
</html>