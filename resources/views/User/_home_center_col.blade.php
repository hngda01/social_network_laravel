<div class="col-sm-7">

      
      
      <div class="row">
        @foreach($friends as $friend)
        @foreach($friend->diaries as $diary) 
        @if($diary->checkPrivacy(Auth::user()->id,$diary)==1)
        <div class=" well" style="margin-left: 20px; margin-right: 20px">
          <div align="left">
            <table>
              <tr>
                <td style="padding-right: 20px">
                  <img src="img/avatar/ava5.jpg" class="img-circle" height="55" width="55" alt="Avatar">
                </td>
                <td >
                  <a class="page-newsfeed-06" href="profile/{{$friend->friend_id}}">

                    {{$friend->userName($friend->friend_id)}}
                  </a>      
                  <br> 3 hours ago &nbsp;&nbsp;&nbsp;
                  @if($diary->id_privacy == 0)
                  <i class="fa fa-lock" aria-hidden="true"></i>
                  @elseif($diary->id_privacy == 1)
                  <i class="fa fa-users" aria-hidden="true"></i>
                  @elseif($diary->id_privacy == 2)
                  <i class="fa fa-cog" aria-hidden="true"></i>
                  @else
                  <i class="fa fa-globe " ></i>
                  @endif
                  &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-tag" aria-hidden="true"></i>
                  Topic: <a href="/tags/nodejs" class="tag badge badge-default overflow-hidden" data-v-2d5c6a76>{{$diary->category->name}}</a>

                </td>
              </tr>
            </table>
          </div>
          <table>
            <tr>
              <td style="padding-top: 10px">
                <img src="images/{{$diary->image}}.png" alt="Paris" width="150" height="100">
              </td>
              <td align="left" style="padding-left: 10px">
                <a href="viewPost/{{$diary->id}}" title=""><h4 class="page-newsfeed-06"> {{$diary->title}}</h4>
                </a> 
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
        @endif        
        @endforeach
        @endforeach
      </div>
    </div>