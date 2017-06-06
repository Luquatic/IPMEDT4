<?php

//require_once('connect.php');
if(isset($_POST) & !empty($_POST)) {
    $id = $_POST['id'];
    $password = $_POST['wachtwoord'];

    $sql = " SELECT * FROM klanten WHERE id='$id' AND wachtwoord='wachtwoord' ";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1) {
        header('location: connect.php');
    } else {
        $fmsg = "Verkeerde inlog gegevens";
    }
}

?>

        <!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aid.</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href=/css/login.css>
    <!-- endbuild -->
</head>
<body>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="loginBox">
    <h1>Welkom bij</h1>

    <img src="/images/aid_logo.png">

    @yield ('content')
</div>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<!-- build:js scripts/main.js -->
<script src="../../../public/js/login.js"></script>
<!-- endbuild -->
</body>
</html>