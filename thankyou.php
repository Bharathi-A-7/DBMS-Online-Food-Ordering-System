<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Fooderia</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="fonts/ionicons.css" rel="stylesheet">
        <link href="common/styles.css" rel="stylesheet">

        <style type="text/css">
        label{
                width: 180px;
                display:inline-block;
                text-align:left

        }</style>
</head>
<body>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php session_start(); ?>
<?php ob_start(); ?>
<header>
        <div class="container">
                <a class="logo" href="#"><img src="images/logo-white.png" alt="Logo"></a>

              

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <ul class="main-menu font-mountainsre" id="main-menu">
                        <li><a href="indexphp.php">HOME</a></li>
                        <li><a href="menuphp.php">YUM YUM</a></li>
						<li><a href="session_clear.php">LOGOUT</a></li>
                       
                </ul>

                <div class="clearfix"></div>
        </div><!-- container -->
</header>
<br> </br>
<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Thank you for your purchase and your review </h2>
						<h5> We are looking forward to seeing you again </h5>
                        
                        
                </div>

                                
        </div><!-- container -->
</section>
<br>  </br>
<form method="POST">
<div style="width:100%;Text-align:center;float:center;">
<h6><a  class="plr-20 color-red btn-fill-primary" href="session_clear.php" ><b>Log Out<b></a></h6>
</div>     
</form>

<footer class="pb-50  pt-70 pos-relative footer-bg-1">

        <div class="container-fluid">
                <a href="indexphp.php"><img src="images/logo-white.png" alt="Logo"></a>

                <div class="pt-30">
                        <p class="underline-secondary"><b>Address:</b></p>
                        <p>Bangalore . Mumbai . Chennai . Kolkata</p>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Phone:</b></p>
                        <a href="tel:+1234567890">1234567890</a>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Email:</b></p>
                        <a href="mailto:yourmail@gmail.com"> yummyfood@gmail.com</a>
                </div>

                <ul class="icon mt-30">
                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                        <li><a href="#"><i class="ion-social-vimeo"></i></a></li>
                </ul>

                <p class="color-light font-9 mt-50 mt-sm-30"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div><!-- container -->
</footer>

<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-oEyU88bRR6xcbV1gI_Cahc8ugKC_JPE&callback=initMap"></script>

</body>
</html>
