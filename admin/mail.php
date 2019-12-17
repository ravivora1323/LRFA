<?php include('header.php'); ?>
<?php include('../mailData.php'); ?>

<div class="card">
            <div class="card-header">
              <h3 class="card-title">Inquiry Data</h3>
              <!--<div class="card-tools">-->
              <!--	<a href="addCategory.php" title="add" class="btn btn-warning">ADD</a>-->
              <!--</div>-->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>mobile</th>
                  <th>subject</th>
                  <th>occupation</th>
                  <th>message</th>
                  <!--<th>Action</th>-->
                </tr>
                </thead>
                <tbody>
                <?php if(mysqli_num_rows($mail)): ?>	
                <?php while($data = mysqli_fetch_assoc($mail)): ?>
                <tr>
                  <td><?php echo $data['name']; ?></td>
                  <td><?php echo $data['email']; ?></td>
                  <td><?php echo $data['mobile']; ?></td>
                  <td><?php echo $data['subject']; ?></td>
                  <td><?php echo $data['occupation']; ?></td>
                  <td><?php echo $data['message']; ?></td>
                  <!--<td><a href="script/deleteCategory.php?id=<?php echo $data['id']; ?>" title="Delete Category !" class="btn btn-danger">DELETE</a></td>-->
                </tr>
            	<?php endwhile; ?>
            	<?php endif; ?>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>name</th>
                  <th>email</th>
                  <th>mobile</th>
                  <th>subject</th>
                  <th>occupation</th>
                  <th>message</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>





<?php include('footer.php'); ?>