<?php $current_page = 'root'; ?>
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

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/sites/home.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-full-width">
            <div class="container">
                <header>
                    <div class="row">
                        <?php include("partials/header.php"); ?>
                    </div>
                </header>
                <div class="main-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/slides/6.jpg" alt="6.jpg">
                                        <div class="carousel-caption">
                                            image: 6.jpg
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/slides/7.jpg" alt="7.jpg">
                                        <div class="carousel-caption">
                                            image: 7.jpg
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/slides/8.jpg" alt="8.jpg">
                                        <div class="carousel-caption">
                                            image: 8.jpg
                                        </div>
                                    </div>
                              </div>

                              <!-- Controls -->
                              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                              </a>
                            </div>
                        </div>
                    </div>
                    <div class="row main-panels">
                        <div class="col-xs-12 col-sm-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>About Cambodia</h4>
                                </div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>Popular Destinations</h4>
                                </div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4>Holidays &amp; Activities</h4>
                                </div>
                                <div class="panel-body">
                                    Panel content
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>new1</h4>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                    </p>
                                </div>
                                <div class="panel-footer">
                                    <p>readmore</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row info">
                                        <div class="col-xs-12 col-sm-9">
                                            <h5 class="info-title">
                                                Lorem ipsum dolor
                                            </h5>
                                            <p class="info-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 info-img">
                                            <img src="images/island.jpg" alt="island.jpg" class="thumbnail">
                                        </div>
                                    </div>
                                    <div class="row info">
                                        <div class="col-xs-12 col-sm-9">
                                            <h5 class="info-title">
                                                Lorem ipsum dolor
                                            </h5>
                                            <p class="info-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 info-img">
                                            <img src="images/island.jpg" alt="island.jpg" class="thumbnail">
                                        </div>
                                    </div>
                                    <div class="row info">
                                        <div class="col-xs-12 col-sm-9">
                                            <h5 class="info-title">
                                                Lorem ipsum dolor
                                            </h5>
                                            <p class="info-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 info-img">
                                            <img src="images/island.jpg" alt="island.jpg" class="thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="panel-body">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/boat.jpg" alt="boat.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="panel-body">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/boat.jpg" alt="boat.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="panel-body">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/boat.jpg" alt="boat.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="panel-body">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/boat.jpg" alt="boat.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="panel-body">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/boat.jpg" alt="boat.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="panel-body">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a class="pull-left" href="#">
                                                        <img class="media-object" src="images/boat.jpg" alt="boat.jpg">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Media heading</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include("partials/footer.php"); ?>
            </div>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>

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
