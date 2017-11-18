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
    <title>User profile account setting - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;
background:#eee;
}

.profile-widget {
  position: relative;
}
.profile-widget .image-container {
  background-size: cover;
  background-position: center;
  padding: 190px 0 10px;
}
.profile-widget .image-container .profile-background {
  width: 100%;
  height: auto;
}
.profile-widget .image-container .avatar {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  margin: 0 auto -60px;
  display: block;
}
.profile-widget .details {
  padding: 50px 15px 15px;
  text-align: center;
}

/* Component: Mini Profile Widget */
.mini-profile-widget .image-container .avatar {
  width: 180px;
  height: 180px;
  display: block;
  margin: 0 auto;
  border-radius: 50%;
  background: white;
  padding: 4px;
  border: 1px solid #dddddd;
}
.mini-profile-widget .details {
  text-align: center;
}

/* Component: Panel */
.panel {
  border-radius: 0;
  margin-bottom: 30px;
}
.panel.solid-color {
  color: white;
}
.panel .panel-heading {
  border-radius: 0;
  position: relative;
}
.panel .panel-heading > .controls {
  position: absolute;
  right: 10px;
  top: 12px;
}
.panel .panel-heading > .controls .nav.nav-pills {
  margin: -8px 0 0 0;
}
.panel .panel-heading > .controls .nav.nav-pills li a {
  padding: 5px 8px;
}
.panel .panel-heading .clickable {
  margin-top: 0px;
  font-size: 12px;
  cursor: pointer;
}
.panel .panel-heading.no-heading-border {
  border-bottom-color: transparent;
}
.panel .panel-heading .left {
  float: left;
}
.panel .panel-heading .right {
  float: right;
}
.panel .panel-title {
  font-size: 16px;
  line-height: 20px;
}
.panel .panel-title.panel-title-sm {
  font-size: 18px;
  line-height: 28px;
}
.panel .panel-title.panel-title-lg {
  font-size: 24px;
  line-height: 34px;
}
.panel .panel-body {
  font-size: 13px;
}
.panel .panel-body > .body-section {
  margin: 0px 0px 20px;
}
.panel .panel-body > .body-section > .section-heading {
  margin: 0px 0px 5px;
  font-weight: bold;
}
.panel .panel-body > .body-section > .section-content {
  margin: 0px 0px 10px;
}
.panel-white {
  border: 1px solid #dddddd;
}
.panel-white > .panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #ddd;
}
.panel-white > .panel-footer {
  background-color: #fff;
  border-color: #ddd;
}
.panel-primary {
  border: 1px solid #dddddd;
}
.panel-purple {
  border: 1px solid #dddddd;
}
.panel-purple > .panel-heading {
  color: #fff;
  background-color: #8e44ad;
  border: none;
}
.panel-purple > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-purple {
  border: 1px solid #dddddd;
}
.panel-light-purple > .panel-heading {
  color: #fff;
  background-color: #9b59b6;
  border: none;
}
.panel-light-purple > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-blue,
.panel-info {
  border: 1px solid #dddddd;
}
.panel-blue > .panel-heading,
.panel-info > .panel-heading {
  color: #fff;
  background-color: #2980b9;
  border: none;
}
.panel-blue > .panel-heading .panel-title a:hover,
.panel-info > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-blue {
  border: 1px solid #dddddd;
}
.panel-light-blue > .panel-heading {
  color: #fff;
  background-color: #3498db;
  border: none;
}
.panel-light-blue > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-green,
.panel-success {
  border: 1px solid #dddddd;
}
.panel-green > .panel-heading,
.panel-success > .panel-heading {
  color: #fff;
  background-color: #27ae60;
  border: none;
}
.panel-green > .panel-heading .panel-title a:hover,
.panel-success > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-green {
  border: 1px solid #dddddd;
}
.panel-light-green > .panel-heading {
  color: #fff;
  background-color: #2ecc71;
  border: none;
}
.panel-light-green > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-orange,
.panel-warning {
  border: 1px solid #dddddd;
}
.panel-orange > .panel-heading,
.panel-warning > .panel-heading {
  color: #fff;
  background-color: #e82c0c;
  border: none;
}
.panel-orange > .panel-heading .panel-title a:hover,
.panel-warning > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-orange {
  border: 1px solid #dddddd;
}
.panel-light-orange > .panel-heading {
  color: #fff;
  background-color: #ff530d;
  border: none;
}
.panel-light-orange > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-red,
.panel-danger {
  border: 1px solid #dddddd;
}
.panel-red > .panel-heading,
.panel-danger > .panel-heading {
  color: #fff;
  background-color: #d40d12;
  border: none;
}
.panel-red > .panel-heading .panel-title a:hover,
.panel-danger > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-red {
  border: 1px solid #dddddd;
}
.panel-light-red > .panel-heading {
  color: #fff;
  background-color: #ff1d23;
  border: none;
}
.panel-light-red > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-pink {
  border: 1px solid #dddddd;
}
.panel-pink > .panel-heading {
  color: #fff;
  background-color: #fe31ab;
  border: none;
}
.panel-pink > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-pink {
  border: 1px solid #dddddd;
}
.panel-light-pink > .panel-heading {
  color: #fff;
  background-color: #fd32c0;
  border: none;
}
.panel-light-pink > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-group .panel {
  border-radius: 0;
}
.panel-group .panel + .panel {
  margin-top: 0;
  border-top: 0;
}

.bg-blue,
.bg-info {
  background-color: #2980b9 !important;
}
.bg-light-blue {
  background-color: #3498db !important;
}
.bg-red,
.bg-danger {
  background-color: #d40d12 !important;
}
.bg-light-red {
  background-color: #ff1d23 !important;
}
.bg-purple {
  background-color: #8e44ad !important;
}
.bg-light-purple {
  background-color: #9b59b6 !important;
}
.bg-green,
bg-success {
  background-color: #27ae60 !important;
}
.bg-light-green {
  background-color: #2ecc71 !important;
}
.bg-orange,
.bg-warning {
  background-color: #e82c0c !important;
}
.bg-light-orange {
  background-color: #ff530d !important;
}
.bg-pink {
  background-color: #fe31ab !important;
}
.bg-light-pink {
  background-color: #fd32c0 !important;
}
.color-white {
  color: white !important;
}
.color-green,
.text-success {
  color: #27ae60 !important;
}
.color-light-green {
  color: #2ecc71 !important;
}
.color-blue,
.text-info {
  color: #2980b9 !important;
}
.color-light-blue {
  color: #3498db !important;
}
.color-orange,
.text-warning {
  color: #e82c0c !important;
}
.color-light-orange {
  color: #ff530d !important;
}
.color-red,
.text-danger {
  color: #d40d12 !important;
}
.color-light-red {
  color: #ff1d23 !important;
}
.color-purple {
  color: #8e44ad !important;
}
.color-light-purple {
  color: #9b59b6 !important;
}
.color-pink {
  color: #fe31ab !important;
}
.color-light-pink {
  color: #fd32c0 !important;
}
.border-green {
  border: 4px solid #27ae60 !important;
}
.border-light-green {
  border: 4px solid #2ecc71 !important;
}
.border-blue {
  border: 4px solid #2980b9 !important;
}
.border-light-blue {
  border: 4px solid #3498db !important;
}
.border-orange {
  border: 4px solid #e82c0c !important;
}
.border-light-orange {
  border: 4px solid #ff530d !important;
}
.border-red {
  border: 4px solid #d40d12 !important;
}
.border-light-red {
  border: 4px solid #ff1d23 !important;
}
.border-purple {
  border: 4px solid #8e44ad !important;
}
.border-light-purple {
  border: 4px solid #9b59b6 !important;
}
.border-pink {
  border: 4px solid #fe31ab !important;
}
.border-light-pink {
  border: 4px solid #fd32c0 !important;
}
.border-top-green {
  border-top: 4px solid #27ae60 !important;
}
.border-top-light-green {
  border-top: 4px solid #2ecc71 !important;
}
.border-top-blue {
  border-top: 4px solid #2980b9 !important;
}
.border-top-light-blue {
  border-top: 4px solid #3498db !important;
}
.border-top-orange {
  border-top: 4px solid #e82c0c !important;
}
.border-top-light-orange {
  border-top: 4px solid #ff530d !important;
}
.border-top-red {
  border-top: 4px solid #d40d12 !important;
}
.border-top-light-red {
  border-top: 4px solid #ff1d23 !important;
}
.border-top-purple {
  border-top: 4px solid #8e44ad !important;
}
.border-top-light-purple {
  border-top: 4px solid #9b59b6 !important;
}
.border-top-pink {
  border-top: 4px solid #fe31ab !important;
}
.border-top-light-pink {
  border-top: 4px solid #fd32c0 !important;
}
.border-right-green {
  border-right: 4px solid #27ae60 !important;
}
.border-right-light-green {
  border-right: 4px solid #2ecc71 !important;
}
.border-right-blue {
  border-right: 4px solid #2980b9 !important;
}
.border-right-light-blue {
  border-right: 4px solid #3498db !important;
}
.border-right-orange {
  border-right: 4px solid #e82c0c !important;
}
.border-right-light-orange {
  border-right: 4px solid #ff530d !important;
}
.border-right-red {
  border-right: 4px solid #d40d12 !important;
}
.border-right-light-red {
  border-right: 4px solid #ff1d23 !important;
}
.border-right-purple {
  border-right: 4px solid #8e44ad !important;
}
.border-right-light-purple {
  border-right: 4px solid #9b59b6 !important;
}
.border-right-pink {
  border-right: 4px solid #fe31ab !important;
}
.border-right-light-pink {
  border-right: 4px solid #fd32c0 !important;
}
.border-bottom-green {
  border-bottom: 4px solid #27ae60 !important;
}
.border-bottom-light-green {
  border-bottom: 4px solid #2ecc71 !important;
}
.border-bottom-blue {
  border-bottom: 4px solid #2980b9 !important;
}
.border-bottom-light-blue {
  border-bottom: 4px solid #3498db !important;
}
.border-bottom-orange {
  border-bottom: 4px solid #e82c0c !important;
}
.border-bottom-light-orange {
  border-bottom: 4px solid #ff530d !important;
}
.border-bottom-red {
  border-bottom: 4px solid #d40d12 !important;
}
.border-bottom-light-red {
  border-bottom: 4px solid #ff1d23 !important;
}
.border-bottom-purple {
  border-bottom: 4px solid #8e44ad !important;
}
.border-bottom-light-purple {
  border-bottom: 4px solid #9b59b6 !important;
}
.border-bottom-pink {
  border-bottom: 4px solid #fe31ab !important;
}
.border-bottom-light-pink {
  border-bottom: 4px solid #fd32c0 !important;
}
.border-left-green {
  border-left: 4px solid #27ae60 !important;
}
.border-left-light-green {
  border-left: 4px solid #2ecc71 !important;
}
.border-left-blue {
  border-left: 4px solid #2980b9 !important;
}
.border-left-light-blue {
  border-left: 4px solid #3498db !important;
}
.border-left-orange {
  border-left: 4px solid #e82c0c !important;
}
.border-left-light-orange {
  border-left: 4px solid #ff530d !important;
}
.border-left-red {
  border-left: 4px solid #d40d12 !important;
}
.border-left-light-red {
  border-left: 4px solid #ff1d23 !important;
}
.border-left-purple {
  border-left: 4px solid #8e44ad !important;
}
.border-left-light-purple {
  border-left: 4px solid #9b59b6 !important;
}
.border-left-pink {
  border-left: 4px solid #fe31ab !important;
}
.border-left-light-pink {
  border-left: 4px solid #fd32c0 !important;
}
.bg2 {
  background-image: url('http://www.htv3tv.vn/uploads/articles/summernote-attachments/648/content-attachments/nhung-su-that-it-ai-biet-ve-tham-tu-lung-danh-conan-phan-1-e91aee1c14fdd41a14ca5dfed584a770.jpg');
}




.btn-blue {
  background-color: #3498db;
  border-color: #3498db;
  color: white;
}
.btn-blue:hover,
.btn-blue:visited {
  background-color: #2980b9;
  color: white;
}
.btn-green {
  background-color: #2ecc71;
  border-color: #27ae60;
  color: white;
}
.btn-green:hover,
.btn-green:visited {
  background-color: #27ae60;
  color: white;
}
.btn-orange {
  background-color: #ff530d;
  border-color: #e82c0c;
  color: white;
}
.btn-orange:hover,
.btn-orange:visited {
  background-color: #e82c0c;
  color: white;
}
.btn-red {
  background-color: #ff1d23;
  border-color: #d40d12;
  color: white;
}
.btn-red:hover,
.btn-red:visited {
  background-color: #d40d12;
  color: white;
}
.btn-purple {
  background-color: #9b59b6;
  border-color: #8e44ad;
  color: white;
}
.btn-purple:hover,
.btn-purple:visited {
  background-color: #8e44ad;
  color: white;
}
.btn-pink {
  background-color: #fd32c0;
  border-color: #fe31ab;
  color: white;
}
.btn-pink:hover,
.btn-pink:visited {
  background-color: #fe31ab;
  color: white;
}

.progress.progress-xs {
    height: 12px;
}

    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-white profile-widget">
            <div class="row">
                <div class="col-sm-12">
                    <div class="image-container bg2">  
                        <img src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg" class="avatar" alt="avatar"> 
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="details">
                        <h4>Ha Minh Duc <i class="fa fa-sheild"></i></h4>
                        <div>Works at HUST</div>
                        <div>Student of HUST</div>
                       
                        <div class="mg-top-10">
                            <a href="#" class="btn btn-blue">Followers</a>
                            <a href="#" class="btn btn-green">Following</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="row">
            
            <div class="col-sm-6">
                
                <div class="panel panel-white border-top-purple">
                   <div class="panel-heading">
                        <h3 class="panel-title">My Story</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="section-heading">About</h5>
                            <p class="section-content">A brief description of you</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Introduction</h5>
                            <p class="section-content">Put a little about yourself here so people know they've found the correct Kevin.</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Acheivements</h5>
                            <p class="section-content">Examples: survived high school, have 3 kids, etc.</p>
                        </div> 
                        <div class="body-section">
                            <a href="#" class="btn btn-purple btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
                 
                <div class="panel panel-white border-top-light-blue">
                   <div class="panel-heading">
                        <h3 class="panel-title">My Plan</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="section-heading">Current Plan: Basic Plan</h5>
                            <p>Your next charge is $100 due May 12, 2014</p>
                            <ul>
                                <li>400 Orders/Month</li>
                                <li>10 GB storage</li>
                                <li>5 Users</li>
                                <li>Mobile App Access</li>
                            </ul>
                        </div>
                        <div class="body-section">
                            <a href="#" class="btn btn-info btn-sm">Upgrade Account</a>
                        </div>
                    </div>
                </div>
                 
                <div class="panel panel-white border-top-pink">
                   <div class="panel-heading">
                        <h3 class="panel-title">My Tasks</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="mg-top-0">Completed Pre-Orders - 90%</h5>
                                <div class="progress progress-xs">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                        </div>
                        <div class="body-section">
                            <h5>Completed Orders - 40%</h5>
                            <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> 
                            </div>
</div>
                        </div>
                        <div class="body-section">
                            <h5>Design New Ad - 20%</h5>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> 
                                </div>
                            </div>
                        </div>
                        <div class="body-section">
                            <h5>Conduct Feasibility Test - 60%</h5>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                        </div> 
                        <div class="body-section">
                            <h5>Conduct Domain Analysis - 80%</h5>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> 
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                
            </div>
            
            <div class="col-sm-6">
                 
                <div class="panel panel-white border-top-green">
                   <div class="panel-heading">
                        <h3 class="panel-title">User Info</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="section-heading">Name</h5>
                            <p class="section-content">Jane A. Doe</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Address</h5>
                            <p class="section-content">46 Gray's Inn Rd, London, WC1X 8LP</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Telephone</h5>
                            <p class="section-content">(123) 456 - 7890</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Email</h5>
                            <p class="section-content">spam@ztapps.com</p>
                        </div> 
                        <div class="body-section">
                            <h5 class="section-heading">Website</h5>
                            <p class="section-content">ztapps.com</p>
                        </div>  
                        <div class="body-section">
                            <a href="#" class="btn btn-green btn-sm">Edit</a>
                        </div>
                    </div>
                </div>
                 
                <div class="panel panel-white border-top-orange">
                   <div class="panel-heading">
                        <h3 class="panel-title">Social Statistics</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <div class="body-section">
                            <h5 class="section-heading">Friends</h5>
                            <p class="section-content">242</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Posts</h5>
                            <p class="section-content">2240</p>
                        </div> 
                        <div class="body-section">
                            <h5 class="section-heading">Pictures</h5>
                            <p class="section-content">18</p>
                        </div>  
                    </div>
                </div>
                 
                <div class="panel panel-white border-top-blue">
                   <div class="panel-heading">
                        <h3 class="panel-title">Sale Statistics</h3>
                        <div class="controls pull-right">
                            <span class="pull-right clickable">
                                <i class="fa fa-chevron-up"></i>
                            </span>
                        </div>
                    </div>
                    <div class="panel-body">  
                        <div class="body-section">
                            <h5 class="section-heading">Today</h5>
                            <p class="section-content">$450.00</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">Last Week</h5>
                            <p class="section-content">$1222.00</p>
                        </div>
                        <div class="body-section">
                            <h5 class="section-heading">This Quarter</h5>
                            <p class="section-content">$122,300.00</p>
                        </div>  
                    </div>
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