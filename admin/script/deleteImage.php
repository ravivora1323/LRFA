<?php 
include('../../connection.php');

if($_GET['id'] != ''):
	$deleteSql = "DELETE FROM `images` WHERE `id`='".$_GET['id']."'";
	$run = mysqli_query($conn,$deleteSql);
	header('location:../image.php');
endif;





 ?>