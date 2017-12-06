<div class="media">
	<a href="" class="pull-left">
		<img src="http://static1.comicvine.com/uploads/scale_super/11111/111111327/3278747-dc-detective-conan-17352255-857-933.jpg" height = "80" width="80" alt="{{$user->name}}">
	</a>
	<div class="media-body">
		<h4 class="media-heading">
			<a href="">{{$user->name}}</a>
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