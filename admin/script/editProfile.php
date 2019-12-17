<?php 
include('../../connection.php');


function findexts ($filename) 
{ 
	$filename = strtolower($filename); 
	$exts = explode(".", $filename); 
	$n = count($exts)-1; $exts = $exts[$n]; 
	return $exts; 
}











if(isset($_POST['submit'])):
	// $img = basename($_FILES['image']['name']); //Get here extension from image
	// $result = expload('.',$img);
	// $uploadpath= result[0].date('dmY').'_'.time().'.'.$result[1];



	$ext = findexts ($_FILES['profile']['name']) ;
	$ran = date('dmY').'_'.time();
	$ran2 = $ran."."; 
	$target = "../../images/";
	$target = $target . $ran2.$ext;
	if(move_uploaded_file($_FILES['profile']['tmp_name'], $target)):
		echo "The file has been uploaded as ".$ran2.$ext;
		else:
		echo "Sorry, there was a problem uploading your file."; 
	endif;

	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$mobile = $_POST['mobile'];
	$profile = $_POST['profile'];
	$sql = "UPDATE `user` SET `name`='".$name."',`email`='".$email."',`address`='".$address."',`phone`='".$phone."',`mobile`='".$mobile."',`profile`='".$ran2.$ext."' WHERE `id`='1'";

	$run = mysqli_query($conn,$sql);

	if($run == true):
		header('location:../dashboard.php');
	endif;
endif;


 ?>