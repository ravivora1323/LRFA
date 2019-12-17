<?php 
include('../../connection.php');

session_start();

if(!isset($_SESSION['login'])):
	header('../index.php');
endif;

if(isset($_POST['submit'])):
	if($_POST['username'] != '' && $_POST['password'] != ''):
		$loginSql = "SELECT * FROM `admin` WHERE `username`='".$_POST['username']."' AND `password`='".md5($_POST['password'])."'";
		$loginCheck = mysqli_query($conn,$loginSql);
		if(mysqli_num_rows($loginCheck)):
			$_SESSION['login'] = mysqli_fetch_assoc($loginCheck);
			header('location:../dashboard.php');
		else:
			$_SESSION['loginError'] = "Wrong Information";
			header('location:../index.php');
		endif;
	else:
		$info = "Empty Field is not valid !";
		header('location:../index.php');
	endif;
endif;





 ?>