<!DOCTYPE html>
<!-- HTML by Gryqhon -->
<html lang="en">
<head>
  <title>Notifications</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="#"><img src="./logo/logo.jpg" height="50"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group input-group search-box">
          <input type="text" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="fa fa-search"></span>
            </button>
          </span>        
        </div>
      </form>      
      <ul class="nav navbar-nav navbar-right">

        <li>
          <div class="dropdown navbar-component" title="Friend Request">
            <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="fa fa-users"></span>
            </div>
            <ul class="dropdown-menu" aria-labelledby="friends">
              <li>
                <div class="friend-request">
                  <a href="#">
                    <img class="img-responsive img-circle add-friend-pic" src="img/avatar/ava1.jpg"> 
                    <span class="friend-request-profile"> John Connor</span>
                  </a>
                  <span class="friend-request-buttons">
                    <a href="#" class="btn btn-primary">Accept</a>
                    <a href="#" class="btn btn-default">Decline</a>
                  </span>
                </div>
              </li>
              <li>
                <div class="friend-request">
                  <a href="#">
                    <img class="img-responsive img-circle add-friend-pic" src="img/avatar/ava1.jpg">                     
                    <span class="friend-request-profile"> Tom Riddle Marvolo</span>
                  </a>
                  <span class="friend-request-buttons">
                    <a href="#" class="btn btn-primary">Accept</a>
                    <a href="#" class="btn btn-default">Decline</a>
                  </span>
                </div>
              </li>
              <li>
                <div class="friend-request">
                  <a href="#">
                    <img class="img-responsive img-circle add-friend-pic" src="img/avatar/ava1.jpg"> 
                    <span class="friend-request-profile"> John Connor</span>
                  </a>
                  <span class="friend-request-buttons">
                    <a href="#" class="btn btn-primary">Accept</a>
                    <a href="#" class="btn btn-default">Decline</a>
                  </span>
                </div>
              </li>
              <li class="divider"></li>
              <li class="text-center view-more"><a href="#">View more friend requests</a></li>
            </ul>
          </div>
        </li>
        <li>
          <div class="dropdown navbar-component" title="Notification">
            <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="fa fa-bell"></span>
            </div>
            <ul class="dropdown-menu noti-table" aria-labelledby="noti">
              <li class="noti-comp">
                <a href="#">
                  <img class="img-responsive img-circle noti-pic" src="img/avatar/ava1.jpg">
                  <span> A has comment on Your Post Lorem ababaabaannnnnnnnnnnn</span>
                </a>
              </li>
              <li class="noti-comp">
                <a href="#"><img class="img-responsive img-circle noti-pic" src="img/avatar/ava1.jpg">
                  <span> A has comment on Your Post</span>
                </a>
              </li>
              <li class="noti-comp">
                <a href="#">
                  <img class="img-responsive img-circle noti-pic" src="img/avatar/ava1.jpg">
                  <span> A has comment on Your Post</span>
                </a>
              </li>
              <li class="divider"></li>
              <li class="text-center view-more"><a href="#" class="view-more">View more notification</a></li>
            </ul>
          </div>
        </li>
        <li>
          <div class="dropdown navbar-component" title="Notification">
            <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="fa fa-user"></span> My Account
            </div>
            <ul class="dropdown-menu" aria-labelledby="acc">
              <li><a href="#"><span class="fa fa-cog"></span> Settings</a></li>
              <li><a href="#"><span class="fa fa-sign-out"></span> Log Out</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container page-noti-01">
  <div class="page-noti-01-b">
    <h2>Notifications</h2>       
      <ul>
        <!--unread noti-->
        @foreach($notifications as $notification)
        <li class="page-noti-02">
            <a href="#"><img src="img/avatar/ava1.jpg" class="img-responsive page-noti-03"><span> {{$notification->noti}}</span></a>    
        </li>
        @endforeach
        
      </ul>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Product by Reinbooru team &copy</p>
</footer>

</body>
</html>
