<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MyDiary</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	
</head>
<body>
	<div class=" top-right full-with links">
		@include('templates.navigation')
		<div class="container">
			@yield('content')
		</div>
	</div>
</body>
</html>