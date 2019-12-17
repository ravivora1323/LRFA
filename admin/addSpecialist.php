<?php include('header.php'); ?>


<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Specialised</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


 <section class="content">
 	<div class="container-fluid">
 		<div class="row">
 			
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Specialised</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="script/addspecial.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Spacialised</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Detail.." required="required">
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