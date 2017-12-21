@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="css/friend_page.css">
@section('content')

<div class="container">
    <div class="row bootstrap snippets"> 
    <div class="col-md-9 col-sm-7" style="width: 75%;"> 
            <h2>Members</h2> 
                @if(!$friends->count())
                    <p> you have no friend</p>
                @else
                @foreach($friends as $user)
                <div class="member-entry pull-left" style="padding-right: 95px;" > 
                    <a href="/home/{{ $user->id}}" class="member-img"> 
                        <img src="images/{{$user->userAvatar($user->id)}}.png" class="img-rounded"> 
                        <i class="fa fa-forward"></i> 
                    </a> 
                    <div class="member-details"> 
                        <h4> <a href="/home/{{ $user->id}}"> {{ $user->name }} </a> </h4> 
                        <div class="row info-list"> 
                            <div class="col-sm-4"> 
                                <i class="fa fa-briefcase"></i>
                                 Founder at <a href="#">Tech</a> 
                            </div> 
                            <div class="col-sm-4"> 
                                <i class="fa fa-twitter"></i> 
                                <a href="#">@ {{$user->name}} </a> 
                            </div> 
                            <div class="col-sm-4"> 
                                <i class="fa fa-facebook"></i> 
                                <a href="#">Facebook</a> 
                            </div> 
                            
                            <div class="clear"></div> 
                            <div class="col-sm-4"> 
                                <i class="fa fa-location"></i> 
                                <a href="#">{{ $user->address }}</a> 
                            </div> 
                            <div class="col-sm-4"> 
                                <i class="fa fa-envelope"></i> 
                                <a href="#"> {{$user->email}} </a> 
                            </div> 
                            <div class="col-sm-4"> 
                                <i class="fa fa-linkedin"></i> 
                                <a href="#">test</a> 
                            </div> 
                        </div> 
                    </div> 
                </div>
                @endforeach
                @endif
    </div> 
    
    <div class="member-details">
            <h2> Friend request</h2>
                @if(!$requests->count())
                    <p>You have no friend request</p>
                @else
                @foreach($requests as $user)
                <div class="member-entry pull-right" style="width: 25%;"> 
                    <a href="/home/{{ $user->id}}" class="member-img"> 
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-rounded" style="height: 40px;"> 
                        <i class="fa fa-forward"></i> 
                    </a> 
                    <div class="member-details"> 
                        <h4> <a href="/home/{{ $user->id}}"> {{ $user->name }} </a> </h4> 
                    </div> 
                </div>
                @endforeach
                @endif
    </div>
   
   </div> 
</div>
@endsection