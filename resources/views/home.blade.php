
@extends("Layout.index")

@section("content")



<div class="container text-center page-newsfeed-01">    
  <div class="row page-newsfeed-01-b">
    @include("User._left_col")
    @include("User._home_center_col")
    @include("User._right_col")

    
</div>
</div>
@include("User._baimoi")
@endsection
