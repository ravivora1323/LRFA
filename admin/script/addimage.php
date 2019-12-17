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



	$ext = findexts ($_FILES['image']['name']) ;
	$ran = date('dmY').'_'.time();
	$ran2 = $ran."."; 
	$target = "../../images/";
	$target = $target . $ran2.$ext;
	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)):
		echo "The file has been uploaded as ".$ran2.$ext;
		else:
		echo "Sorry, there was a problem uploading your file."; 
	endif;

	$category = $_POST['category'];
	$sql = "INSERT INTO `images`(`image`,`category`) VALUES ('".$ran2.$ext."','".$category."')";

	$run = mysqli_query($conn,$sql);

	if($run == true):
		header('location:../image.php');
	endif;
endif;


 ?>