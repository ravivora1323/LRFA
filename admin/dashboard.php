<?php include('header.php'); ?>
<?php include('../userData.php'); ?>
            <div class="card-body pb-0">
            <div class="row d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  Owner Information
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $userData['name']; ?></b></h2>
                      <h4><p class="text-muted text-sm"><b>About: </b> <?php echo $userData['occupation']; ?> </p></h4>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> <h6>Address: <?php echo $userData['address']; ?></h6></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <h6>Phone : <?php echo $userData['phone']; ?></h6></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <h6>Mobile: <?php echo $userData['mobile']; ?></h6></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img src="../images/<?php echo $userData['profile']; ?>" alt="Profile" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="editProfile.php" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Edit Profile
                    </a>
                  </div>
                </div>
              </div>
              </div>
              </div>
            

<?php include('footer.php'); ?>