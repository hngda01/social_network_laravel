<div class="col-sm-2 well" style="height: 1000px;">
      <div >
        <a  class="page-newsfeed-06">Topic: </a></p>
      </div>
      <hr style="background-color: #000;height: 1px;"> 
      <div style="margin-left: 5px">       
        <div>
          <p>
          <div class="nav nav-tabs userProfileTabs" role="tablist">
          @foreach($category as $cat)
            <div role="presentation" class="">
            <a href="#tab_category{{$cat->id}}" aria-controls="tab_category{{$cat->id}}" role="tab" data-toggle="tab" aria-expanded="false" class="btn page-newsfeed-05"><span class="fa fa-newspaper-o"></span>{{$cat->name}}</a>
            </div>
          @endforeach  
          </div>
          </p>
        </div>
        
      </div>
      
      
    </div>