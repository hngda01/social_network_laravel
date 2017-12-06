
  <div class="modal fade" id="editPost" role="dialog">     
    <div class="modal-dialog">   

        <div class="modal-content">
          <div class="modal-header modal-edit-head">
            <center><h4 class="modal-title">Edit Post</h4></center>
          </div>
          <div class="modal-body">
          <div class=" well" style="margin-left: 20px; margin-right: 20px">
            <form name="form2" action="editPost" method="POST" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="danhsach" class="form-control">
              <input type="hidden" name="id_post" class="form-control" value="{{$diary->id}}">
              <div id="clock">
                <img src=""alt="" id ='image1' style="height: 250px;width: 485px" >
              </div>
              <div class="form-group">
                <label for="telephone">Image :</label>
                <input type="file" id='getval' name="image">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title" value="{{$diary->title}}">
              </div>
              <div class="form-group">   
                <table width="100%">
                  <tr>
                    <td width="33%">
                      
                      <select name="category_select" id="drop_down" style="width: 100%;" class="form-control">
                        <option value="{{$diary->id_category}}"  onclick="hideOther();">{{$diary->categoryName($diary->id_category)}}</option> 
                        @foreach($category as $cat)
                        @if($cat->id!=$diary->id_category)
                        	<option value="{{$cat->id}}" onclick="hideOther();">{{$cat->name}}</option>
                        @endif
                        
                        @endforeach  
                        <option value="other" id="otherOption" onclick="showOther();">new Topic</option>   
                      </select>
                    </td>
                    <td width="33%">
                      <input type="text"  name="category" id="other" placeholder="Other"  placeholder="New Topic" class="form-control" style="display: none;" />
                    </td>
                    <td width="33%">
                      <select name="privacy_select" id="drop_down2" style="width: 100%;" class="form-control">
                        <option value="0" @if($diary->id_privacy==0) selected="true" @endif>Only me</option>
                        <option value="1" @if($diary->id_privacy==1) selected="true" @endif>Friends</option>
                        <option value="2" @if($diary->id_privacy==2) selected="true" @endif>Specific Friends</option>
                        <option value="3" @if($diary->id_privacy==3) selected="true" @endif>Public</option>     
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
                var dropdown2 = document.getElementById('drop_down2');

                dropdown2.onchange = function() {
                  var selected = dropdown2.options[dropdown2.selectedIndex].value;

                  switch(selected) {
                    case "2":
                    $("#eventEdit").modal();
                    break;
                    default:                    
                    break;
                  }
                }
              </script>
              <textarea name="content" cols="73" rows="10">{{$diary->content}}</textarea>
              <input type="submit" value="submit"> 
            </form>
          </div>
        </div>
      </div>      
  </div>
</div>
<!-- Modal edit-->
    <!-- Modal edit-->
    <div class="modal fade" id="eventEdit" role="dialog">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header modal-edit-head">
            <center><h4 class="modal-title">Specific Friends </h4></center>
          </div>
          <div class="modal-body">
          <form name="myform">
            <div class="container-fluid edit-event-form">
              <div class="row">
                <div class="col-sm-12 edit-event-1">
                </div>
              </div>
            <div style="height: 400px;    overflow: scroll;">
            <br>
             <table width="100%">
             @foreach($user->friendList as $friend)
              <tr >
                <td style="padding-right: 20px;padding-bottom: 10px;width: 70px;">
                  <img src="img/avatar/ava5.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                </td>
                <td align="left">
                  <a class="page-newsfeed-06" href="profile/{{$friend->friend_id}}">                  
                    {{$friend->userName($friend->friend_id)}}
                  </a>                  
                  <br> 3 hours ago &nbsp;&nbsp;&nbsp;
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
              var myform = document.getElementById('myform');
              var inputTags = myform.getElementsByTagName('input');
              var res= "0";
              for(count=0;count<inputTags.length;count++)
              {
                if (MyForm.MyCheckbox[count].checked)
                  res=res + "-"+ MyForm.MyCheckbox[count].value;
                
              }
              alert($(":MyCheckbox:checked").length);
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

