<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body ">
    <div id="app">
        
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #c7d2c7 ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="home"><img src="./logo/logo.jpg" height="50"></a><!--click vào đây thì dẫn về trang chủ-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><!--bắt đầu phần chỉ hiển thị khi đã đăng nhập thành công-->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <form class="navbar-form navbar-left" action="{{ route('search.results') }}" >
        <div class="form-group input-group search-box">
          <input type="text" class="form-control" placeholder="Search..." name="query">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <span class="fa fa-search"></span>
            </button>
          </span>        
        </div>
      </form>      
      <ul class="nav navbar-nav navbar-right">

        
      </ul>
    </div><!--kết thúc phần chỉ hiển thị khi đã đăng nhập thành công-->
  </div>
</nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{URL::to('src/js/app.js')}}"></script>
    <script>
            var token = '{{ Session::token() }}';
            var url = '{{route('edit')}}';
    </script>
   
</body>
</html>
