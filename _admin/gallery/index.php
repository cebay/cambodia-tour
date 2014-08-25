<?php
    if ($_GET['action'] == 'delete') {
      require("../../config/class.php");
      $opr->gallery->gal_id   = $_GET['gal_id'];

      if (!$opr->gallery->delete()) {
        echo "Delete fail!";
      } else {
        header("location: index.php?flash=1"); 
        exit();
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
                            <form method="post">
                              <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="plus-wrapper">
                                    <a href="upsert.php">
                                      <span class="glyphicon glyphicon-plus"></span> Add photos
                                    </a>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <h3>title 1</h3>
                                      <a href="?action=delete&gal_id=11" role="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </a>
                                      <a href="upsert.php?action=edit&gal_id=11" role="button" class="btn btn-default btn-xs btn-del">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                      </a>
                                    </div>
                                    <img src="../../images/galleries/collage/2.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/3.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/4.jpg" class="img-responsive">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/1.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/2.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/3.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/4.jpg" class="img-responsive">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/1.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/2.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/3.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/4.jpg" class="img-responsive">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/1.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/2.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/3.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/4.jpg" class="img-responsive">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/1.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/2.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/3.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/4.jpg" class="img-responsive">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/3.jpg" class="img-responsive">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                  <div class="img-wrapper">
                                    <div class="panel-delete">
                                      <h3>title 1</h3>
                                      <button type="button" class="btn btn-default btn-xs btn-del" onclick="return confirm('Are you sure? Do you want to delete this record?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                      </button>
                                    </div>
                                    <img src="../../images/galleries/collage/4.jpg" class="img-responsive">
                                  </div>
                                </div>
                              </div>
                            </form>
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
