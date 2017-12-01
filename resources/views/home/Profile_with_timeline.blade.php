@extends('layouts.app')
@section('content')
<div class="container bootstrap snippet" >
    <div class="content-hero" ">
      <img class="content-hero-embed" src="http://images6.fanpop.com/image/photos/39500000/Detective-Conan-detective-conan-39597749-500-268.jpg" alt="" >
      <div class="content-hero-overlay bg-grd-red"></div>
      <div class="content-hero-body">
        <div class="pull-right" role="group">
          <a  class="btn btn-icon btn-default"><span class="fa fa-user"></span></a>
        </div>
      </div>
    </div>
    
    <div class="content-hero content-hero-sm">
      <div class="row">
        <div class="col-md-6 col-xs-8">
          <div class="media">
            <div class="media-left">
              <a class="kit-avatar kit-avatar-64 no-padding border-white hidden-xs" name="viewInfo" href="{{ route('view-info',['user_id' => Auth::user()->id ]) }}">
                <img alt="cover" src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg">
              </a>
              <a class="kit-avatar kit-avatar-42 no-padding border-white visible-xs" href="#">
                <img alt="cover" src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg">
              </a>
            </div>
            <div class="media-body">
              <h2 class="display-name media-heading text-red hidden-xs">{{ $user->name }}</h2>
              <h3 class="display-name media-heading text-red visible-xs">hmd</h3>
              <p class="text-muted"><span class="mr-2x">Since April 21, 2010</span> <span><i class="fa fa-skype fa-fw hidden-xs"></i> {{  $user->phonenumber }}</span></p>
              <p class="text-muted">Live at {{$user->address}}</p>
              <p class="text-muted">alias: </p>
            </div><!-- /.pull -->
          </div>
        </div><!-- /.cols -->
    
        <div class="col-md-2 col-xs-4 col-md-push-4 text-right">
          @if(Auth::user()->hasFriendRequestsPending($user))
            <button class="btn btn-default" style="padding: 6px 6px;">Waiting for {{ $user->name }}</button>
          @elseif(Auth::user()->hasFriendRequestsReceived($user))
            <a href="{{route('friends.accept',['name'=> $user->name])}}" class="btn btn-primary">Accept</a>
          @elseif(Auth::user()->isFriendWith($user)) 
            <button class="btn btn-default">Is Friend</button>
          @else
              @if(Auth::user()->id !== $user->id)
             <a href="{{route('friends.add',['name'=> $user->name])}}" class="btn btn-primary">Add friend</a>
             @endif
          @endif
          <a href="#" rel="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" aria-label="Poke" data-original-title="Jawil sitik"><i class="fa fa-thumbs-o-up"></i></a>
          
        </div><!-- /.cols -->
    
        <div class="col-md-4 col-xs-12 col-md-pull-2 text-center">
          <div class="row">
            <div class="col-xs-4">
              <div class="p-1x">
                <span class="headline"><strong>2,4K</strong></span>
                <p>Followers</p>
              </div>
            </div><!-- /.cols -->
          </div><!-- /.row -->
        </div><!-- /.cols -->
      </div><!-- /.row -->
    </div>
    <div class="content-body">
         @include('includes.message')
        <ul class="timeline">
            <li class="" ></li>
            <li class="timeline-group">
              <a href="#" class="btn btn-default">Today</a>
            </li>            
        </ul>
        <ul class="timeline" style="height: 100%" >
            <li class="timeline timeline-line fix-timeline-post"></li>
            <li class="timeline-item timeline-poster">
              <div class="timeline-badge">
                <a class="border-teal" rel="tooltip" title="" data-container="body" href="#" data-original-title="What will you do?"></a>
              </div>
              <div class="timeline-panel panel fade in panel-default panel-fill" data-fill-color="true" data-init-panel="true">
                <form action="{{ route('post.taonhatki',['user' => $user->id]) }}" method="post">
                <div class="panel-body">
                  <ul class="nav nav-tabs nav-contrast-red">
                    <li class=""><a data-toggle="tab" href="#" aria-expanded="false">Status</a></li>
                    <li class=""><a data-toggle="tab" href="#" aria-expanded="false">Photo</a></li>
                    <li class=""><a data-toggle="tab" href="#" aria-expanded="false">Place</a></li>
                    <li class="active"><a data-toggle="tab" href="#" aria-expanded="true">Events</a></li>
                  </ul>
                  <div class="tab-content pt-1x">
                    <textarea name="timelinePost" rows="6" class="form-control autogrow no-border no-resize" placeholder="Write in timeline" style="overflow: hidden; min-height: 6em; height: 52px;"></textarea><div class="autogrow-textarea-mirror" style="display: none; word-wrap: break-word; white-space: normal; padding: 6px 12px; width: 461px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">.<br>.</div>

                  </div>
                </div><!-- /.panel-body -->
            
            
                <div class="panel-footer">
                  <div class="btn-group">
                    <button type="button" class="btn btn-link"><i class="fa fa-user"></i></button>
                    <button type="button" class="btn btn-link"><i class="fa fa-map-marker"></i></button>
                    <button type="button" class="btn btn-link"><i class="fa fa-camera"></i></button>
                    <button type="button" class="btn btn-link"><i class="fa fa-smile-o"></i></button>
                    <button type="button" class="btn btn-link"><i class="fa fa-tags" ></i></button>
                  </div>
                  <div class="pull-right">
                    <button type="submit" class="btn btn-success">Post</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                  </div>
                </div><!-- /.panel-footer -->
                </form>
              </div><!-- /.timeline-panel.panel -->
            </li>
            
           @foreach($posts as $post)
             @if($user->id == $post->user_id)
              <li class="timeline-item">
              <div class="timeline-badge">
                <a class="border-orange" rel="tooltip" title="" data-container="body" href="#" data-original-title="Post"></a>
              </div>
              <div class="timeline-panel panel fade in panel-default panel-fill" data-fill-color="true" data-init-panel="true" data-postid={{ $post->id }}>
                <div class="panel-body">
                  <div class="media mb-2x">
                    <div class="media-left">
                      <a href="#" class="timeline-avatar kit-avatar kit-avatar-36">
                        <img class="media-object" src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg" alt="">
                      </a>
                    </div><!-- /.media-left -->
                    <div class="media-body">
                      <p class="media-heading"><strong>{{ $post->user->name }}</strong> <br><small class="text-muted">{{$post->created_at->diffForHumans()}}</small></p>
                    </div> 
                  </div>
                  <div>
                     <p>{{$post->timelinePost}}</p>
                  </div>  
                </div><!-- /.panel-body -->
                
                <div class="panel-body timeline-resume"> 
                  <div class="pull-right" data-toggle="tooltip" title="" data-original-title="in this post">
                    <a class="kit-avatar kit-avatar-24 align-middle no-border" href="#">
                      <img alt="avatar" title="friend name" src="https://bootdey.com/img/Content/avatar/avatar5.png">
                    </a>
                    <a href="#" class="btn btn-xs btn-default btn-circle">+4</a>
                  </div>
                  <div class="interaction">
                      <a href="#" class="btn btn-bordered btn-default btn-sm">+33</a>
                      <a href="#" class="btn btn-bordered btn-default btn-sm"><span class="fa fa-share fa-fw"></span> 7</a>
                      @if(Auth::user() == $post->user)
                         <a href="{{route('post.delete',['post_id' => $post->id])}}" class="btn btn-danger btn-sm">Delete</a>
                         <button type="submit" class="btn btn-sm btn-primary" id="edit-modal" data-toggle = "modal">Edit</button>
                      @endif
                  </div>
                </div><!-- /.panel-body -->

                <div class="modal fade" tabindex="-1" role="dialog" id="EditModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Edit Post</h4>
                            </div>
                            <form action="{{route('edit')}}" >
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="post-title">Title</label>
                                        <textarea class="form-control" name="post-title" id="posttitle" rows="1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="post-body">Edit the Post :</label>
                                        <textarea class="form-control" name="post-body" id="postcontent" rows="5"></textarea>
                                    </div>  
                                    <div class="form-group">
                                        <label for="post-privacy">Title</label>
                                        <textarea class="form-control" name="post-privacy" id="postprivacy" rows="1"></textarea>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                                </div>
                                <input type="hidden" id="token" value="{{ csrf_token() }}">
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
               
                <div class="panel-body timeline-livelines">
                  <p><a href="#"><small><i class="fa fa-comment-o fa-fw"></i> View 4 more comments</small></a></p>
                  @foreach($comments as $comment)
                  <div class="media">
                    <div class="media-left">
                      <a class="kit-avatar kit-avatar-28" href="#">
                        <img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                      </a>
                    </div>
                    <div class="media-body bordered-bottom">
                      <p class="media-heading"><strong>Arina Rosetti</strong> {{$comment->content}} !</p>
                      <p class="text-muted"><small>22 minutes</small> </p>
                    </div>
                  </div><!-- /.media -->
                  @endforeach
                </div><!-- /.panel-body -->
                <div class="panel-footer timeline-livelines">
                  <form action="{{route('createcomment')}}" method="POST">
                    <a class="kit-avatar kit-avatar-28 no-border pull-left" href="#">
                      <img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar3.png">
                    </a>
                    <div class="input-group input-group-in no-border">
                      <input class="form-control" placeholder="write comment..." name="write_comment">
                      <div class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-chevron-circle-right"></i></button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                      </div>
                    </div>
                  </form>
                </div><!-- /.panel-footer -->
              </div><!-- /.timeline-panel.panel -->
            </li>
             @endif
           @endforeach     
        </ul>
    </div>
</div>

@endsection
