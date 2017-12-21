@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="css/friend_page.css">
@section('content')

<div class="container">
<div class="row bootstrap snippets"> 
    <div class="col-md-9 col-sm-7"> 
        <h2>Members</h2> 
    </div> 
    <div class="col-md-3 col-sm-5"> 
        <form method="get" role="form" class="search-form-full"> 
            <div class="form-group"> 
                <input type="text" class="form-control" name="s" id="search-input" placeholder="Search..."> 
                <i class="entypo-search"></i> 
            </div> 
        </form> 
    </div> 
</div>
@foreach($friends as $user)
<div class="member-entry"> 
    <a href="#" class="member-img"> 
        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-rounded"> 
        <i class="fa fa-forward"></i> 
    </a> 
    <div class="member-details"> 
        <h4> <a href="/home/{{ $user->id}}"> {{ $user->name }} </a> </h4> 
        <div class="row info-list"> 
            <div class="col-sm-4"> 
                <i class="fa fa-briefcase"></i>
                Co-Founder at <a href="#">Complete Tech</a> 
            </div> 
            <div class="col-sm-4"> 
                <i class="fa fa-twitter"></i> 
                <a href="#">@ {{$user->name}} </a> 
            </div> 
            <div class="col-sm-4"> 
                <i class="fa fa-facebook"></i> 
                <a href="#">fb.me/johnnie</a> 
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
                <a href="#">johnkennedy</a> 
            </div> 
        </div> 
    </div> 
</div>
@endforeach
</div>
@endsection