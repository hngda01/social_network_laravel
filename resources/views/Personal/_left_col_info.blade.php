<div class="col-xs-12 col-md-4 col-lg-3">
	<div class="userProfileInfo">
		<div class="image text-center">
			<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" class="img-responsive">
		</div>
		<div class="box">
			<div class="name" style="size: 25px;"><center><strong>{{$user->name}}</strong>
			<br>
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
			

			</center></div>
			@foreach($user->info as $info)
			<div class="info">
				<span><i class="fa fa-envelope-o"></i> {{$user->email}}</span>
				<span><i class="fa fa-birthday-cake"></i> {{$info->date_of_birth}}</span>
				<span><i class="fa fa-map-marker"></i> {{$info->address}}</span>
				<span><i class="fa fa-university"></i> {{$info->school}}</span>
				<span><i class="fa fa-futbol-o"></i> {{$info->hobby}}</span>
			</div>
			@endforeach
			<div class="socialIcons clearfix">

				<a href="{{route('edit-info',['user_id' => $user->id ])}}" class="btn btn-fixed btn-sm">Edit</a>
			</div>
			<br><br><br><br><br><br>
		</div>
	</div>
</div>