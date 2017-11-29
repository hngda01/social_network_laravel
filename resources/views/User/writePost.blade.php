<!DOCTYPE html>
<!-- HTML by Gryqhon -->
<html lang="en">
<head>
  <title>Notifications</title>
  <base href="{{asset('')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
  <style>

    table#t01 {
      width:100%;
    }
    table#t01, th#t01, td#t01 {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th#t01, td#t01 {
      padding: 5px;
      text-align: left;
    }
    table#t01 tr:nth-child(even) {
      background-color: #eee;
    }
    table#t01 tr:nth-child(odd) {
     background-color:#fff;
   }
   table#t01 th  {

    background-color: black;
    color: white;
  }
  #clock {
    background-image: url('');
    background-size: cover;
    background-position: center;
    height: 250px;
    border: 1px solid #000;
  }
</style>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a href="#"><img src="./logo/logo.jpg" height="50"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group input-group search-box">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <span class="fa fa-search"></span>
              </button>
            </span>        
          </div>
        </form>      
        <ul class="nav navbar-nav navbar-right">

          <li>
            <div class="dropdown navbar-component" title="Friend Request">
              <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="fa fa-users"></span>
              </div>
              <ul class="dropdown-menu" aria-labelledby="friends">
                <li>
                  <div class="friend-request">
                    <a href="#">
                      <img class="img-responsive img-circle add-friend-pic" src="img/avatar/ava1.jpg"> 
                      <span class="friend-request-profile"> John Connor</span>
                    </a>
                    <span class="friend-request-buttons">
                      <a href="#" class="btn btn-primary">Accept</a>
                      <a href="#" class="btn btn-default">Decline</a>
                    </span>
                  </div>
                </li>
                <li>
                  <div class="friend-request">
                    <a href="#">
                      <img class="img-responsive img-circle add-friend-pic" src="img/avatar/ava1.jpg">                     
                      <span class="friend-request-profile"> Tom Riddle Marvolo</span>
                    </a>
                    <span class="friend-request-buttons">
                      <a href="#" class="btn btn-primary">Accept</a>
                      <a href="#" class="btn btn-default">Decline</a>
                    </span>
                  </div>
                </li>
                <li>
                  <div class="friend-request">
                    <a href="#">
                      <img class="img-responsive img-circle add-friend-pic" src="img/avatar/ava1.jpg"> 
                      <span class="friend-request-profile"> John Connor</span>
                    </a>
                    <span class="friend-request-buttons">
                      <a href="#" class="btn btn-primary">Accept</a>
                      <a href="#" class="btn btn-default">Decline</a>
                    </span>
                  </div>
                </li>
                <li class="divider"></li>
                <li class="text-center view-more"><a href="#">View more friend requests</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="dropdown navbar-component" title="Notification">
              <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="fa fa-bell"></span>
              </div>
              <ul class="dropdown-menu noti-table" aria-labelledby="noti">
                <li class="noti-comp">
                  <a href="#">
                    <img class="img-responsive img-circle noti-pic" src="img/avatar/ava1.jpg">
                    <span> A has comment on Your Post Lorem ababaabaannnnnnnnnnnn</span>
                  </a>
                </li>
                <li class="noti-comp">
                  <a href="#"><img class="img-responsive img-circle noti-pic" src="img/avatar/ava1.jpg">
                    <span> A has comment on Your Post</span>
                  </a>
                </li>
                <li class="noti-comp">
                  <a href="#">
                    <img class="img-responsive img-circle noti-pic" src="img/avatar/ava1.jpg">
                    <span> A has comment on Your Post</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="text-center view-more"><a href="#" class="view-more">View more notification</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="dropdown navbar-component" title="Notification">
              <div class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <span class="fa fa-user"></span> My Account
              </div>
              <ul class="dropdown-menu" aria-labelledby="acc">
                <li><a href="#"><span class="fa fa-cog"></span> Settings</a></li>
                <li><a href="#"><span class="fa fa-sign-out"></span> Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

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
          <img src="img/avatar/ava1.jpg" style="border-radius: 50%" height="30" width="30" alt="Avatar"> Dang Nguyet Anh
          <br><img src="img/avatar/ava5.jpg" style="border-radius: 50%" height="30" width="30" alt="Avatar"> Do Van Lam
          <br><img src="img/avatar/ava1.jpg" style="border-radius: 50%" height="30" width="30" alt="Avatar"> Tran Van Hoa
          <br><img src="img/avatar/ava5.jpg" style="border-radius: 50%" height="30" width="30" alt="Avatar"> Hoang Tuan Anh
          <br><img src="img/avatar/ava1.jpg" style="border-radius: 50%" height="30" width="30" alt="Avatar"> Dang Nguyet Anh

        </div>

      </div>
      <div class="col-sm-7">    

        <div class="row">
          <div class=" well" style="margin-left: 20px; margin-right: 20px">
            <form name="form1" action="createPost" method="POST" role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input type="hidden" name="danhsach" class="form-control">
              <div id="clock">
                <img src=""alt="" id ='image1' style="height: 250px;width: 603px" >
              </div>
              <div class="form-group">
                <label for="telephone">Ảnh :</label>
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
              <textarea name="content" cols="90" rows="10"></textarea>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>



        </div>

      </div>


      <div class="col-sm-3 well">
        <div class="thumbnail">
          <p>Upcoming Events:</p>
          <img src="img/ad/ad1.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Fri. 27 November 2015</p>
          <button class="btn btn-primary">Info</button>
        </div> 

        <div>
          <table id="t01" width="100%">

            <th id="t01" >M</th>
            <th id="t01" >T</th>
            <th id="t01" >W</th>
            <th id="t01" >T</th>
            <th id="t01" >F</th>
            <th id="t01" >S</th>
            <th id="t01" >S</th> 
          </tr>  

          <tr id="t01">
            <td id="t01" colspan="3" class="pad">&nbsp;</td>
            <td id="t01">1</td>
            <td id="t01">2</td>
            <td id="t01">3</td>
            <td id="t01">4</td>
          </tr>
          <tr id="t01">
            <td id="t01" id="today">5</td>
            <td id="t01">6</td>
            <td id="t01">7</td>
            <td id="t01">8</td>
            <td id="t01">9</td>
            <td id="t01">10</td>
            <td id="t01">11</td>
          </tr>
          <tr id="t01">
            <td id="t01">12</td>
            <td id="t01">13</td>
            <td id="t01">14</td>
            <td id="t01">15</td>
            <td id="t01">16</td>
            <td id="t01">17</td>
            <td id="t01">18</td>
          </tr>
          <tr id="t01">
            <td id="t01">19</td>
            <td id="t01">20</td>
            <td id="t01">21</td>
            <td id="t01">22</td>
            <td id="t01">23</td>
            <td id="t01">24</td>
            <td id="t01">25</td>
          </tr>
          <tr id="t01">
            <td id="t01">26</td>
            <td id="t01">27</td>
            <td id="t01">28</td>
            <td id="t01">29</td>
            <td id="t01">30</td>
            <td id="t01" class="pad" colspan="2">&nbsp;</td>
          </tr>

        </table>
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
                  <input type="text" class="form-control" placeholder="search friends">
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
                <td >
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
            <button type="button" class="btn btn-primary " onclick="checkstatus()">Save Changes</button>
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
              alert(res);
              form1.danhsach.value = res;
            }
          </script>
          </div>
        </div>      
      </div>
    </div>
<footer class="container-fluid text-center">
  <p>Product by Reinbooru team &copy</p>
</footer>
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

</body>
</html>
