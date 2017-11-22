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
    <title>Profile with timeline - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    html, body {
      width: 100%;
      height: 100%;
    }
    	body{
    margin-top:20px;
    background-color: #F5F7FA;
   
}
.bg-grd-red {
    background: linear-gradient(45deg,#cc0576 0,rgba(204,5,118,0) 70%),linear-gradient(135deg,#cf022b 10%,rgba(207,2,43,0) 80%),linear-gradient(225deg,#e91c01 10%,rgba(233,28,1,0) 80%),linear-gradient(315deg,#ca7f07 100%,rgba(202,127,7,0) 70%)!important;
}
.content-hero:first-child {
    margin-top: -15px;
}
.content-hero {
    position: relative;
    padding: 15px;
    margin-right: -15px;
    margin-left: -15px;
    margin-bottom: 30px;
    background-color: #fff;
    min-height: 150px;
    overflow: hidden;
}
.content-hero.content-hero-sm {
    min-height: 80px;
}
.content-hero+.content-hero {
    margin-top: -30px;
}
.content-hero .content-hero-embed {
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    z-index: 1;
}
.content-hero .content-hero-overlay {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    background-color: #F5F7FA;
    opacity: .6;
    filter: alpha(opacity=60);
}
.bg-grd-red {
    background: linear-gradient(45deg,#cc0576 0,rgba(204,5,118,0) 70%),linear-gradient(135deg,#cf022b 10%,rgba(207,2,43,0) 80%),linear-gradient(225deg,#e91c01 10%,rgba(233,28,1,0) 80%),linear-gradient(315deg,#ca7f07 100%,rgba(202,127,7,0) 70%)!important;
}
.content-hero .content-hero-body {
    position: relative;
    z-index: 3;
}
.btn-icon.btn-default {
    color: rgba(22,24,27,.87);
    background-color: transparent;
}
.kit-avatar.kit-avatar-64 {
    border: 2px solid rgba(22,24,27,.12);
    border-radius: 64px;
}
a.kit-avatar {
    color: inherit;
    text-decoration: none;
}
.no-padding {
    padding: 0;
}
.border-white {
    border-color: #fff!important;
}
.kit-avatar {
    position: relative;
    display: inline-block;
    padding: 2px;
    text-align: center;
    transition: border-color ease .3s;
}
.kit-avatar.kit-avatar-64>img {
    width: 64px;
    height: auto;
    border-radius: 32px;
}
.kit-avatar.kit-avatar-42 {
    border: 2px solid rgba(22,24,27,.12);
    border-radius: 42px;
}
.kit-avatar.kit-avatar-42>img {
    width: 42px;
    height: auto;
    border-radius: 21px;
}
.text-red {
    color: #ED5565!important;
}
.h2, .headline, h2 {
    font-size: 24px;
    font-weight: 400;
    line-height: 32px;
}
.timeline, .timeline>li {
    list-style: none;
}
.timeline {
    position: relative;
    display: block;
    margin: 0;
    padding: 10px 0;
  
   
}
.timeline:after, .timeline:before {
    content: " ";
    display: table;
}
.timeline>li:nth-child(even) {
    float: left;
    clear: left;
}
.timeline, .timeline>li {
    list-style: none;
}
.timeline-group {
    display: block;
    position: relative;
    margin: 20px 0;
    text-align: center;
    float: none!important;
    z-index: 1;
}
.btn {
    font-weight: 500;
    line-height: 20px;
}
.btn-default {
    color: rgba(22,24,27,.87);
    background-color: #E6E9ED;
    border-color: transparent;
}
.timeline>li:nth-child(odd) {
    float: right;
    clear: right;
}
.timeline, .timeline>li {
    list-style: none;
}
.timeline-line{
    display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 4px;
    margin: 0 auto;
    max-height: 6000px;
    height: auto;
    z-index: 1;
    background-color: rgba(22,24,27,.12);
    -webkit-transform: translate(-50%,0);
    -ms-transform: translate(-50%,0);
    transform: translate(-50%,0);
}
.timeline .timeline-line{
    position: absolute;
    left: 50%;
    width: 4px;
    display: block;
    background: currentColor;
    top: 0px;
    bottom: 0px;
 
}
.timeline .timeline-line::before { top: -4px; }
.timeline .timeline-line::after { bottom: -4px; }
.timeline .timeline-line::before,
.timeline .timeline-line::after {
    content: '';
    position: absolute;
    left: -4px;
    width: 12px;
    height: 12px;
    display: block;
    border-radius: 50%;
   
}

.timeline>li:nth-child(even) {
    float: left;
    clear: left;
}
.timeline-line+.timeline-item {
    margin-top: -20px;
}
.timeline, .timeline>li {
    list-style: none;
}
.timeline-item {
    position: relative;
    display: inline-block;
    width: 50%;
    padding: 0 30px 20px;
}
.timeline-poster {
    margin-top: -20px;
}
.timeline-item:nth-child(even)>.timeline-badge {
    right: -6px;
}
.timeline-item>.timeline-badge {
    position: absolute;
    top: 12px;
    z-index: 1;
}
.timeline-item>.timeline-badge>a {
    display: inline-block;
    width: 12px;
    height: 12px;
    border: 2px solid #5D9CEC;
    border-radius: 24px;
    background-color: #fff;
    text-decoration: none;
    transition: all ease .3s;
}
.border-teal {
    border-color: #48CFAD!important;
}
.panel-default.panel-fill, .panel-default.panel-fill>.panel-heading {
    background-color: #fff;
}
.fade.in {
    opacity: 1;
}
.panel {
    border: none;
    box-shadow: 0 1px 3px -1px rgba(22,24,27,.26);
    transition: background-color 250ms ease,opacity 250ms linear;
}
.panel-default {
    border-color: rgba(22,24,27,.12);
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border-radius: 2px;
}
.panel-body {
    padding: 12px;
}
.nav-tabs {
    border-bottom: none;
}
.nav {
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
}
.nav-tabs>li {
    margin-bottom: 0;
}
.nav-tabs>li {
    float: left;
}
.nav>li {
    position: relative;
    display: block;
}
.nav.nav-contrast-red.nav-tabs>li>a {
    color: inherit;
}
.nav-tabs>li>a {
    margin-right: 0;
    border: none;
    border-bottom: 2px solid transparent;
    border-radius: 0;
    color: rgba(22,24,27,.87);
}
.nav-tabs>li>a {
    line-height: 1.42857;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 12px;
}
.nav-tabs a {
    outline: 0;
}
.nav.nav-contrast-red.nav-tabs>li.active>a, .nav.nav-contrast-red.nav-tabs>li.active>a:focus, .nav.nav-contrast-red.nav-tabs>li.active>a:hover, .nav.nav-contrast-red.nav-tabs>li>a:focus, .nav.nav-contrast-red.nav-tabs>li>a:hover {
    color: #ED5565;
    border-bottom: 2px solid #ED5565;
}
.nav.nav-contrast-red.nav-tabs>li>a {
    color: inherit;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover, .nav-tabs>li.open>a, .nav-tabs>li.open>a:focus, .nav-tabs>li.open>a:hover {
    border: none;
    border-bottom: 2px solid #5D9CEC;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #5D9CEC;
    background-color: transparent;
    cursor: default;
}
.nav-tabs>li>a {
    margin-right: 0;
    border: none;
    border-bottom: 2px solid transparent;
    border-radius: 0;
    color: rgba(22,24,27,.87);
}
.nav-tabs>li>a {
    line-height: 1.42857;
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 12px;
}
.nav-tabs a {
    outline: 0;
}
.pt-1x {
    padding-top: 6px;
}
.no-border {
    border: none!important;
}
.no-resize {
    resize: none;
}
.form-control, .form-control:focus {
    box-shadow: none;
}
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857;
    color: rgba(22,24,27,.87);
    background-color: #fff;
    background-image: none;
    border: 1px solid rgba(22,24,27,.12);
    border-radius: 2px;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.panel-footer {
    background-color: transparent;
}
.panel-footer {
    padding: 6px 12px;
    border-top: 1px solid rgba(22,24,27,.12);
    border-bottom-right-radius: 1px;
    border-bottom-left-radius: 1px;
}
.btn-group, .btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle;
}
.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
}
.btn-group>.btn:first-child {
    margin-left: 0;
}
.timeline-poster .btn-link {
    color: rgba(22,24,27,.54);
}
.btn-group-vertical>.btn, .btn-group>.btn {
    position: relative;
    float: left;
}
.btn {
    font-weight: 500;
    line-height: 20px;
}
.btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {
    border-color: transparent;
}
.btn-link, .btn-link.active, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
    background-color: transparent;
    box-shadow: none;
}
.btn-link {
    color: #5D9CEC;
    font-weight: 400;
    border-radius: 0;
}
.timeline-item:nth-child(even):after {
    right: 20px;
    top: 11px;
    border-top: 11px solid transparent;
    border-bottom: 11px solid transparent;
    border-left: 11px solid #fff;

}
.timeline-item:nth-child(even):after, .timeline-item:nth-child(even):before {
    content: '';
    position: absolute;
    right: 19px;
    top: 10px;
    width: 0;
    height: 0;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    border-left: 12px solid rgba(22,24,27,.12);
    z-index: 1;
}
.timeline-item:nth-child(odd)>.timeline-badge {
    left: -6px;
}
.timeline-item>.timeline-badge {
    position: absolute;
    top: 12px;
    z-index: 1;
}
.border-orange {
    border-color: #FC6E51!important;
}
.timeline-item>.timeline-panel>.timeline-resume {
    padding-top: 0;
    border: none;
}
.panel-body+.panel-body {
    border-top: 1px solid rgba(22,24,27,.12);
}
.panel-body {
    padding: 12px;
}
.media:first-child {
    margin-top: 0;
}
.mb-2x {
    margin-bottom: 12px;
}
.media, .media-body {
    overflow: initial;
}
.media, .media-body {
    zoom: 1;
}
.kit-avatar.kit-avatar-36 {
    border: 1px solid rgba(22,24,27,.12);
    border-radius: 36px;
}
.kit-avatar.kit-avatar-36>img {
    width: 36px;
    height: auto;
    border-radius: 18px;
}
p {
    margin: 0 0 10px;
}
.timeline-item>.timeline-panel>.timeline-resume {
    padding-top: 0;
    border: none;
}
.panel-body+.panel-body {
    border-top: 1px solid rgba(22,24,27,.12);
}
.kit-avatar.kit-avatar-24 {
    border: 1px solid rgba(22,24,27,.12);
    border-radius: 24px;
}
.no-border {
    border: none!important;
}
.align-middle {
    vertical-align: middle;
}
.kit-avatar.kit-avatar-24>img {
    width: 24px;
    height: auto;
    border-radius: 12px;
}
.bordered, .bordered-bottom {
    border-bottom: 1px solid rgba(22,24,27,.12)!important;
}
.kit-avatar.kit-avatar-28 {
    border: 1px solid rgba(22,24,27,.12);
    border-radius: 28px;
}
.kit-avatar.kit-avatar-28>img {
    width: 28px;
    height: auto;
    border-radius: 14px;
}
.input-group.input-group-in {
    border: 1px solid rgba(22,24,27,.12);
    border-radius: 2px;
    background-color: #fff;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.input-group.input-group-in>.input-group-btn:last-child {
    padding-right: 0;
    padding-left: 6px;
}
.input-group-btn {
    position: relative;
    font-size: 0;
    white-space: nowrap;
}
.input-group-addon, .input-group-btn {
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;
}
.input-group .form-control, .input-group-addon, .input-group-btn {
    display: table-cell;
}
.btn-bordered.btn-default {
    color: rgba(22,24,27,.87);
    border-color: rgba(22,24,27,.12);
}
.btn-bordered {
    background-color: transparent;
    border: 1px solid transparent;
}
.btn {
    font-weight: 500;
    line-height: 20px;
}
.btn-circle.btn-xs {
    width: 30px;
    height: 30px;
    line-height: 28px;
}
.btn-circle {
    padding: 0;
    width: 42px;
    height: 42px;
    line-height: 40px;
    border-radius: 21px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.input-group.input-group-in>.input-group-btn:last-child>.btn {
    border-right: none;
    border-left: 1px solid rgba(22,24,27,.12);
}
.input-group.input-group-in>.input-group-btn>.btn {
    color: inherit;
    padding: 0 12px;
    border: none;
    background-color: transparent;
    outline: 0;
    box-shadow: none;
    height: auto;
}
.timeline-item:nth-child(odd):after {
    left: 20px;
    top: 11px;
    border-top: 11px solid transparent;
    border-bottom: 11px solid transparent;
    border-right: 11px solid #fff;
}
.timeline-item:nth-child(odd):after, .timeline-item:nth-child(odd):before {
    content: '';
    position: absolute;
    left: 19px;
    top: 10px;
    width: 0;
    height: 0;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    border-right: 12px solid rgba(22,24,27,.12);
    z-index: 1;
}
/* ========================================================================
 * 
 * ======================================================================== */
.btn-primary {
    color: #fff;
    background-color: #2ecc71;
    border-color: #2ecc71;
}

.divider {
  height: 20px;
  display: block;
}

/* ========================================================================
 * FORM MISC
 * ======================================================================== */
.input-group-addon {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  min-width: 39px;
}
.input-group-addon .ckbox, .input-group-addon .rdio {
  position: absolute;
  top: 4px;
  left: 10px;
}

.input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn, .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn, .input-group-xs > .form-control, .input-group-xs > .input-group-addon, .input-group-xs > .input-group-btn > .btn {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}

.input-sm, .form-group-sm .form-control {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}

.form-control {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}

@media (max-width: 640px) {
  .form-inner-all [class*="col-"]:last-child .form-control {
    margin-top: 15px;
  }
}


/* ========================================================================
 * PROFILE
 * ======================================================================== */
.profile-cover {
  width: 100%;
}
.profile-cover .cover {
  position: relative;
  border: 10px solid #FFF;
}
.profile-cover .cover .inner-cover {
  overflow: hidden;
  height: auto;
}
.profile-cover .cover .inner-cover img {
  border: 1px solid transparent;
  text-align: center;
  width: 100%;
}
.profile-cover .cover .inner-cover .cover-menu-mobile {
  position: absolute;
  top: 10px;
  right: 10px;
}
.profile-cover .cover .inner-cover .cover-menu-mobile button i {
  font-size: 17px;
}
.profile-cover .cover ul.cover-menu {
  padding-left: 150px;
  position: absolute;
  overflow: hidden;
  left: 1px;
  float: left;
  bottom: 0px;
  width: 100%;
  margin: 0px;
  background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.24);
}
.profile-cover .cover ul.cover-menu li {
  display: block;
  float: left;
  margin-right: 0px;
  padding: 0px 10px;
  line-height: 40px;
  height: 40px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.profile-cover .cover ul.cover-menu li:hover {
  background-color: rgba(0, 0, 0, 0.44);
}
.profile-cover .cover ul.cover-menu li.active {
  background-color: rgba(0, 0, 0, 0.64);
}
.profile-cover .cover ul.cover-menu li a {
  color: #FFF;
  font-weight: bold;
  display: block;
  height: 40px;
  line-height: 40px;
  text-decoration: none;
}
.profile-cover .cover ul.cover-menu li a i {
  font-size: 18px;
}
.profile-cover .profile-body {
  margin: 0px auto 10px;
  position: relative;
}
.profile-cover .profile-timeline {
  padding: 15px;
}
.img-post{
    width:30px;
    height:30px;
}
.img-post2{

    width:25px;
    height:25px;
}

    </style>
</head>
<body ng-controller="WelcomeCtrl">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippet">
    <div class="content-hero">
      <img class="content-hero-embed" src="https://lorempixel.com/250/250/nature/8/" alt="">
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
              <a class="kit-avatar kit-avatar-64 no-padding border-white hidden-xs" href="{{ url('/editInfo') }}">
                <img alt="cover" src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg">
              </a>
              <a class="kit-avatar kit-avatar-42 no-padding border-white visible-xs" href="#">
                <img alt="cover" src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg">
              </a>
            </div>
            <div class="media-body">
              <h2 class="display-name media-heading text-red hidden-xs">{{ Auth::user()->name }}</h2>
              <h3 class="display-name media-heading text-red visible-xs">hmd</h3>
              <p class="text-muted"><span class="mr-2x">Since April 21, 2010</span> <span><i class="fa fa-skype fa-fw hidden-xs"></i> (+44) 212 008 5656</span></p>
              <p class="text-muted">Student at HUST</p>
              <p class="text-muted">alias: HMD</p>
            </div><!-- /.pull -->
          </div>
        </div><!-- /.cols -->
    
        <div class="col-md-2 col-xs-4 col-md-push-4 text-right">
          <a href="#" rel="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" aria-label="Poke" data-original-title="Jawil sitik"><i class="fa fa-thumbs-o-up"></i></a>
          <a href="#" rel="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" aria-label="Send a Messege" data-original-title="Send a Messege"><i class="fa fa-envelope-o"></i></a>
        </div><!-- /.cols -->
    
        <div class="col-md-4 col-xs-12 col-md-pull-2 text-center">
          <div class="row">
            <div class="col-xs-4">
              <div class="p-1x">
                <span class="headline"><strong>1,5K</strong></span>
                <p>Activities</p>
              </div>
            </div><!-- /.cols -->
            <div class="col-xs-4">
              <div class="p-1x">
                <span class="headline"><strong>23</strong></span>
                <p>Events</p>
              </div>
            </div><!-- /.cols -->
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
            <li class="timeline-line" ></li>
            <li class="timeline-group">
              <a href="#" class="btn btn-default">Today</a>
            </li>            
        </ul>
        <ul class="timeline" style="height: 100%" >
            <li class="timeline timeline-line" style="height: 3700px"></li>
            <li class="timeline-item timeline-poster">
              <div class="timeline-badge">
                <a class="border-teal" rel="tooltip" title="" data-container="body" href="#" data-original-title="What will you do?"></a>
              </div>
              <div class="timeline-panel panel fade in panel-default panel-fill" data-fill-color="true" data-init-panel="true">
                <form action="{{route('test')}}" method="post">
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
              <li class="timeline-item">
              <div class="timeline-badge">
                <a class="border-orange" rel="tooltip" title="" data-container="body" href="#" data-original-title="Post"></a>
              </div>
              <div class="timeline-panel panel fade in panel-default panel-fill" data-fill-color="true" data-init-panel="true">
                <div class="panel-body">
                  <div class="media mb-2x">
                    <div class="media-left">
                      <a href="#" class="timeline-avatar kit-avatar kit-avatar-36">
                        <img class="media-object" src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg" alt="">
                      </a>
                    </div><!-- /.media-left -->
                    <div class="media-body">
                      <p class="media-heading"><strong>{{ Auth::user()->name }}</strong> <br><small class="text-muted">30 minutes</small></p>
                    </div><!-- /.media-body -->
                  </div><!-- /.media -->
            
                 @if(Auth::user()->id == $post->user_id)
                     <p>{{$post->timelinePost}}</p>
                 @endif
                </div><!-- /.panel-body -->
            
                <div class="panel-body timeline-resume">
                  <div class="pull-right" data-toggle="tooltip" title="" data-original-title="in this post">
                    <a class="kit-avatar kit-avatar-24 align-middle no-border" href="#">
                      <img alt="avatar" title="friend name" src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg">
                    </a>
                    <a class="kit-avatar kit-avatar-24 align-middle no-border" href="#">
                      <img alt="avatar" title="friend name" src="https://pbs.twimg.com/profile_images/794095710237028353/94VF6sUo.jpg">
                    </a>
                    <a class="kit-avatar kit-avatar-24 align-middle no-border" href="#">
                      <img alt="avatar" title="friend name" src="https://bootdey.com/img/Content/avatar/avatar5.png">
                    </a>
                    <a href="#" class="btn btn-xs btn-default btn-circle">+4</a>
                  </div>
                  
                  <a href="#" class="btn btn-bordered btn-default btn-sm">+33</a>
                  <a href="#" class="btn btn-bordered btn-default btn-sm"><span class="fa fa-share fa-fw"></span> 7</a>
                  @if(Auth::user() == $post->user)
                     <a href="{{route('post.delete',['post_id' => $post->id])}}" class="btn btn-danger btn-sm" ng-click="deleteCnf(article)">Delete</a>
                     <button type="submit" class="btn btn-bordered btn-primary btn-sm" ng-click="editPost(article.$id)" data-target = "#editModal" data-toggle = "modal">Edit</button>
                  @endif
                </div><!-- /.panel-body -->

                <div class="panel-body timeline-resume">
                    <div id = "editModal" class="modal fade" role = "dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Edit Post Details</h4>
                                </div> 
                                <div class="modal-body">
                                    <form role = "form">
                                        <div class="form-group">
                                            <label for="post">Post</label>
                                            <textarea name="post" class="form-control" ng-model="editPostData.post"></textarea>
                                        </div>
                                    </form>
                                </div>  
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-primary" ng-click="updatePost(editPostData.$id)"> Update Post</button>
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss = "modal"> Cancle</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
                <div class="panel-body timeline-livelines">
                  <p><a href="#"><small><i class="fa fa-comment-o fa-fw"></i> View 4 more comments</small></a></p>
                  <div class="media">
                    <div class="media-left">
                      <a class="kit-avatar kit-avatar-28" href="#">
                        <img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                      </a>
                    </div>
                    <div class="media-body bordered-bottom">
                      <p class="media-heading"><strong>Arina Rosetti</strong> Consequuntur illo accusantium, expedita ratione dolorem fuga minima!</p>
                      <p class="text-muted"><small>22 minutes</small> </p>
                    </div>
                  </div><!-- /.media -->
                  <div class="media">
                    <div class="media-left">
                      <a class="kit-avatar kit-avatar-28" href="#">
                        <img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                      </a>
                    </div>
                    <div class="media-body bordered-bottom">
                      <p class="media-heading"><strong>Júlia Ribeiro</strong> Veritatis aspernatur totam illum quisquam ipsa accusantium, animi voluptatum rem placeat.</p>
                      <p class="text-muted"><small>18 minutes</small> </p>
                    </div>
                  </div><!-- /.media -->
                  <div class="media">
                    <div class="media-left">
                      <a class="kit-avatar kit-avatar-28" href="#">
                        <img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar2.png">
                      </a>
                    </div>
                    <div class="media-body">
                      <p class="media-heading"><strong>Felix Koller</strong> Molestias ipsum hic voluptas soluta expedita, ab, dolorum aperiam neque nesciunt.</p>
                      <p class="text-muted"><small>10 minutes</small> </p>
                    </div>
                  </div><!-- /.media -->
                </div><!-- /.panel-body -->
            
                <div class="panel-footer timeline-livelines">
                  <form action="#">
                    <a class="kit-avatar kit-avatar-28 no-border pull-left" href="#">
                      <img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar3.png">
                    </a>
                    <div class="input-group input-group-in no-border">
                      <input class="form-control" placeholder="write comment...">
                      <div class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-chevron-circle-right"></i></button>
                      </div>
                    </div>
                  </form>
                </div><!-- /.panel-footer -->
              </div><!-- /.timeline-panel.panel -->
            </li>
           @endforeach

            <li class="timeline-item">
              <div class="timeline-badge">
                <a class="border-red" rel="tooltip" title="" data-container="body" href="#" data-original-title="photo"></a>
              </div>
              <div class="timeline-panel panel fade in panel-default panel-fill" data-fill-color="true" data-init-panel="true">
                <div class="panel-body">
                  <div class="media mb-1x">
                    <div class="media-left">
                      <a href="#" class="timeline-avatar kit-avatar kit-avatar-36">
                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                      </a>
                    </div>
                    <div class="media-body">
                      <div class="timeline-actions pull-right">
                        <div class="dropdown">
                          <a href="#" class="btn btn-icon btn-default dropdown-toggle" data-toggle="dropdown"><i class="icon-options-vertical text-muted"></i></a>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Edit</a></li>
                            <li><a href="#">Hide</a></li>
                            <li><a href="#">Mark</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Delete</a></li>
                          </ul>
                        </div>
                      </div><!-- /.timeline-actions -->
                      <p class="media-heading"><strong>Hà Minh Đức</strong><br><small class="text-muted">Share photo about 2 hours</small></p>
                    </div><!-- /.media-body -->
                  </div><!-- /.media -->

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum nulla sunt unde est veritatis at. Nihil ipsam ipsa doloribus assumenda ipsum beatae iste dolor incidunt explicabo laborum est, alias, ut, aut mollitia neque quia? Numquam voluptates, officiis voluptatibus cum optio, odio totam pariatur sapiente sequi, perferendis inventore saepe ut quo nobis nostrum quae eum dolor </p>
                </div><!-- /.panel-body -->

                <a href="#" class="embed-responsive embed-responsive-16by9">
                  <img src="http://www.htv3tv.vn/uploads/articles/summernote-attachments/648/content-attachments/nhung-su-that-it-ai-biet-ve-tham-tu-lung-danh-conan-phan-1-e91aee1c14fdd41a14ca5dfed584a770.jpg" alt="embed image" class="embed-responsive-item">
                </a>

                <div class="panel-body">
                  <div class="pull-right" data-toggle="tooltip" title="" data-original-title="in this post">
                    <a class="kit-avatar kit-avatar-24 align-middle no-border" href="#">
                      <img alt="avatar" title="friend name" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                    </a>
                    <a class="kit-avatar kit-avatar-24 align-middle no-border" href="#">
                      <img alt="avatar" title="friend name" src="https://bootdey.com/img/Content/avatar/avatar3.png">
                    </a>
                    <a class="kit-avatar kit-avatar-24 align-middle no-border" href="#">
                      <img alt="avatar" title="friend name" src="https://bootdey.com/img/Content/avatar/avatar2.png">
                    </a>
                    <a href="#" class="btn btn-xs btn-default btn-circle">+4</a>
                  </div>
                  <a href="#" class="btn btn-bordered btn-default btn-sm">+12</a>
                  <a href="#" class="btn btn-bordered btn-default btn-sm"><span class="fa fa-share fa-fw"></span> 7</a>
                </div><!-- /.timeline-resume -->

                <div class="panel-body timeline-liveliness">
                  <a href="#"><small><i class="fa fa-comment-o fa-fw"></i> View all comments (34)</small></a>
                </div><!-- /.timeline-liveliness -->
              </div><!-- /.timeline-panel -->
            </li>     

            <div class="modal fade" tabindex="-1" role="dialog" id = 'edit-modal'>
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                  </div>
                  <div class="modal-body">
                    <p>One fine body&hellip;</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->       
        </ul>
    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>