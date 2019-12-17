<?php 

include('../../connection.php');

if($_GET['id'] != ''):
	$deleteSql = "DELETE FROM `categories` WHERE `id`='".$_GET['id']."'";
	$run = mysqli_query($conn,$deleteSql);
	if($run == true):
		header('location:../category.php');
	else:
		header('location:../category.php');
	endif;
endif;




 ?>