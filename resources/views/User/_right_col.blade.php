<div class="col-sm-3 well">

      <div class="page-newsfeed-03">
      <div class="thumbnail">
          <p>Upcoming Events:</p>
          <img src="img/ad/ad1.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Fri. 27 November 2015</p>
          <button class="btn btn-primary">Info</button>
        </div>
        <h3><img src="img/icon/calendar.png" height="20">Your Schedule</h3>
        <div align="left">        
          <table width="100%">
            @foreach($user->events->reverse() as $key => $event)
            @if(count($user->events)-$key<=3)
            <tr>
              <td width="50" height="50">
                <img src="images/{{$event->image}}.png" class="img-circle" height="40" width="40" alt="Avatar">  
              </td>
              <td >
              <a href="showEvent/{{$event->id}}" class="page-newsfeed-06" data-toggle="modal" data-target="#eventCreate"><span class="fa fa-calendar-check-o"></span> {{$event->title}}</a>
               {{-- <a class="page-newsfeed-06" href="editEvent/{{$event->id}}" data-toggle="modal" data-target="#eventEvent">{{$event->title}}</a> --}}
               <br>{{$event->time}} - {{$event->address}}
             </td>
           </tr>
           @endif
           @endforeach


       </table>


     </div>
   </div>
   <a href="listEvent" >View more</a>
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
