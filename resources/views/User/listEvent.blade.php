
@extends("Layout.index")

@section("content")



<div class="container text-center page-newsfeed-01">    
  <div class="row page-newsfeed-01-b">
    @include("User._left_col")
    @include("User._event_list")

    
</div>
</div>
@include("User._baimoi")
@endsection
