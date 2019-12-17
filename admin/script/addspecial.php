<?php 
include('../../connection.php');

if(isset($_POST['submit'])):
	$data = $_POST['name'];
	$specialSql = "INSERT INTO `special`(`name`) VALUES ('".$data."')";
	$run = mysqli_query($conn,$specialSql);
	if($run == true):
		header('location:../addSpecialist.php');
	else:
		header('location:../addSpecialist.php');
	endif;
endif;







 ?>