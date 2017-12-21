<div class="col-sm-3 well">

      <div class="page-newsfeed-03">
      @php
        $allEvent=$user->events->reverse();
        if(count($allEvent)!=0)
        $firstEvent= $allEvent[count($allEvent)-1];
      @endphp
      @if(count($allEvent)!=0)
      <div class="thumbnail">
          <p><b>newest Event :</b></p>
          <img src="images/{{$firstEvent->image}}.png" alt="Paris" width="400" height="300">
          <br>
          <a href="showEvent/{{$firstEvent->id}}" class="page-newsfeed-06" data-toggle="modal" data-target="#eventCreate"><span class="fa fa-calendar-check-o"></span> {{$firstEvent->title}}</a>
          <p>{{$firstEvent->start_date."  ".$firstEvent->time}}</p>
          
        </div>
        @endif
        <h3><img src="img/icon/calendar.png" height="20">Your Schedule</h3>
        <div align="left">        
          <table width="100%">
            @foreach($allEvent as $key => $event)            
            @if(count($user->events)-$key<=4 &&count($user->events)-$key>=2)
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
