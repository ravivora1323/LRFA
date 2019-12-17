<?php 

include('connection.php');

$categorySql = "SELECT * FROM `categories`";
$category = mysqli_query($conn,$categorySql);

 ?>