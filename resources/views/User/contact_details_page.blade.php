@extends('layout.index')
@section('content')
<div class="container bootstrap snippet">
    <div class="row ng-scope">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body text-center">                    
                    <h3 class="m0 text-bold">{{$user->name}}</h3>
                    <form name="form1" action="{{route('update-avatar',['user_id' => $user->id])}}" method="POST" role="form" enctype="multipart/form-data">
                       {{ csrf_field() }}
                       <div class="text-center">
                        <div id="clock">
                            <img src="images/avatar{{Auth::user()->id}}.png" id ='image1' style="height: 250px;width: 250px;" class="img-circle"  >
                        </div>
                        <div class="form-group">
                            <label for="telephone">Image :</label>
                            <input type="file" id='getval' name="image">
                        </div>                        
                        <input type="submit" value="Save">
                    </div>
                </form>
                
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
                                    <input name="name" class="form-control" id="inputContact1" type="text" placeholder="" value="{{$user->name}}">
                                </div>
                            </div>                            
                            @foreach($user->info as $info)
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact4">Address</label>
                                <div class="col-sm-10">
                                    <input name="address" class="form-control" id="inputContact4" type="text" value="{{$info->address}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact4">School</label>
                                <div class="col-sm-10">
                                    <input name="school" class="form-control" id="inputContact4" type="text" value="{{$info->school}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="inputContact4">Hobby</label>
                                <div class="col-sm-10">
                                    <input name="hobby" class="form-control" id="inputContact4" type="text" value="{{$info->hobby}}">
                                </div>
                            </div>                           
                            
                            @endforeach                          
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
<script>
  $(document).ready(function () {
    $('#image1').attr('src');
    console.log($('#image1').attr('src'));
    $('input[name=image]').on('change',function () {
      if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#image1').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
      }
    })
  })
</script>
<br><br><br><br><br><br><br>
@endsection
