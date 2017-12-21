@extends('layout.index')
@section('content')

<div class="container">
    <div class="row ng-scope">  
     
        @foreach($users as $user)
        <div class="media">
            <a href="" class="pull-left">
                <img src="images/{{$user->userAvatar($user->id)}}.png" height = "80" width="80" alt="{{$user->name}}">
            </a>
            <div class="media-body">
                <h4 class="media-heading">
                    <a href="profile/{{$user->id}}">{{$user->name}}</a>
                </h4>
                @if($user->email)
                <p>{{$user->email}}</p>
                @endif
                @if(Auth::user()->isFriend(Auth::user()->id,$user->id)==0)
                @if(Auth::user()->id!= $user->id)
                <a href="addFriends/{{$user->id}}" >Add friend</a>
                @endif
                @elseif(Auth::user()->isFriend(Auth::user()->id,$user->id)==-1)
                <a >Request sent</a>
                @else
                <a href="unfriend/{{$user->id}}" >Unfriend</a>
                @endif
            </div>
        </div>
        @endforeach
        
        <div class="text-align-center">
            <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#">Prev</a>
                </li>
                <li class="active"><a href="#">1</a>
                </li>
                <li><a href="#">2</a>
                </li>
                <li><a href="#">3</a>
                </li>
                <li><a href="#">4</a>
                </li>
                <li><a href="#">5</a>
                </li>
                <li><a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>

</div>
</div>

@endsection