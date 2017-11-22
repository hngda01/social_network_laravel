
@extends("Layout.index")

@section("content")

  

<div class="container text-center page-newsfeed-01">    
  <div class="row page-newsfeed-01-b">
    <div class="col-sm-2 well">
      <div >

        <img src="img/avatar/ava1.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        <br><br><p><a href="#">Nguyen Dang Hai</a></p>
      </div>
      <hr style="background-color: #000;height: 1px;"> 
      <div style="margin-left: 5px">
        <p><a href="#">Menu</a></p>
        
        <div align="left"><div class="fa fa-television"></div> New feed</div>
        <div align="left"><div class="fa fa-pencil-square-o"></div> Write diary</div>
        <div align="left"><div class="fa fa-address-book-o"></div> Friend list</div>
        <div align="left"><div class="fa fa-newspaper-o"></div> Your page</div>
        <div align="left"><div class="fa fa-user-circle"></div> Profile</div>
        
      </div>
      <hr style="background-color: #000;height: 1px;"> 
      <div style="margin-left: 0px" align="left">
        <p><a href="#">Recent Friends</a></p>
        @foreach($friends as $friend)
        <img src="img/avatar/ava1.jpg" style="border-radius: 50%" height="30" width="30" alt="Avatar"> {{$friend->userName($friend->friend_id)}}<br>
        @endforeach
        
      </div>
      
    </div>
    <div class="col-sm-7">

      <div class="row">
        <div class="col-sm-12">
          Lastest posts by Friends
          <div class="panel panel-default text-left">
            <div class="panel-body">            

            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
      @foreach($friends as $friend)
        @foreach($friend->diaries as $diary)           
            <div class=" well" style="margin-left: 20px; margin-right: 20px">
          <div align="left">
            <table>
              <tr>
                <td style="padding-right: 20px">
                  <img src="img/avatar/ava5.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                </td>
                <td>
                  {{$friend->userName($friend->friend_id)}}<br> 3 hours ago &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-tag" aria-hidden="true"></i>
                  Topic:"Autumn"

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
                <h4> {{$diary->title}}</h4> 
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
        @endforeach
      @endforeach

        
        

      </div>

    </div>


    <div class="col-sm-3 well">
    <p>Upcoming Events:</p>
      <div align="left">        
        <table width="100%">
            <tr>
                <td width="50" height="50">
                  <img src="img/avatar/ava1.jpg"  height="40" width="40" alt="Avatar">  
                </td>
                <td >
                   <b>Hop lop 12 20/11/2017</b><br>10:00
                </td>
            </tr>
            <tr>
                <td width="50" height="50">
                  <img src="img/avatar/ava1.jpg"  height="40" width="40" alt="Avatar">  
                </td>
                <td >
                   <b>Hop lop 12 20/11/2017</b><br>10:00
                </td>
            </tr>
            
            
        </table>
         

      </div> 
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
