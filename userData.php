<?php include('connection.php');


$userSql = "SELECT * FROM `user`";

$run = mysqli_query($conn,$userSql);
$userData = mysqli_fetch_assoc($run);





 ?>