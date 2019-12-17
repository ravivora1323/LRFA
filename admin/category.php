<?php include('header.php'); ?>
<?php include('../category.php'); ?>

<div class="card">
            <div class="card-header">
              <h3 class="card-title">Category Data</h3>
              <div class="card-tools">
              	<a href="addCategory.php" title="add" class="btn btn-warning">ADD</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Created At</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(mysqli_num_rows($category)): ?>	
                <?php while($data = mysqli_fetch_assoc($category)): ?>
                <tr>
                  <td><?php echo $data['created_at']; ?></td>
                  <td><?php echo $data['category']; ?></td>
                  <td><a href="script/deleteCategory.php?id=<?php echo $data['id']; ?>" title="Delete Category !" class="btn btn-danger">DELETE</a></td>
                </tr>
            	<?php endwhile; ?>
            	<?php endif; ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Created At</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>





<?php include('footer.php'); ?>