<!-- Modal edit-->
<div class="modal fade" id="eventCreate" role="dialog">
  <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header modal-create-head">
        <h4 class="modal-title">Add Event</h4>
      </div>
      <div class="modal-body">
        <form action="createEvent" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container-fluid create-event-form">
          <div class="row">
            <div class="col-sm-12 create-event-1">
              <b>Suject :</b>
              <input type="text" class="form-control" name="title">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 create-event-1">
              <b>Begin date:</b> 
              <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control" name="start_date">
                <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 create-event-1">
              <b>Time:</b> 
              <div class="input-group clockpicker">
                <input type="text" class="form-control" name="time">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 create-event-1">
              <b>End date:</b> 
              <div class="input-group date" data-provide="datepicker">
                <input type="text" class="form-control" name="end_date">
                <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 create-event-1">
              <b>Time:</b> 
              <div class="input-group clockpicker">
                <input type="text" class="form-control" name="end_time">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-time"></span>
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 create-event-1">
              <b>Place:</b>
              <input type="text" class="form-control" name="address">
            </div>               
          </div>
          <div class="row"> 
            <div class="col-sm-7 create-event-1">
              <b>Select image</b>
              <input type="file" id='getval' name="image">
            </div>
            <div class="col-sm-5 create-event-1">
              <b>Priority</b>
              <select class="form-control" name="priority">
                <option value="Very important">Very important</option>
                <option value="important">important</option>
                <option value="not important">not important</option>
              </select>
            </div>
          </div>
          <div class="row"> 
            <div class="col-sm-12 create-event-1">
              <b>Event Detail:</b>
              <textarea class="form-control" rows="5" name="content"></textarea>
            </div>
          </div>
        </div>
        <input type="submit" class="btn btn-primary btn-event-confirm"  value="submit">
        </form>

      </div>
    </div>      
  </div>
</div>