      <div class="modal-body">
        <form action="editEventPost" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" value="{{$event->id}}" name= "event_id">
        <div class="container-fluid create-event-form">
          <div class="row">
            <div class="col-sm-12 create-event-1">
              <b>Suject :</b>
              <input type="text" class="form-control" name="title" value="{{$event->title}}">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 create-event-1">
              <b>Begin date:</b> 
              <div class="input-group date" >
                <input type="text" class="form-control" name="start_date" value="{{$event->start_date}}">
                <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 create-event-1">
              <b>Time:</b> 
              <div {{-- class="input-group clockpicker" --}}>
                <input type="text" class="form-control" name="time" value="{{$event->time}}">
                {{-- <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
                </span> --}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 create-event-1">
              <b>End date:</b> 
              <div class="input-group date" >
                <input type="text" class="form-control" name="end_date" value="{{$event->end_date}}">
                <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 create-event-1">
              <b>Time:</b> 
              <div {{-- class="input-group clockpicker" --}}>
                <input type="text" class="form-control" name="end_time" value="{{$event->end_time}}">
                {{-- <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
                </span> --}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 create-event-1">
              <b>Place:</b>
              <input type="text" class="form-control" name="address" value="{{$event->address}}">
            </div>               
          </div>
          <div class="row"> 
            
            <div class="col-sm-5 create-event-1">
              <b>Priority</b>
              <input type="text" class="form-control" name="priority" value="{{$event->priority}}">
            </div>
          </div>
          <div class="row"> 
            <div class="col-sm-12 create-event-1">
              <b>Event Detail:</b>
              <textarea class="form-control" rows="5" name="content">{{$event->content}}</textarea>
            </div>
          </div>
        </div>
        <input type="submit" value="Save changes">
        </form>

      </div>