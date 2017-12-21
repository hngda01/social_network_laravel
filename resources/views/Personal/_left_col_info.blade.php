<div class="col-xs-12 col-md-4 col-lg-3" style="margin-left: 20px;">
	<div class="userProfileInfo">
		<div class="image text-center">
			<img  src="images/{{$user->userAvatar($user->id)}}.png" alt="#" class="img-responsive">
		</div>
		<div class="box">
			<div class="name" style="size: 25px;"><center><strong>{{$user->name}}</strong>
			<br>
				@if(Auth::user()->isFriend(Auth::user()->id,$user->id)==0)
					@if(Auth::user()->id!= $user->id)
					<a href="addFriends/{{$user->id}}" class="btn btn-primary">Add friend</a>
					@endif
				@elseif(Auth::user()->isFriend(Auth::user()->id,$user->id)==-1)
					<a class="btn btn-primary">Request sent</a>
				@else
					<a href="unfriend/{{$user->id}}" class="btn btn-primary">Unfriend</a>
				@endif
			

			</center></div>
			@if(count($user->info)!=0)
			@foreach($user->info as $info)
			<div class="info">
				<span><i class="fa fa-envelope-o"></i> {{$user->email}}</span>
				<span><i class="fa fa-birthday-cake"></i> {{$info->date_of_birth}}</span>
				<span><i class="fa fa-map-marker"></i> {{$info->address}}</span>
				<span><i class="fa fa-university"></i> {{$info->school}}</span>
				<span><i class="fa fa-futbol-o"></i> {{$info->hobby}}</span>
			</div>
			@endforeach
			@elseif($user->id == Auth::user()->id)
			<center>Plese update your information</center>
			@else
			<center>information is empty</center>
			@endif
			<div >

			@if($user->id == Auth::user()->id)
			<center><a href="{{route('edit-info',['user_id' => $user->id ])}}" class="btn btn-primary">Update</a></center>
			@endif	
			</div>
			<br><br><br><br><br><br>
		</div>
	</div>
</div>