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
              <li><a href="#">A had send you a friend reques</a></li>
              <li><a href="#">A had send you a friend reques</a></li>
              <li><a href="#">A had send you a friend reques</a></li>
              <!-- đang làm chức năng accept decline ngay tại dropdown này -->
              <!-- <li><div class="friend-request">A had send you a friend request</div></li>
              <li><div class="friend-request">A had send you a friend request</div></li>
              <li><div class="friend-request">A had send you a friend request</div></li> -->
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
              @foreach($notifications as $notification)
              <li class="noti-comp">
              <a href="#">
              <img class="img-responsive img-circle noti-pic" src="img/avatar/ava1.jpg">
                <span> 
                  {{$notification->noti}}<br>
                  {{$notification->created_at}}
                </span>
              </a>
              </li>
              @endforeach
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