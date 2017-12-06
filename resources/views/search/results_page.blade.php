@extends('layouts.app')
@section('content')

<div class="container">
<div class="row ng-scope">
    <div class="col-md-3 col-md-push-9">
        <h4>Results <span class="fw-semi-bold">Filtering</span></h4>
        <p class="text-muted fs-mini">Listed content is categorized by the following groups:</p>
        <ul class="nav nav-pills nav-stacked search-result-categories mt">
            <li><a href="#">Friends <span class="badge">34</span></a>
            </li>
            <li><a href="#">Pages <span class="badge">9</span></a>
            </li>
            <li><a href="#">Images</a>
            </li>
            <li><a href="#">Groups</a>
            </li>
            <li><a href="#">Globals <span class="badge">18</span></a>
            </li>
        </ul>
    </div>
    
        <div class="col-md-9 col-md-pull-3">
            <p class="search-results-count">About 94 700 000 (0.39 sec.) results</p>
        @foreach($users as $user)
            <section class="search-result-item">
                <a class="image-link" href="{{route('home',['user_id'=>$user->id])}}"><img class="image" src="https://vignette.wikia.nocookie.net/detectivconan/images/a/ae/Img_conan.png/revision/latest/scale-to-width-down/300?cb=20160430141904">
                </a>
                <div class="search-result-item-body">
                    <div class="row">
                        <div class="col-sm-9">
                            <h4 class="search-result-item-heading"><a href="{{route('home',['user_id'=>$user->id])}}">{{$user->name}}</a></h4>
                            <p class="info">HUST,{{$user->email}}</p>
                            <p class="description">Test</p>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
            <div class="text-align-center">
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#">Prev</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>

</div>
</div>

@endsection