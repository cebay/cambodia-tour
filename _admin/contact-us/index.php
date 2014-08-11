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
        <link rel="stylesheet" type="text/css" href="../../css/_admin.css">
        <link rel="stylesheet" type="text/css" href="../css/contact-us.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <script src="../../js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container-full-width">
            <div class="container">
                <?php
                    if ($_GET['flash'] == 1) {
                        echo '<div class="alert alert-success" role="alert" style="margin-top: 20px;">
                                <button type="button" class="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>Basic Info has been save successfully!
                            </div>';
                    }
                ?>
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
                              <div class="row">
                                <div class="col-xs-12 col-md-6">
                                  <div class="logo">
                                    <div class="panel panel-default">
                                        <div class="panel-heading title-bar">
                                            <h4>logo</h4>
                                        </div>
                                        <div class="panel-body logo-wrapper">
                                            <div class="img-replacement">
                                                <img src="../../images/asian-tour-logo.jpg">
                                            </div>
                                            <p>
                                                <a href="#" id="label-upload">change logo</a>
                                                <span></span>
                                                <form name="frm-upload" id="frm-upload" 
                                                        action="../ajax/ajaximage.php" method="post" enctype="multipart/form-data">
                                                    <input type="file" name="logo_upload" id="logo_upload" accept="image/*" />
                                                </form>
                                            </p>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                  <div class="logo">
                                    <div class="panel panel-default">
                                        <div class="panel-heading title-bar">
                                            <h4>
                                              basic info
                                            </h4>
                                            <a href="upsert.php" class="btn btn-default btn-xs edit-ico" data-toggle="tooltip" data-original-title="Edit" data-no-turbolink="true">
                                              <span class="glyphicon glyphicon-pencil pull-right"></span>
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna...</p>
                                            <dl class="dl-horizontal">
                                              <dt>Email: </dt>
                                                <dd>radin.reth@gmail.com</dd>
                                              <dt>Tel: </dt>
                                                <dd>093 555 225</dd>
                                            </dl>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12">
                                  <div class="logo">
                                    <div class="panel panel-default">
                                        <div class="panel-heading title-bar">
                                            <h4>map</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div id="mapCanvas"></div>
                                              <div id="infoPanel">
                                                <b>Marker status:</b>
                                                <div id="markerStatus"><i>Click and drag the marker.</i></div>
                                                <b>Current position:</b>
                                                <div id="info"></div>
                                                <b>Closest matching address:</b>
                                                <div id="address"></div>
                                                <div>
                                                    <a href="#" class="btn btn-success" type="submit" disabled>Save</a>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
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

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="../js/gmap.js"></script>

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
