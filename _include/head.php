<?php session_start();

if(!isset($_SESSION['email'])){
    echo "<script>alert('Please Login ❗❗❗'); window.location='index.php'; </script>";
}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/cardoor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:32:54 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<title>Campus Taxi</title>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">

<link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">

<link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">

<link href="assets/css/plugins/gijgo.css" rel="stylesheet">

<link href="assets/css/font-awesome.css" rel="stylesheet">

<link href="assets/css/reset.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">

<link href="assets/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>