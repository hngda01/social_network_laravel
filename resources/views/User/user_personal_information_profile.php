<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!-- 
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google! 
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <title>user personal information profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	
body {
    margin-top: 40px;
    min-height: 100%;
    background: #ebecf2;
}
.userProfileInfo .image {
    position: relative
}

.userProfileInfo .image .editImage {
    position: absolute;
    bottom: -27px;
    right: 20px;
    background: #fe5621;
    color: #fff;
    text-align: center;
    font-size: 18px;
    font-size: 1.8rem;
    width: 54px;
    height: 54px;
    line-height: 54px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box
}

.userProfileInfo .image .editImage:hover {
    background: #fe693a
}

.userProfileInfo .box {
    padding: 0
}

.userProfileInfo .box .info,
.userProfileInfo .box .name,
.userProfileInfo .box .socialIcons {
    padding: 15px 20px;
    border-bottom: 1px solid #e6e7ed
}

.userProfileInfo .box .socialIcons {
    border: 0
}

.userProfileInfo .box .info>span {
    margin: 10px 0;
    display: block;
    padding: 0 0 0 35px;
    position: relative
}

.userProfileInfo .box .info>span .fa {
    position: absolute;
    left: 5px;
    top: 4px;
    color: #9da2a6
}

.boxHeadline {
    margin: 0 0 25px 0;
    font-size: 18px;
    font-size: 1.8rem
}

.boxHeadline+.boxHeadlineSub {
    margin: -18px 0 30px 0
}

.boxHeader .boxTitle {
    margin: 22px 0 20px 30px
}

.boxHeader .boxHeaderOptions {
    margin: 9px 12px 0 0
}

.boxHeader .boxHeaderOptions .btn {
    color: #9da2a6;
    padding: 0;
    width: 40px;
    height: 40px;
    line-height: 42px;
    text-align: center;
    font-size: 24px;
    font-size: 2.4rem
}

.boxHeader .boxHeaderOptions .btn:active,
.boxHeader .boxHeaderOptions .btn:focus,
.boxHeader .boxHeaderOptions .btn:hover {
    background: #f2f9ff;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none
}

.boxHeader.pageBoxHeader .boxHeaderOptions {
    margin: 20px 12px 0 0
}

.boxHeader.boxHeaderBorders {
    border-bottom: 1px solid #e6e7ed
}

.boxHeader.box {
    padding: 30px
}

.boxHeader.box .pageTitle {
    margin: 0 0 6px 0
}

.boxHeader.box .pageTitle+.breadcrumb {
    margin: 0
}

.boxTitle {
    font-size: 14px;
    font-size: 1.4rem;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0 0 25px 0
}

.boxHeadlineSub {
    font-size: 14px;
    font-size: 1.4rem;
    font-weight: 400;
    font-style: italic;
    color: #919599;
    margin: 0 0 25px 0;
    line-height: 18px
}

.boxHeadlineSub a {
    color: #fe5621
}

.bgTitle {
    background: url(../../img/bg-sharpen.jpg) no-repeat;
    background-size: 100% 100%
}

.bgTitle .boxTitle {
    margin: 0;
    padding: 22px 30px;
    color: #fff
}

.box {
    background: #fff;
    padding: 30px;
    margin: 0 0 24px 0
}

.box.box-without-padding {
    padding: 0
}

.box.box-without-sidepadding {
    padding: 8px 0
}

.box.box-without-sidepadding .boxTitle {
    margin-left: 30px
}

.box.box-without-bottom-padding {
    padding-bottom: 0
}

.box .tableWrap {
    margin: 0 -30px
}

.box .table-responsive {
    width: auto
}

.box .panel-group:last-of-type {
    margin-bottom: 0
}


.simpleListings {
    padding: 0;
    margin: 0
}

.simpleListings li {
    list-style-type: none;
    padding: 0 0 20px 0;
    margin: 20px 0 0 0;
    border-bottom: 1px solid #e6e7ed;
    position: relative
}

.simpleListings li:first-child {
    margin-top: 0
}

.simpleListings li:only-child {
    border-bottom: 0
}

.simpleListings li .title {
    font-size: 14px;
    font-size: 1.4rem;
    font-weight: 700;
    text-transform: uppercase;
    margin: 0 0 2px 0
}

.simpleListings li .title span {
    font-weight: 400;
    text-transform: none
}

.simpleListings li .title a:hover {
    color: #fe5621
}

.simpleListings li .info {
    color: #919599;
    font-style: italic
}

.simpleListings li p {
    margin: 7px 0 0 0
}

.simpleListings li img {
    margin: 20px 0
}

.userActivities {
    margin-bottom: 25px
}

.userActivities+.showMore {
    margin: 0 0 0 70px
}

.userActivities .i {
    margin-top: 25px;
    position: relative
}

.userActivities .i:first-child {
    margin-top: 0
}

.userActivities .i .image {
    position: absolute;
    top: 20px;
    left: 0
}

.userActivities .i .activityContent {
    margin: 0 0 0 70px;
    border: 1px solid #e6e7ed;
    min-height: 70px
}

.userActivities .i .activityContent:after,
.userActivities .i .activityContent:before {
    content: '';
    left: 48px;
    top: 40px;
    border: solid transparent;
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none
}

.userActivities .i .activityContent:after {
    border-right-color: #fff;
    border-width: 12px;
    margin-top: -12px
}

.userActivities .i .activityContent:before {
    border-right-color: #dcdcdc;
    border-width: 11px;
    margin-top: -11px
}

.userActivities ul {
    padding: 20px 25px
}

.userActivities ul li .title {
    font-size: 16px;
    font-size: 1.6rem;
    text-transform: none
}

.userActivities .status li {
    padding-bottom: 0
}

.userActivities .status li .share {
    margin: 20px 0 0 0
}

.userActivities .status li .share a {
    color: #fe5621;
    display: inline-block;
    margin: 0 0 0 20px
}

.userActivities .status li .share a:first-child {
    margin: 0
}

.userActivities .status li .share a .fa {
    color: #9da2a6;
    margin: 0 3px 0 0;
    -webkit-transition: color .3s ease;
    -moz-transition: color .3s ease;
    -ms-transition: color .3s ease;
    -o-transition: color .3s ease
}

.userActivities .status li .share a:hover .fa {
    color: #fe5621
}

.userActivities .comments {
    background: #f5f6fa;
    border-top: 1px solid #e6e7ed
}

.userActivities .comments li:last-child {
    border-bottom: 0;
    padding-bottom: 0
}

.userActivities .comments li .image {
    position: absolute;
    left: 0;
    top: 0
}

.userActivities .comments li .image img {
    margin: 0
}

.userActivities .comments li .c {
    margin: 0 0 0 70px
}

.userActivities .comments li .c .form-control {
    border-left: 1px solid #e6e7ed;
    padding: 10px 18px;
    margin: 0 0 10px 0
}

.userActivities .comments li .c .form-control:focus {
    border-color: #e6e7ed
}

.userActivities .comments li.showComments {
    border-bottom: 0;
    padding: 0;
    margin: 0 0 15px 0
}

.userActivities .comments li.showComments .fa {
    color: #9da2a6;
    margin: 0 3px 0 0
}

.userActivities .comments li.showComments a:hover {
    color: #fe5621
}

@media (min-width: 992px) {
    .userProfileInfo .image img {
        width: 100%;
    }
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-md-4 col-lg-3">
			<div class="userProfileInfo">
				<div class="image text-center">
					<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" class="img-responsive">
					<a href="#" title="#" class="editImage">
						<i class="fa fa-camera"></i>
					</a>
				</div>
				<div class="box">
					<div class="name"><strong>John Doe</strong></div>
					<div class="info">
						<span><i class="fa fa-fw fa-clock-o"></i> <a href="tel:+4210555888777" title="#">+421 (0) 555 888 777</a></span>
						<span><i class="fa fa-fw fa-list-alt"></i> <a href="#" title="#">name@example.com</a></span>
						<span><i class="fa fa-fw fa-usd"></i> Best street No. 554/7A<br>949 01 Florida<br>United States</span>
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
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-8 col-lg-9">
			<div class="box">
				<h2 class="boxTitle">Personal information</h2>
				<!-- Tabs -->
				<ul class="nav nav-tabs userProfileTabs" role="tablist">
					<li role="presentation" class=""><a href="#tab-item-1" aria-controls="tab-item-1" role="tab" data-toggle="tab" aria-expanded="false">About</a></li>
					<li role="presentation" class="active"><a href="#tab-item-2" aria-controls="tab-item-2" role="tab" data-toggle="tab" aria-expanded="true">Activities</a></li>
					<li role="presentation" class=""><a href="#tab-item-3" aria-controls="tab-item-3" role="tab" data-toggle="tab" aria-expanded="false">Photos</a></li>
					<li role="presentation" class=""><a href="#tab-item-4" aria-controls="tab-item-4" role="tab" data-toggle="tab" aria-expanded="false">Friends</a></li>
				</ul>

				<div class="tab-content">
					<!-- About -->
					<div role="tabpanel" class="tab-pane fade" id="tab-item-1">
						<div class="userProfileContent">
							<div class="i">
								<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
								<h2 class="boxHeadline">Brief</h2>
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

					<!-- Activities -->
					<div role="tabpanel" class="tab-pane fade active in" id="tab-item-2">
						<div class="userActivities">
							<div class="i">
								<a href="#" title="#" class="image">
									<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="44" height="44">
								</a>
								<div class="activityContent">
									<ul class="simpleListings status">
										<li>
											<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
											<div class="title">
												<a href="#" title="#">Alicia Vouptates</a>
											</div>
											<div class="info">6 hours ago</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien at risus commodo varius vel ut sapien. Aenean sodales non ex et venenatis. In hac habitasse platea dictumst. Donec vitae tellus non erat dapibus hendrerit. Class aptent taciti <strong>bold text lorem ipsum</strong> per conubia nostra, per inceptos himenaeos.</p>
											<div class="share">
												<a href="#" title="#"><i class="fa fa-thumbs-up"></i> 26 likes</a>
												<a href="#" title="#"><i class="fa fa-comments"></i> 14 comments</a>
												<a href="#" title="#"><i class="fa fa-share"></i> 10 shares</a>
											</div>
										</li>
									</ul>
									

									<!-- Comments -->
									<ul class="simpleListings comments">
										<li class="showComments">
											<a href="#" title="#"><i class="fa fa-comments"></i> Show <strong>all 21 comments</strong></a>
										</li>
										<li>
											<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
											<a href="#" title="#" class="image">
												<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="44" height="44">
											</a>
											<div class="c">
												<div class="title"><a href="#" title="#">Jessica Whore</a></div>
												<div class="info">4 hours ago</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien at risus commodo varius vel ut sapien. Aenean sodales non ex et venenatis. In hac habitasse platea dictumst. Donec vitae tellus non erat dapibus hendrerit. Class aptent taciti bold text lorem ipsum per conubia nostra, per inceptos.</p>
											</div>
										</li>
										<li>
											<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
											<a href="#" title="#" class="image">
												<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="44" height="44">
											</a>
											<div class="c">
												<div class="title"><a href="#" title="#">Muhammad Motherfucker II.</a></div>
												<div class="info">3 hours ago</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</li>
										<li>
											<a href="#" title="#" class="image">
												<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="44" height="44">
											</a>
											<div class="c">
												<form>
													<textarea rows="1" placeholder="Start typing here..." class="form-control js-autogrow" style="overflow: hidden; word-wrap: break-word; height: 42px;"></textarea>
													<button type="submit" class="btn btn-sm btn-gray">Post Comment</button>
												</form>
											</div>
										</li>
									</ul> 
								</div>
							</div>

							<div class="i">
								<a href="#" title="#" class="image">
									<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="44" height="44">
								</a>
								<div class="activityContent">
									<ul class="simpleListings status">
										<li>
											<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
											<div class="title">
												<a href="#" title="#">Hedviga Malinová</a>
											</div>
											<div class="info">6 hours ago</div>
											<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="150" height="212" class="img-responsive">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<div class="share">
												<a href="#" title="#"><i class="fa fa-thumbs-up"></i> 26 likes</a>
												<a href="#" title="#"><i class="fa fa-comments"></i> 14 comments</a>
												<a href="#" title="#"><i class="fa fa-share"></i> 10 shares</a>
											</div>
										</li>
									</ul>
									
									<!-- Comments -->
									<ul class="simpleListings comments">
										<li class="showComments">
											<a href="#" title="#"><i class="fa fa-comments"></i> Show <strong>all 21 comments</strong></a>
										</li>
										<li>
											<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
											<a href="#" title="#" class="image">
												<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="44" height="44">
											</a>
											<div class="c">
												<div class="title"><a href="#" title="#">Jessica Whore</a></div>
												<div class="info">4 hours ago</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien at risus commodo varius vel ut sapien. Aenean sodales non ex et venenatis. In hac habitasse platea dictumst. Donec vitae tellus non erat dapibus hendrerit. Class aptent taciti bold text lorem ipsum per conubia nostra, per inceptos.</p>
											</div>
										</li>
										<li>
											<a href="#" title="#" class="itemOptions"><i class="fa fa-cog"></i></a>
											<a href="#" title="#" class="image">
												<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="44" height="44">
											</a>
											<div class="c">
												<div class="title"><a href="#" title="#">Muhammad Motherfucker II.</a></div>
												<div class="info">3 hours ago</div>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											</div>
										</li>
										<li>
											<a href="#" title="#" class="image">
												<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="#" width="44" height="44">
											</a>
											<div class="c">
												<form>
													<textarea rows="1" placeholder="Start typing here..." class="form-control js-autogrow" style="overflow: hidden; word-wrap: break-word; height: 42px;"></textarea>
													<button type="submit" class="btn btn-sm btn-gray">Post Comment</button>
												</form>
											</div>
										</li>
									</ul> 
								</div>
							</div>
						</div>
						<!-- Show more -->
						<a href="#" title="#" class="btn btn-primary showMore"><i class="fa fa-refresh"></i> Show more</a>
					</div>

					<!-- Photos -->
					<div role="tabpanel" class="tab-pane fade" id="tab-item-3">
						<img src="conan.jpg" style="height:100px;">
						<p>Cras et lacus vel turpis auctor dapibus eu non dui. Sed scelerisque, ligula quis consequat lacinia, odio velit lacinia arcu, et volutpat enim magna ut sapien. Nunc eget sem laoreet, condimentum enim eu, convallis eros.</p>
					</div>

					<!-- Friends -->
					<div role="tabpanel" class="tab-pane fade" id="tab-item-4">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel sapien at risus commodo varius vel ut sapien. Aenean sodales non ex et venenatis. In hac habitasse platea dictumst. Donec vitae tellus non erat dapibus hendrerit. Class aptent taciti <strong>bold text lorem ipsum</strong> per conubia nostra, per inceptos himenaeos. Sed ornare vestibulum aliquet. Suspendisse quis massa ac turpis euismod lacinia eget a lorem. Curabitur at ornare augue. Sed condimentum dolor nec neque fringilla, non consequat mauris lobortis. Ut nec eros sem.</p>
						<p>Cras et lacus vel turpis auctor dapibus eu non dui. Sed scelerisque, ligula quis consequat lacinia, odio velit lacinia arcu, et volutpat enim magna ut sapien. Nunc eget sem laoreet, condimentum enim eu, convallis eros.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>