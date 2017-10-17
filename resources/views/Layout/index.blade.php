<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Web Translate</title>
    <base href="{{asset('')}}">
    <!-- Latest compiled and minified CSS & JS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> --}}
    
    @yield('link')
</head>

<body>

    <div id="wrapper">

         <!-- Navigation -->
        @include('Layout._header')

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->
        @include('Layout._footer')

    </div>
    <!-- /#wrapper -->

    
    @yield('script')
</body>

</html>
