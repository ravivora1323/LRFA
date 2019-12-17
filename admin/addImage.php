<?php include('header.php'); ?>
<?php include('../category.php'); ?>


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
              <form role="form" action="script/addimage.php" method="post" enctype="multipart/form-data">

                
                

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" required="required">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true" required="required">
                    <!--<select name="category" class="custom-file-input" required="required">-->
                        <?php if(mysqli_num_rows($category)): ?>	
                        <?php while($data = mysqli_fetch_assoc($category)): ?>
                		    <option value="<?php echo $data['category']?>"><?php echo $data['category']?></option>
                		<?php endwhile; ?>
            	        <?php endif; ?>
                	</select>
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