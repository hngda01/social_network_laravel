<section >
            <form action="createEvent" method="POST" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="col-md-6 form-line" style="background-color: #487c76">
                <div class="form-group">
                  <label for="exampleInputUsername">Suject :</label>
                  <input type="text" class="form-control fix-control" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">address :</label>
                  <input type="text" class="form-control fix-control" name="address">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">From : To</label><br>
                  <input type="date" name="start_date">  <input type="date" name="end_date"> 
                </div>  
                
                <div class="form-group">
                  <label for="exampleInputEmail">Priority :</label>
                  <input type="number" class="form-control fix-control" min="0" value="0" name="priority">
                </div> 

                <div id="clock">
              <img src=""alt="" id ='image1' style="height: 248px;width: 280px" >
          </div>
                <div class="form-group">
                  <label for="telephone">Ảnh :</label>
                  <input type="file" id='getval' name="image">
                </div>
              </div>
              <div class="col-md-6" style="background-color: #487c76">
                <div class="form-group">
                  <label for ="description"> Mô Tả :</label>
                  <textarea  class="form-control create-description" placeholder="Description" rows="18" name="content"></textarea>
                </div>
                <div>
                  
                  <input type="submit" value="Save" class="btn btn-default submit">
                </div>
              </div>
            </form>
          </section>