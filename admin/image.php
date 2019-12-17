<?php include('header.php'); ?>
<?php include('script/imageData.php'); ?>


<div class="card">
            <div class="card-header">
              <h3 class="card-title">Images Data</h3>
              <div class="card-tools">
              	<a href="addImage.php" title="add" class="btn btn-warning">ADD</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Created At</th>
                  <th>Images</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(mysqli_num_rows($images)): ?>	
                <?php while($data = mysqli_fetch_assoc($images)): ?>
                <tr>
                  <td><?php echo $data['created_at']; ?></td>
                  <td><img src="../images/<?php echo $data['image']; ?>" alt="image" width="80" height="70"></td>
                  <td><a href="script/deleteImage.php?id=<?php echo $data['id']; ?>" title="Delete Image !" class="btn btn-danger">DELETE</a></td>
                </tr>
            	<?php endwhile; ?>
            	<?php endif; ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Created At</th>
                  <th>Images</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>








<?php include('footer.php'); ?>