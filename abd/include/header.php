<?php session_start(); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advance Business Directory</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f722b874704467e89f2fd0e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row" id="mNavbar">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo logo">
                        <a href="index.php">Advance Business <span>Directory</span></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu navbar-fixed-top">
                            <ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                
                                <li><a href="about.php">About</a></li>
                                <li><a href="disbplan.php">Business Plans</a></li>
								 <li><a href="contact.php">Contact</a></li>
								<li><a href="#">Login</a>
                                    <ul class="dropdown">
                                        <li></li>
                                        <li><a href="#" data-toggle="modal" data-target="#adminModal">Admin</a></li>
                                        <li><a href="user.php">User</a></li>
                                        <li></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="header__menu__right">
                            <a href="#" data-toggle="modal" data-target="#askModal" class="primary-btn"><i class="fa fa-plus"></i>Add Listing</a>
                               </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>