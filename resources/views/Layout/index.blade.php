<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Web Translate</title>
    <base href="{{asset('')}}">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    
    
    @yield('link')
</head>

<body>

    <div id="wrapper">

       <!-- Navigation -->
       @include('Layout._header')

       <!-- Page Content -->
       @yield('content')
       <br>
       <!-- /#page-wrapper -->
       @include('Layout._footer')

   </div>
   <!-- /#wrapper -->


   @yield('script')
</body>

</html>
