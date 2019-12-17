<?php
include('connection.php');

$inquirySql = "INSERT INTO `inquiry`(`name`, `email`, `mobile`, `subject`, `occupation`, `message`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['subject']."','".$_POST['occp']."','".$_POST['message']."')";

mysqli_query($conn,$inquirySql);



if ($_POST['name'] == '') {
    echo json_encode(array('error_string' => 'Please enter name'));
    exit;
}  elseif ($_POST['mobile'] == '') {
    echo json_encode(array('error_string' => 'Please enter mobile'));
    exit;
}  elseif ($_POST['email'] == '') {
    echo json_encode(array('error_string' => 'Please enter email'));
    exit;
} elseif ($_POST['message'] == '') {
    echo json_encode(array('error_string' => 'Please enter message'));
    exit;
} elseif ($_POST['occp'] == '') {
    echo json_encode(array('error_string' => 'Please enter occupation'));
    exit;
} elseif ($_POST['subject'] == '') {
    echo json_encode(array('error_string' => 'Please enter subject'));
    exit;
} else {
    $to = 'email-lingaraj_ratha@yahoo.com';
    $subject = "Enquiry LIC";
    $body = "<b>Name : </b> {$_POST['name']} <br />";
    $body .= "<b>Email : </b> {$_POST['email']} <br />";
    $body .= "<b>Contact Number : </b> {$_POST['mobile']} <br />";
    $body .= "<b>Occupation : </b> {$_POST['occp']} <br />";
    $body .= "<b>Message : </b> <br /> {$_POST['message']}";
    $headers = "From: {$_POST['name']}<{$_POST['email']}> \r\n";
    $headers .= "Reply-To: {$_POST['email']} \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    try {
        if ( mail($to, $subject, $body, $headers) ) {
            echo json_encode(array('error_string' => 'Mail Sent Successfully'));
            header('location:index.php');
        } else {
            echo json_encode(array('error_string' => 'Message delivery failed'));
            header('location:index.php');
        }
    } catch (\Exception $e) {
        echo json_encode(array('error_string' => 'Something Went Wrong'));
        header('location:index.php');
    }
}


