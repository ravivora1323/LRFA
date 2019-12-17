<?php 

include('connection.php');

$specialSql = "SELECT * FROM `special`";
$special = mysqli_query($conn,$specialSql);

 ?>