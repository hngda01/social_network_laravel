@extends('layout.index')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@section('content')
<div class="row">
	@include("Personal._left_col_info")

	<div class="col-sm-6">
		<div >
			<!-- Tabs -->
			<ul class="nav nav-tabs userProfileTabs" role="tablist">
				<li role="presentation" class=""><a href="#tab-item-3" aria-controls="tab-item-3" role="tab" data-toggle="tab" aria-expanded="false">Posts</a></li>
				<li role="presentation" class=""><a href="#tab-item-4" aria-controls="tab-item-4" role="tab" data-toggle="tab" aria-expanded="false">Friends</a></li>
			</ul>
			{{-- tab content --}}
			<div class="tab-content">
				<!-- About -->

				<!-- post -->
				<div role="tabpanel" class="tab-pane fade active in" id="tab-item-3">
					@include("Personal._post")
					
				</div>
				@foreach($category as $cat)
					<div role="tabpanel" class="tab-pane fade" id="tab_category{{$cat->id}}">
					@include("Personal._cat_post")
					</div>
				@endforeach

				<!-- Friends -->
				<div role="tabpanel" class="tab-pane fade" id="tab-item-4">
					<div style="background-color: #FFF">
						<h4>{{ $user->name }}'s friend</h4>
					@if(!$user->friends()->count())
					<p>{{ $user->name }} has no friend</p>
					@else
					@foreach($user->friends() as $user)
					@include('User.userblock')
					@endforeach
					@endif
					</div>

				</div>
			</div>
		</div>
	</div>
	@include("Personal._category")
</div>
@endsection