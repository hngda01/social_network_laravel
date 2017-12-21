
  <div class="modal fade" id="newPost" role="dialog">     
    <div class="modal-dialog">   

        <div class="modal-content">
          <div class="modal-header modal-edit-head">
            <center><h4 class="modal-title">Write Post</h4></center>
          </div>
          <div class="modal-body">
          <div class=" well" style="margin-left: 20px; margin-right: 20px">
            <form name="form1" action="createPost" method="POST" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="danhsach" class="form-control">
              <div id="clock">
                <img src=""alt="" id ='image1' style="height: 250px;width: 485px" >
              </div>
              <div class="form-group">
                <label for="telephone">Image :</label>
                <input type="file" id='getval' name="image">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title">
              </div>
              <div class="form-group">   
                <table width="100%">
                  <tr>
                    <td width="33%">
                      
                      <select name="category_select" id="drop_down" style="width: 100%;" class="form-control">
                        <option value="other" id="otherOption" onclick="showOther();">new Topic</option> 
                        @foreach($category as $cat)
                        <option value="{{$cat->id}}" onclick="hideOther();">{{$cat->name}}</option>
                        @endforeach    
                      </select>
                    </td>
                    <td width="33%">
                      <input type="text"  name="category" id="other" placeholder="Other"  placeholder="New Topic" class="form-control"/>
                    </td>
                    <td width="33%">
                      <select name="privacy_select" id="drop_down2" style="width: 100%;" class="form-control">
                        <option value="0">Only me</option>
                        <option value="1">Friends</option>
                        <option value="2">Specific Friends</option>
                        <option value="3">Public</option>     
                      </select>
                    </td>
                  </tr>
                </table>           


              </div>
              {{-- <button onclick="myFunction()">click</button> --}}
              <script>
                var dropdown = document.getElementById('drop_down');

                dropdown.onchange = function() {
                  var selected = dropdown.options[dropdown.selectedIndex].value;

                  switch(selected) {
                    case 'other':
                    document.getElementById('other').value = "";
                    document.getElementById('other').style.display = 'block'; 
                    document.getElementById('otherBR').style.display = 'block';
                    break;
                    default:
                    document.getElementById('other').style.display = 'none'; 
                    document.getElementById('otherBR').style.display = 'none';
                    break;
                  }
                }
              </script>
              <script>
                var dropdown = document.getElementById('drop_down2');

                dropdown.onchange = function() {
                  var selected = dropdown.options[dropdown.selectedIndex].value;

                  switch(selected) {
                    case "2":
                    $("#eventEdit").modal();
                    break;
                    default:                    
                    break;
                  }
                }
              </script>
              <textarea name="content" cols="73" rows="10"></textarea>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>      
  </div>
</div>
<!-- Modal edit-->
    <div class="modal fade" id="eventEdit" role="dialog">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header modal-edit-head">
            <center><h4 class="modal-title">Specific Friends</h4></center>
          </div>
          <div class="modal-body">
          <form name="MyForm">
            <div class="container-fluid edit-event-form">
              <div class="row">
                <div class="col-sm-12 edit-event-1">
                </div>
              </div>
            <div style="height: 400px;    overflow: scroll;">
            <br>
             <table width="100%">
             @foreach($user->friendList as $friend)
              <tr valign="top">
                <td style="padding-right: 20px;padding-bottom: 10px;width: 70px;">
                  <img src="images/{{$friend->userAvatar($friend->friend_id)}}.png" class="img-circle" height="55" width="55" alt="Avatar">
                </td>
                <td >
                  <a class="page-newsfeed-06" href="profile/{{$friend->friend_id}}">                  
                    {{$friend->userName($friend->friend_id)}}
                  </a>                 
                  
                </td>
                <td>
                  <input type="Checkbox" Name="MyCheckbox" value="{{$friend->friend_id}}" />
                </td>
              </tr>
              @endforeach
            </table>
            </div>
            </div>
            <button type="button" class="btn btn-primary " onclick="checkstatus()" data-dismiss="modal">Save Changes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          </form>
          <script language="javascript">
            function checkstatus()
            {
              var res= "0";
              for(count=0;count<4;count++)
              {
                if (MyForm.MyCheckbox[count].checked)
                  res=res + "-"+ MyForm.MyCheckbox[count].value;
                
              }
              form1.danhsach.value = res;
            }
          </script>
          </div>
        </div>      
      </div>
    </div>

<script>
  $(document).ready(function () {
    $('#image1').attr('src');
    console.log($('#image1').attr('src'));
    $('input[name=image]').on('change',function () {
      if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#image1').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    })
  })
</script>

