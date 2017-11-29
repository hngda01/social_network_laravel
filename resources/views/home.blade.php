
@extends("Layout.index")

@section("content")



<div class="container text-center page-newsfeed-01">    
  <div class="row page-newsfeed-01-b">
    <div class="col-sm-2 well">
      <div >

        <img src="img/avatar/ava1.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        <br><br><p><a href="profile/{{$user->id}}">{{$user->name}}</a></p>
      </div>
      <hr style="background-color: #000;height: 1px;"> 
      <div style="margin-left: 5px">       
        <div>
          <p>
            <a class="btn page-newsfeed-05"><span class="fa fa-newspaper-o"></span>Newsfeed</a>
            <a href="newPost" class="btn page-newsfeed-05"><span class="fa fa-pencil-square-o"></span>Write Post</a>
            <a class="btn page-newsfeed-05" href="profile/{{Auth::user()->id}}"></span><span class="fa fa-star"></span>Your page</a>
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
    <div class="col-sm-7">

      <div class="row">
        <div class="col-sm-12">
          Lastest posts by Friends
          <hr style="background-color: #000;height: 1px;"> 
        </div>
      </div>
      
      <div class="row">
        @foreach($friends as $friend)
        @foreach($friend->diaries as $diary) 
        @if($diary->checkPrivacy(Auth::user()->id,$diary)==1)
          <div class=" well" style="margin-left: 20px; margin-right: 20px">
          <div align="left">
            <table>
              <tr>
                <td style="padding-right: 20px">
                  <img src="img/avatar/ava5.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                </td>
                <td >
                  <a class="page-newsfeed-06" href="profile/{{$friend->friend_id}}">
                  
                    {{$friend->userName($friend->friend_id)}}
                  </a>
                  
                  
                  
                  <br> 3 hours ago &nbsp;&nbsp;&nbsp;
                  @if($diary->id_privacy == 0)
                  <i class="fa fa-lock" aria-hidden="true"></i>
                  @elseif($diary->id_privacy == 1)
                  <i class="fa fa-users" aria-hidden="true"></i>
                  @elseif($diary->id_privacy == 2)
                  <i class="fa fa-cog" aria-hidden="true"></i>
                  @else
                  <i class="fa fa-globe " ></i>
                  @endif
                  &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-tag" aria-hidden="true"></i>
                  Topic: <a href="/tags/nodejs" class="tag badge badge-default overflow-hidden" data-v-2d5c6a76>{{$diary->category->name}}</a>

                </td>
              </tr>
            </table>

          </div>
          <table>
            <tr>
              <td style="padding-top: 10px">
                <img src="img/ad/ad1.jpg" alt="Paris" width="100" height="100">
              </td>
              <td align="left" style="padding-left: 10px">
                <a href="viewPost/{{$diary->id}}" title=""><h4 class="page-newsfeed-06"> {{$diary->title}}</h4>
                </a> 
                <p>{{$diary->content}}</p> 
              </td>            
            </tr>         
          </table>
          <hr style="background-color: #000;height: 1px;"> 
          <table>
            <tr>
              <td width="70px">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 100
              </td>
              <td width="50%">
                <i class="fa fa-comments-o" aria-hidden="true"></i> 30
              </td>
            </tr>
          </table>
        </div>
        @endif          

        @endforeach
        @endforeach

        
        

      </div>

    </div>


    <div class="col-sm-3 well">

      <div class="page-newsfeed-03">
        <h3><img src="img/icon/calendar.png" height="20">Your Schedule</h3>
        <div align="left">        
          <table width="100%">
            <tr>
              <td width="50" height="50">
                <img src="img/avatar/ava1.jpg"  height="40" width="40" alt="Avatar">  
              </td>
              <td >
               <span class="page-newsfeed-06">Hop lop 12 20/11/2017</span><br>10:00
             </td>
           </tr>
           <tr>
            <td width="50" height="50">
              <img src="img/avatar/ava1.jpg"  height="40" width="40" alt="Avatar">  
            </td>
            <td >
             <span class="page-newsfeed-06">Hop lop 12 20/11/2017</span><br>10:00
           </td>
         </tr>


       </table>


     </div>
   </div>
   <a href="#" >View more</a>
   <div class="page">
    <!-- Responsive calendar - START -->
    <div class="responsive-calendar">
      <div class="controls">
        <a class="pull-left" data-go="prev"><div class="btn"><i class="icon-chevron icon-chevron-rotate"></i></div></a>
        <h4><span data-head-year></span> <span data-head-month></span></h4>
        <a class="pull-right" data-go="next"><div class="btn"><i class="icon-chevron"></i></div></a>
      </div><hr/>
      <div class="day-headers">
        <div class="day header">Mon</div>
        <div class="day header">Tue</div>
        <div class="day header">Wed</div>
        <div class="day header">Thu</div>
        <div class="day header">Fri</div>
        <div class="day header">Sat</div>
        <div class="day header">Sun</div>
      </div>
      <div class="days" data-group="days">
        <!-- the place where days will be generated -->
      </div>
    </div>
    <!-- Responsive calendar - END -->
    <!-- Placeholder -->
    <div class="responsive-calendar-placeholder">

    </div>
  </div> 

</div>
</div>
</div>
@endsection
