<?php include('header.php'); ?>
<?php include('script/specialData.php'); ?>

<div class="card">
            <div class="card-header">
              <h3 class="card-title">Specialised Data</h3>
              <div class="card-tools">
              	<a href="addSpecialist.php" title="add" class="btn btn-warning">ADD</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Created At</th>
                  <th>Specialized</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(mysqli_num_rows($special)): ?>	
                <?php while($data = mysqli_fetch_assoc($special)): ?>
                <tr>
                  <td><?php echo $data['created_at']; ?></td>
                  <td><?php echo $data['name']; ?></td>
                  <td><a href="script/deleteSpecial.php?id=<?php echo $data['id']; ?>" title="Delete Specialised !" class="btn btn-danger">DELETE</a></td>
                </tr>
            	<?php endwhile; ?>
            	<?php endif; ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Created At</th>
                  <th>Specialized</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>





<?php include('footer.php'); ?>