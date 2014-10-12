<?php
    $active_page = 'frontend';
    require_once("../config/class.php");

    $about_us = $opr->select_records("*", TBL_ABOUT_US);
    $about_us1 = $opr->select_records("*", TBL_ABOUT_US);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/sites/about-us.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-full-width">
            <div class="container">
                <header>
                    <div class="row">
                        <?php include("../partials/header.php"); ?>
                    </div>
                </header>
                <div class="main-content">
                    <div class="about-us">
                        <h1 class="about-title">about cambodia</h1>
                        <p class="about-short-desc">Lorem ipsum dolor sit amet</p>
                        <p class="about-breadscrumb">home &raquo; about-us</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <div class="list-group">
                                <?php
                                while($row=mysql_fetch_array($about_us)){
                                ?>
                                    <a href="#<?php echo $row['abo_id'];?>" class="list-group-item">
                                        <?php echo $row['abo_title'];?>
                                    </a>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <?php

                            while($row=mysql_fetch_array($about_us1)){
                            ?>
                            <div class="row">
                                <div class="col-xs-12 col-sm-8">
                                    <h5 id="<?php echo $row['abo_id']?>"><?php echo $row['abo_title']?></h5>
                                    <p><?php echo $row['abo_desc']?></p>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <?php 
                                    if($row['abo_image']!='') {
                                    ?>
                                        <img src="../images/about-us/<?php echo $row['abo_image']?>" alt="<?php echo $row['abo_image']?>" class="img-responsive thumbnail">
                                    <?php 
                                    } 
                                    ?>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php include("../partials/footer.php"); ?>
            </div>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <script type="text/javascript" src="../js/app.js"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            // (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            // function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            // e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            // e.src='//www.google-analytics.com/analytics.js';
            // r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            // ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
