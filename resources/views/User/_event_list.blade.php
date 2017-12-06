<div class="col-sm-10">
      <h2 class="page-schedule-title">My Schedule</h2>
      <div class="table-responsive" style="background-color: #FFF">          
        <table class="table">
          <thead class="page-schedule-01">
            <tr>
              <th>Begin</th>
              <th>Event</th>
              <th>End</th>
              <th>Place</th>
              <th>Priority</th>
              <th>Change</th>
            </tr>
          </thead>
          <tbody class="page-schedule-02">
          @foreach($user->events->reverse() as $event)
            <tr>
              <td>{{$event->start_date}} <br> {{$event->time}}</td>
              <td class="page-schedule-03">{{$event->title}}</td>
              <td>{{$event->end_date}} <br> {{$event->end_time}}</td>
              <td>{{$event->address}}</td>
              <td>{{$event->priority}}</td>
              <td>
                <a href="editEvent/{{$event->id}}" class="btn btn-primary" data-toggle="modal" data-target="#eventCreate">Edit</a>
                <a href="deleteEvent/{{$event->id}}" class="btn btn-danger" >Delete</a>
              </td>
            </tr>
          @endforeach  
          </tbody>
        </table>
      </div>
    </div>