<?php
    require("../../config/class.php");

    if( $_GET['action']=="delete") {
        $opr->homeNews->news_id = $_GET['news_id'];
        if($opr->homeNews->delete()) {

        }
    }
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

        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/gallery.css">
        <link rel="stylesheet" type="text/css" href="../css/home.css">
        <link rel="stylesheet" type="text/css" href="../../css/_admin.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <script src="../../js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-full-width">
            <div class="container">
                <div class="main-content">
                    <?php include("../partials/header.php"); ?>

                    <!--main-->
                    <div class="container content-wrapper">
                        <div class="row">
                          <!--left-->
                            <div class="col-md-3" id="leftCol">
                                <?php include("../partials/nav.php"); ?>
                            </div><!--/left-->
                          
                          <!--right-->
                          <div class="col-md-9">
                            
                            <div class="panel panel-default">
                                <div class="panel-heading title-bar">
                                    <h5>News</h5>
                                    <a href="news.php" role="button" class="btn btn-success pull-right">
                                      <span class="glyphicon glyphicon-plus"></span> Add News
                                    </a>
                                </div>
                                <div class="panel-body">

                                    <div class="blog-post">
                                        <div class="img-upload upload-img">
                                            <a class="glyphicon glyphicon-plus" href="#">Add image slide</a>
                                        </div>
                                        <div class="img-upload slide-image">
                                            <img src="../../images/slides/6.jpg">
                                            <a href="?action=delete&slide_id=1" role="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </div>
                                        <div class="img-upload">
                                            <img src="../../images/slides/7.jpg">
                                        </div>
                                        <div class="img-upload">
                                            <img src="../../images/slides/8.jpg">
                                        </div>
                                    </div>
                                    
                                  <div class="blog-post">
                                    <p class="blog-opr">
                                      
                                      <a href="?action=delete&news_id=1" role="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a href="news.php?action=edit&news_id=1" role="button" class="btn btn-default btn-xs btn-del">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    </p>
                                    <h3>News 1</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                  </div>
                                  <div class="blog-post">
                                    <p class="blog-opr">
                                      <button class="btn btn-default btn-xs">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                      </button>
                                      <button class="btn btn-default btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </p>
                                    <h3>New 2</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div><!--/row-->
                    </div><!--/container-->
                </div>
            </div>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="../../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>
        <script type="text/javascript" src="../js/app.js"></script>
        <script src="../../js/vendor/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/_admin.js"></script>

        <script type="text/javascript" src="../js/upload.js"></script>
        <script type="text/javascript" src="../js/jquery.form.js"></script>

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
