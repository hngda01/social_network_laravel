<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Diary</title>
  <meta charset="utf-8">
  <base href="{{asset('')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/clockpicker.js"></script>
  <script src="js/datepicker.js"></script>
  <script src="js/index.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/clockpicker.css">
    
    @yield('link')
</head>

<body>

    <div id="wrapper">

       <!-- Navigation -->
       @if(Auth::check())
        @include('Layout._header_user')
       @else
        @include('Layout._header')
       @endif

       <!-- Page Content -->
       @include('includes.message')
       @yield('content')
       <br>
       <!-- /#page-wrapper -->
       @include('Layout._footer')

   </div>
   <!-- /#wrapper -->

   @include("Event._create_event")
   @yield('script')
</body>

</html>
