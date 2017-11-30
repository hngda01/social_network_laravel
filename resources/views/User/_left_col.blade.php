<div class="col-sm-2 well">
      <div >
        <img src="img/avatar/ava1.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        <br><br><p><a href="profile/{{$user->id}}">{{$user->name}}</a></p>
      </div>
      <hr style="background-color: #000;height: 1px;"> 
      <div style="margin-left: 5px">       
        <div>
          <p>
            <a href="home" class="btn page-newsfeed-05"><span class="fa fa-newspaper-o"></span>Newsfeed</a>
            <a class="btn page-newsfeed-05" data-toggle="modal" data-target="#newPost"><span class="fa fa-pencil-square-o"></span>Write Post</a>
            <a class="btn page-newsfeed-05" data-toggle="modal" data-target="#eventCreate"><span class="fa fa-calendar-check-o"></span>New event</a>
            <a class="btn page-newsfeed-05" href="profile/{{Auth::user()->id}}"><span class="fa fa-star"></span>Your page</a>
            <a class="btn page-newsfeed-05" href="viewInfo/{{Auth::user()->id}}"><span class="fa fa-user-circle"></span>Profile</a>
            <a class="btn page-newsfeed-05"><span class="fa fa-address-book-o"></span>Friendlist</a>
          </p>
        </div>
        
      </div>
      <hr style="background-color: #000;height: 1px;"> 
      <div style="margin-left: 0px" align="left">
        <p><center><a >Recent Friends</a></center></p>
        <div class="btn page-newsfeed-05">
          @foreach($friends as $friend)
          <img src="img/avatar/ava1.jpg" style="border-radius: 50%" height="30" width="30" alt="Avatar"> <a href="profile/{{$friend->friend_id}}" title="">{{$friend->userName($friend->friend_id)}}</a><br>
          @endforeach
        </div>
      </div>
      
    </div>