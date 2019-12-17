<?php 

include('../../connection.php');

if($_GET['id'] != ''):
	$deleteSql = "DELETE FROM `special` WHERE `id`='".$_GET['id']."'";
	$run = mysqli_query($conn,$deleteSql);
	if($run == true):
		header('location:../about.php');
	else:
		header('location:../about.php');
	endif;
endif;




 ?>