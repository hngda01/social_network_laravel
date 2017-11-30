@extends('layouts.app')
@section('content')
<div class="container bootstrap snippet">
<div class="row ng-scope">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <div class="pv-lg"><img class="center-block img-responsive img-circle img-thumbnail thumb96" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Contact"></div>
                <h3 class="m0 text-bold">{{$user->name}}</h3>
                <div class="text-center">
                   <input type="file" class="form-control">
                </div>
                
            </div>
        </div>
        <div class="panel panel-default hidden-xs hidden-sm">
           
        </div>
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-right">
                    <div class="btn-group dropdown" uib-dropdown="dropdown">
                        <button class="btn btn-link dropdown-toggle" uib-dropdown-toggle="" aria-haspopup="true" aria-expanded="false"><em class="fa fa-ellipsis-v fa-lg text-muted"></em></button>
                        <ul class="dropdown-menu dropdown-menu-right animated fadeInLeft" role="menu">
                            <li><a href=""><span>Send by message</span></a></li>
                            <li><a href=""><span>Share contact</span></a></li>
                            <li><a href=""><span>Block contact</span></a></li>
                            <li><a href=""><span class="text-warning">Delete contact</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="h4 text-center">Contact Information</div>
                <div class="row pv-lg">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <form class="form-horizontal ng-pristine ng-valid" method="POST" action="{{route('update-info',['user_id' => $user->id])}}">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact1" >Name</label>
                                <div class="col-sm-10">
                                    <input name="edit_name" class="form-control" id="inputContact1" type="text" placeholder="" value="{{$user->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact4">Mobile</label>
                                <div class="col-sm-10">
                                    <input name="edit_mobile" class="form-control" id="inputContact4" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact6">Address</label>
                                <div class="col-sm-10">
                                    <textarea name="edit_address" class="form-control" id="inputContact6" row="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact8">Company</label>
                                <div class="col-sm-10">
                                    <input name="edit_company" class="form-control" id="inputContact8" type="text" placeholder="No Company">
                                </div>
                            </div>
                            <div class="form-group pull-right">
                                <input type="checkbox" name="vehicle" value="man"> Man
                                <input type="checkbox" name="vehicle" value="girl" checked>Girl<br>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button  class="btn btn-info">Update</button>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
