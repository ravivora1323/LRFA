<?php include('userData.php'); ?>
<?php include('imageData.php'); ?>
<?php include('special.php'); ?>
<!DOCTYPE HTML>
<html lang="en">
  
<!-- Mirrored from livetimesoft.in/Roopa-Ram-Jangid/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2019 17:19:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>LRFA</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta property='og:image' content='images/profile.jpg'/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">
    <link href="common-css/bootstrap.css" rel="stylesheet">
    <link href="common-css/ionicons.css" rel="stylesheet">
    <link href="common-css/fluidbox.min.css" rel="stylesheet">
    <link href="01-cv-portfolio/css/styles.css" rel="stylesheet">
    <link href="01-cv-portfolio/css/responsive.css" rel="stylesheet">
    <style type="text/css">
      .intro-section {
        padding-top: 400px;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="heading-wrapper">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="info">
                <i class="icon ion-ios-location-outline"></i>
                <div class="right-area">
                  <h5><?php echo $userData['address']; ?></h5>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="info">
                <i class="icon ion-ios-telephone-outline"></i>
                <div class="right-area">
                                      <h5><a href="tel:+91<?php echo $userData['mobile']; ?>">+91 <?php echo $userData['mobile']; ?></a></h5>
                                    <h6>MON - SAT, 9:30AM - 8:30PM</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="info">
                <i class="icon ion-ios-chatboxes-outline"></i>
                <div class="right-area">
                  <h5><a href="mailto:<?php echo $userData['email']; ?>"><?php echo $userData['email']; ?></a></h5>
                  <h6>REPLY IN 24 HOURS</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
      <!----------------------------------------------->
          <!--<div class="container">-->
        
        <!--</div>-->
      <!--</div>-->
      
      
    </header>
    
    <section class="intro-section" style="background-color: #1fc8db;
    background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);">
      <div class="container">
        <div class="row">
          <div class="col-md-1 col-lg-2"></div>
          <div class="col-md-10 col-lg-8">
            <div class="intro" style="background: linear-gradient(to right, rgb(238, 238, 238) 14%,rgb(219, 219, 219) 100%);border-radius: 200px 200px 0 0;">
              <div class="profile-img"><img src="images/<?php echo $userData['profile']; ?>" alt="profile" width="300" height="200" style="border-radius:20px;"></div>
              <h2><?php echo $userData['company']; ?></h2>
              <h3 style="color: green;"><b><?php echo $userData['occupation']; ?></b></h3>
              <h4 style="color: green;"><b><?php echo $userData['name']; ?></b></h4>
              
              <br>
              <p style="text-align: left;"><b style="color:black;">We Provide :</b><br/>
              <?php if(mysqli_num_rows($special)): ?>
              	<?php while($data = mysqli_fetch_assoc($special)): ?>
              		<b>>> </b><?php echo $data['name']; ?><br>
              	<?php endwhile; ?>
              <?php endif; ?>
                
              </p>
              <ul class="information margin-tb-30">
                <li><b>EMAIL : </b><a href="mailto:<?php echo $userData['email']; ?>"><?php echo $userData['email']; ?></a></li>
                <li><b>MOBILE : </b>
                  <a href='tel:+91<?php if($userData['mobile'] != ''): echo $userData['mobile']; endif;?>'>
                    <?php if($userData['mobile'] != ''): ?>+91 <?php echo $userData['mobile']; endif;?>
                      
                    </a>
                    </li>
              </ul>
              <ul class="social-icons">
                <li><a href="javascript:void(0);" target="_blank"><i class="ion-social-facebook"></i></a></li>
                <li><a href="javascript:void(0);" target="_blank"><i class="ion-social-instagram"></i></a></li>
                <li><a href="javascript:void(0);" target="_blank"><i class="ion-social-twitter"></i></a></li>
              </ul>
              <br/>
                          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="portfolio-section section">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="heading">
              <h3><b>Gallary</b></h3>
              <h6 class="font-lite-black"><b>Images</b></h6>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="portfolioFilter clearfix margin-b-80">
                      <a href="#" data-filter="*" class="current"><b>All</b></a>
                    <?php while($cat = mysqli_fetch_assoc($categorys)): ?>
                      <a href="#" data-filter=".<?php echo $cat['category']; ?>"><b><?php echo $cat['category']; ?></b></a>
                    <?php endwhile; ?>

            </div>
          </div>
        </div>
      </div>
      <div class="portfolioContainer">
                    <!-- <div class="p-item Award">
              <a href="images/Gallery/1568116242.jpg" data-fluidbox>
              <img src="images/Gallery/1568116242.jpg" alt=""></a>
            </div> -->


            <?php if(mysqli_num_rows($images)): ?>
              <?php while($imageses = mysqli_fetch_assoc($images)): ?>
                <div class="p-item <?php echo $imageses['category']; ?>">
              <a href="images/<?php echo $imageses['image']; ?>" data-fluidbox>
              <img src="images/<?php echo $imageses['image']; ?>" alt=""></a>
            </div>
              <?php endwhile; ?>
            <?php endif; ?>





                </div>
    </section>
    
    <section class="education-section section">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="heading">
              <h3><b>Inquiry</b></h3>
            </div>
          </div>
          <div class="col-sm-8">
            <form action="ajax.php" method="post">
              <div class="education margin-b-30">
                <h4><b>Name</b></h4>
                <p class="margin-tb-10">
                  <input class="form-control" type="text" name="name" required/>
                </p>
              </div>
              <div class="education margin-b-30">
                <h4><b>Email</b></h4>
                <p class="margin-tb-10">
                  <input class="form-control" type="email" name="email" required/>
                </p>
              </div>
              <div class="education margin-b-30">
                <h4><b>Mobile</b></h4>
                <p class="margin-tb-10">
                  <input class="form-control" type="text" name="mobile" required/>
                </p>
              </div>
              <div class="education margin-b-30">
                <h4><b>Subject</b></h4>
                <p class="margin-tb-10">
                  <input class="form-control" type="text" name="subject" required/>
                </p>
              </div>
              <div class="education margin-b-30">
                <h4><b>Occupation</b></h4>
                <p class="margin-tb-10">
                  <select class="form-control" name="occp" id="occp">
                    <option value="Others">Others</option>
                    <option value="Accountant">Accountant</option>
                    <option value="Administrative">Administrative</option>
                    <option value="Advertising">Advertising</option>
                    <option value="Agriculture/Farming">Agriculture/Farming</option>
                    <option value="Air Hostess">Air Hostess</option>
                    <option value="Airline Employee">Airline Employee</option>
                    <option value="Architect">Architect</option>
                    <option value="Banking Services">Banking Services</option>
                    <option value="Beauty,Health and Fitness Professional">Beauty,Health and Fitness Professional</option>
                    <option value="Business">Business</option>
                    <option value="Chartered Accountant">Chartered Accountant</option>
                    <option value="Civil Engineer">Civil Engineer</option>
                    <option value="Civil Services (IAS/IFS/IPS/IRS/etc.)">Civil Services (IAS/IFS/IPS/IRS/etc.)</option>
                    <option value="Clerical">Clerical</option>
                    <option value="Commercial Pilot">Commercial Pilot</option>
                    <option value="Company Secretary">Company Secretary</option>
                    <option value="Computer Engineer">Computer Engineer</option>
                    <option value="Consultant">Consultant</option>
                    <option value="Cost Accountant">Cost Accountant</option>
                    <option value="Defence Services">Defence Services</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Event Management">Event Management</option>
                    <option value="Executive">Executive</option>
                    <option value="Fashion Designer">Fashion Designer</option>
                    <option value="Finance">Finance</option>
                    <option value="Govt. Service">Govt. Service</option>
                    <option value="Hotel and Restaurant Professional">Hotel and Restaurant Professional</option>
                    <option value="Industrialist">Industrialist</option>
                    <option value="Insurance">Insurance</option>
                    <option value="Interior Designer">Interior Designer</option>
                    <option value="IT/Telecommunications">IT/Telecommunications</option>
                    <option value="Lawyer">Lawyer</option>
                    <option value="Liaison">Liaison</option>
                    <option value="Management">Management</option>
                    <option value="Mechanical Engineer">Mechanical Engineer</option>
                    <option value="Media">Media</option>
                    <option value="Medical Assistant">Medical Assistant</option>
                    <option value="Medical Profession">Medical Profession</option>
                    <option value="Medical Transcription">Medical Transcription</option>
                    <option value="Merchant Navy">Merchant Navy</option>
                    <option value="Non-Employed">Non-Employed</option>
                    <option value="Nurse">Nurse</option>
                    <option value="Pharmacist">Pharmacist</option>
                    <option value="Physiotherapist">Physiotherapist</option>
                    <option value="Private Service">Private Service</option>
                    <option value="Professor">Professor</option>
                    <option value="Project Engineer">Project Engineer</option>
                    <option value="Public Relations">Public Relations</option>
                    <option value="Real Estate">Real Estate</option>
                    <option value="Research Scholar/PhD">Research Scholar/PhD</option>
                    <option value="Retired">Retired</option>
                    <option value="Sales/Marketing">Sales/Marketing</option>
                    <option value="Scientist">Scientist</option>
                    <option value="Self Employed">Self Employed</option>
                    <option value="Social Services">Social Services</option>
                    <option value="Software Professional">Software Professional</option>
                    <option value="Stock Broker">Stock Broker</option>
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Technician">Technician</option>
                    <option value="Travel and Tourism Professional">Travel and Tourism Professional</option>
                    <option value="Writer/Author">Writer/Author</option>
                  </select>
                </p>
              </div>
              <div class="education margin-b-30">
                <h4><b>Message</b></h4>
                <p class="margin-tb-10">
                  <textarea class="form-control" name="message" rows="5"></textarea>
                </p>
              </div>
              <div class="education margin-b-30">
                <button class="form-control" type="submit" name="btnSubmit" value="Submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="counter-section" id="counter">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="counter margin-b-30">
              <h1 class="title"><b><span class="counter-value" data-duration="400" data-count="51587">0</span></b></h1>
              <h5 class="desc"><b>Visited User</b></h5>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="counter margin-b-30">
              <h1 class="title"><b><span class="counter-value" data-duration="700" data-count="2020">0</span></b></h1>
              <h5 class="desc"><b>Satisfied Customer</b></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <p class="copyright">
        Devloped By <a href="http://livetimesoft.in/" target="_blank">LiveTime Soft</a>
      </p>
    </footer>
    <script src="common-js/jquery-3.2.1.min.js"></script>
    <script src="common-js/tether.min.js"></script>
    <script src="common-js/bootstrap.js"></script>
    <script src="common-js/isotope.pkgd.min.js"></script>
    <script src="common-js/jquery.waypoints.min.js"></script>
    <script src="common-js/progressbar.min.js"></script>
    <script src="common-js/jquery.fluidbox.min.js"></script>
    <script src="common-js/scripts.js"></script>
    <script type="text/javascript">
      var sI = 2;
      setInterval(function(){
        $(".imgSldr").hide();
        $(".imgSldr").prop("src","images/Slider/o"+sI+".jpg");
        $(".imgSldr").fadeIn();
        if(sI == 6)
          sI = 1;
        else
          sI++;
      },2000);
    </script>
  </body>

<!-- Mirrored from livetimesoft.in/Roopa-Ram-Jangid/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Oct 2019 17:26:14 GMT -->
</html>
