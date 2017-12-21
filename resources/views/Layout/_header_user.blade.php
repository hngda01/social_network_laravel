<nav class="navbar navbar-inverse">
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

        <li>
          <div class="dropdown navbar-component" title="Friend Request">
            <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span class="fa fa-users"></span>
              @if(count($friendRequests) !=0)
              <span class="button__badge">{{count($friendRequests)}}</span>
              @endif
              <p class="flexible-show">Friend Request</p>
            </div>
            <ul class="dropdown-menu" aria-labelledby="friends" style="width: 400px;">
              @foreach($friendRequests as $friendRequest)
              <li>
                <div class="friend-request">
                  <a href="#">
                    <img class="img-responsive img-circle add-friend-pic" src="images/{{$friendRequest->userAvatar($friendRequest->user_id)}}.png"> 
                    <span class="friend-request-profile"> {{$friendRequest->userName($friendRequest->user_id)}}</span>
                  </a>
                  <span class="friend-request-buttons">
                    <a href="acceptFriendRequest/{{$friendRequest->user_id}}" class="btn btn-primary">Accept</a>
                    <a href="declineFriendRequest/{{$friendRequest->user_id}}" class="btn btn-default">Decline</a>
                  </span>
                </div>
              </li>
              @endforeach
              
              <li class="divider"></li>
              
            </ul>
          </div>
        </li>
        <li>
        {{-- notifications --}}
          <div class="dropdown navbar-component" title="Notification">
            <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="fa fa-bell"></span>
                @if(count($notifications))
                <span class="button__badge">{{count($notifications)}}</span>
                @endif
                <p class="flexible-show">Notification</p>
            </div>
            <ul class="dropdown-menu noti-table" aria-labelledby="noti">
            @foreach($notifications as $notification)
              <li class="noti-comp">
                <a href="viewPost/{{$notification->id_diary}}">
                  <img class="img-responsive img-circle noti-pic" src="images/{{$notification->diary->image}}.png">
                  <span>
                  @php
                    echo $notification->noti;
                  @endphp
                  </span>
                  {{--  {{$notification->noti}} --}}
                </a>
              </li>
            @endforeach 
            </ul>
          </div>
          {{-- notifications --}}
        </li>
        <li>
          <div class="dropdown navbar-component">
            <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="fa fa-user"></span> My Account
            </div>
            <ul class="dropdown-menu" aria-labelledby="acc">
              <li><a href="#"><span class="fa fa-cog"></span> Settings</a></li>
              <li><a href="{{ route('logout') }}"><span class="fa fa-sign-out"></span> Log Out</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div><!--kết thúc phần chỉ hiển thị khi đã đăng nhập thành công-->
  </div>
</nav>
