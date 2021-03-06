<?php
    $active_page = 'backend';
    require("../../config/class.php");
    if( $_GET['action']=="delete") {
        $opr->about->abo_id = $_GET['abo_id'];
        if($opr->about->delete()) {

        }
    }
    $abouts = $opr->select_records("*", TBL_ABOUT_US);
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
        <link rel="stylesheet" type="text/css" href="../css/about-us.css">
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
                            <div class="row">
                                <div class="col-xs-12 add-new">
                                    <a href="upsert.php" role="button" class="btn btn-success pull-right">
                                      <span class="glyphicon glyphicon-plus"></span> Add New
                                    </a>
                                </div>
                            </div>
                            <?php
                            while($row = mysql_fetch_array($abouts)) {

                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading title-bar">
                                    <h4><?php echo $row['abo_title']; ?></h4>
                                    <a href="?action=delete&abo_id=<?php echo $row['abo_id']; ?>" role="button" class="btn btn-default btn-xs btn-del pull-right" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <a href="upsert.php?action=edit&abo_id=<?php echo $row['abo_id']; ?>" role="button" class="btn btn-default btn-xs btn-del pull-right">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                      <div class="col-xs-4">
                                        <div class="thumb-about">
                                            <img src="../../images/about-us/<?php echo $row['abo_image']; ?>" alt="<?php echo $row['abo_image']; ?>">
                                        </div>
                                      </div>
                                      <div class="col-xs-8">
                                        <p><?php echo $row['abo_desc']; ?></p>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
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
