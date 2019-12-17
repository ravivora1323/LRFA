<?php 

include('connection.php');

$imageSql = "SELECT * FROM `images`";
$images = mysqli_query($conn,$imageSql);

$categorySql = "SELECT DISTINCT `category` FROM `images`";
$categorys = mysqli_query($conn,$categorySql);


 ?>