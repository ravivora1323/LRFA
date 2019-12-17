<?php 
include('../../connection.php');

if(isset($_POST['submit'])):
	$data = $_POST['category'];
	$categorySql = "INSERT INTO `categories`(`category`) VALUES ('".$data."')";
	$run = mysqli_query($conn,$categorySql);
	if($run == true):
		header('location:../addCategory.php');
	else:
		header('location:../addCategory.php');
	endif;
endif;







 ?>