<div class="col-sm-7">  
  <div class="row">
    <div class=" well2" style="margin-left: 20px; margin-right: 20px">
      <div align="left">
        <table>
          <tr>
            <td style="padding-right: 20px">
              <img src="images/{{$diary->userAvatar($diary->id_user)}}.png" class="img-circle" height="55" width="55" alt="Avatar">
            </td>
            <td>
              <span class="page-newsfeed-06">
                <a href="profile/{{$diary->id_user}}" title="">{{$diary->userName($diary->id_user)}}</a>
              </span>
              <br> {{$diary->updated_at->diffForHumans()}} &nbsp;&nbsp;&nbsp;
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
              <i class="fa fa-tag" ></i>
              Topic: <a class="tag badge badge-default overflow-hidden" data-v-2d5c6a76>{{$diary->category->name}}</a>
              &nbsp;&nbsp;&nbsp;
              @if($diary->id_user== Auth::user()->id)
              <a href="editPost/{{$diary->id}}" class="fa fa-pencil" data-toggle="modal" data-target="#editPost">edit</a>
              &nbsp;&nbsp;&nbsp;
              <a href="deletePost/{{$diary->id}}" class="fa fa-trash">delete</a>
              @endif
            </td>
          </tr>
        </table>
      </div>
      <img src="images/{{$diary->image}}.png" alt="Paris" width="100%" height="300">
      <h4 class="page-newsfeed-06"> {{$diary->title}}</h4> 
      <p>{{$diary->content}}</p> 
      <br>
      {{-- <hr style="background-color: #000;height: 1px;"> 
      <div class="page-newsfeed-06">
          <table>
            <tr>
              <td width="70px">
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 100
              </td>
              <td width="50%">
                <i class="fa fa-comments-o" aria-hidden="true"></i> 
                {{count($diary->comment)}}
              </td>
            </tr>
          </table>
          </div> --}}
      {{-- comment --}}
      <div style="background-color: #f6f7f1">
      @foreach($comment as $cmt)
      <table style="width: 100%;">
        <tr >
          <td style="padding-right: 20px" width="100">
            <img src="images/{{$cmt->userAvatar($cmt->id_user)}}.png" class="img-circle" height="55" width="55" alt="Avatar">
          </td>
          <td align="left" valign="top">
            <span class="page-newsfeed-06">
              <a href="profile/{{$cmt->id_user}}" title="" >{{$cmt->userName($cmt->id_user)}}</a>
            </span>
            <span class="font-custom-01">
              <br> {{$cmt->updated_at->diffForHumans()}}
            </span>               
          </td>
        </tr>
        <tr >
          <td></td>
          <td align="left" valign="top">
            {{-- comment --}}
            {{$cmt->content}}
          </td>
        </tr>
      </table><br>
      @endforeach
      {{-- write comment --}}
      <form action="writeComment" method="POST" role="form" >
        {{ csrf_field() }}
        {{-- <label for="">write comment</label> --}}
        <table style="width: 100%;">
          <tr>
            <td style="padding-right: 20px" width="100">
              <img src="images/{{$user->userAvatar($user->id)}}.png" class="img-circle" height="55" width="55" alt="Avatar">
            </td>
            <td align="left">
            <a href="profile/{{Auth::user()->id}} title="" class="page-newsfeed-06">{{$user->name}} </a>  
            <input type="hidden" name="diary_id" value='{{ $diary->id }}' />
              <input type="text" class="form-control" style="width: 100%" name="comment" placeholder="input comment">
              
              <br>                       
            </td>
            <td width="80px">
              <button type="submit" class="btn btn-primary" style="height: 33px">Submit</button>
            </td>
          </tr>
          <tr>
            <td></td>
            <td align="left">
              {{-- comment --}}
              
            </td>
          </tr>
        </table><br>
      </form>
      </div>
    </div>



  </div>

</div>