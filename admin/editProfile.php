<?php include('header.php'); ?>



<section class="content">
 	<div class="container-fluid">
 		<div class="row">
 			
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Specialised</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="script/editProfile.php" method="post" enctype="multipart/form-data">

                
                

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="profile" class="custom-file-input" id="exampleInputFile" required="required">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                    
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required="required">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Adress</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter address">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" placeholder="Enter mobile">
                  </div>
                    
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter phone">
                  </div>
                    
                    
                    
                  </div>
                  
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->





 		</div>
 	</div>
 </section>












<?php include('footer.php'); ?>