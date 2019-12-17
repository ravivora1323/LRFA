<?php 

include('connection.php');

$mailSql = "SELECT * FROM `inquiry`";
$mail = mysqli_query($conn,$mailSql);

 ?>