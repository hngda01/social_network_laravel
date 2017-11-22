
@extends("Layout.index")
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
</style>
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
@endsection
