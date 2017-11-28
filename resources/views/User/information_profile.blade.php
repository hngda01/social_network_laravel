@extends('layouts.app')
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
@section('content')
	<div class="row">
		<div class="col-xs-12 col-md-4 col-lg-3">
			<div class="userProfileInfo">
				<div class="image text-center">
					<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" class="img-responsive">
						<i class="fa fa-camera"></i>
				</div>
				<div class="box">
					<div class="name" style="size: 25px"><strong>{{$user->name}}</strong></div>
					<div class="info">
						<span><i class="fa fa-fw fa-clock-o"></i> <a href="tel:+4210555888777" title="#"><br></a></span>
						<span><i class="fa fa-fw fa-list-alt"></i> <a href="#" title="#">{{$user->email}}</a></span>
						<span><i class="fa fa-fw fa-usd"></i> Best street No. 554/7A<br>{{$user->address}}<br>United States</span>
					</div>
					<div class="socialIcons clearfix">
						<a href="#" title="#" class="fb">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="#" title="#" class="twitter">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="#" title="#" class="google-plus">
							<i class="fa fa-google-plus"></i>
						</a>
                        <a href="{{route('edit-info',['user_id' => $user->id ])}}" class="btn btn-fixed btn-sm">Edit</a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-8 col-lg-9">
			<div class="box">
				<h2 class="boxTitle">Personal information</h2>
				<!-- Tabs -->
				<ul class="nav nav-tabs userProfileTabs" role="tablist">
					<li role="presentation" class=""><a href="#tab-item-1" aria-controls="tab-item-1" role="tab" data-toggle="tab" aria-expanded="true">About</a></li>
					
					<li role="presentation" class=""><a href="#tab-item-3" aria-controls="tab-item-3" role="tab" data-toggle="tab" aria-expanded="false">Photos</a></li>
					<li role="presentation" class=""><a href="#tab-item-4" aria-controls="tab-item-4" role="tab" data-toggle="tab" aria-expanded="false">Friends</a></li>
				</ul>

				<div class="tab-content">
					<!-- About -->
					<div role="tabpanel" class="tab-pane fade" id="tab-item-1">
						<div class="userProfileContent">
							<div class="i">
								<i class="fa fa-cog"></i>
								<h2 class="boxHeadline">{{$user->name}}</h2>
								<a href="conan.jpg">CONAN</a>
							</div>

							<div class="i">
								<h2 class="boxHeadline">Experience</h2>
								<ul class="simpleListings">
									<li>
										<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
										<div class="title">Sr. UX designer <span>(3 years)</span></div>
										<div class="info">6th Sep 2012 - 24th Oct 2015 at <a href="#" title="#" class="text-orange">eFabrica.com</a></div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien at risus commodo varius vel ut sapien. Aenean sodales non ex et venenatis. In hac habitasse platea dictumst.</p>
									</li>
									<li>
										<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
										<div class="title">Front-end Developer <span>(2 years)</span></div>
										<div class="info">2nd Nov 2010 - 6th Oct 2012 at <a href="#" title="#" class="text-orange">Apple.com</a></div>
									</li>
									<li>
										<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
										<div class="title">Jr. Web designer <span>(3 years)</span></div>
										<div class="info">29th May 2007 - 21st Sep 2010 at <a href="#" title="#" class="text-orange">Alkajda.com</a></div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien at risus commodo varius vel ut sapien. Aenean sodales non ex et venenatis. In hac habitasse platea dictumst.</p>
									</li>
								</ul>
							</div>

							<div class="i">
								<h2 class="boxHeadline">Courses / Certificates</h2>
								<ul class="simpleListings">
									<li>
										<div class="title">Usability week crash course <span>(Norman Nielsen Group)</span></div>
										<div class="info">29th May 2007 - 21st Sep 2010 at <a href="#" title="#" class="text-orange">nngroup.com</a></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Photos -->
					<div role="tabpanel" class="tab-pane fade" id="tab-item-3">
						<img src="https://bootdey.com/img/Content/avatar/avatar1.png" style="height:100px;">
						<p>Cras et lacus vel turpis auctor dapibus eu non dui. Sed scelerisque, ligula quis consequat lacinia, odio velit lacinia arcu, et volutpat enim magna ut sapien. Nunc eget sem laoreet, condimentum enim eu, convallis eros.</p>
					</div>

					<!-- Friends -->
					<div role="tabpanel" class="tab-pane fade" id="tab-item-4">
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
@endsection