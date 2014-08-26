<?php
    require("../../config/class.php");

    if ($_POST) {

        $opr->gallery->gal_title   = $_POST['gal_title'];
        $opr->gallery->gal_image   = $_FILES["gal_image"]["name"];
        $opr->gallery->gal_status  = (($_POST['gal_status']) == 'on' ? 1 : 0);
        $opr->gallery->user_id     = 1;

        if($_POST['gal_edit']) {
            echo '=> ' . $_POST["gal_image_hidden"]; exit(0);

            if($_POST["gal_image_hidden"] && !$_FILES["gal_image"]) {
                $opr->gallery->gal_image = $_POST["gal_image_hidden"];
            }

            if (!$opr->gallery->update()) {
                echo "Cannot update gallery!";
            } else {
                header("location: index.php?flash=1"); 
                exit();
            }
        } else {
            $is_uploaded = $opr->upload_file($_FILES["gal_image"], "../../images/galleries/");

            if (!$opr->gallery->save()) {
                echo "Cannot save gallery!";
            } else {
                header("location: index.php?flash=1"); 
                exit();
            }
        }

    } else if ( $_GET["action"] == "edit") {
        $field = "*";
        $table = TBL_GALLERY;
        $condition = sprintf("gal_id=%u", $_GET["gal_id"]);

        $gallery = $opr->find_record($field, $table, $condition);

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
        <link rel="stylesheet" type="text/css" href="../../css/_admin.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/gallery-us.css">
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
                                    <a href="index.php" role="button" class="btn btn-default pull-right">
                                      <span class="glyphicon glyphicon-arrow-left"></span> Back
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                    <div class="col-xs-12">
                                        <h2>Gallery</h2>
                                    </div>
                                    <input type="text" value="<?php echo $gallery['gal_id'] ?>" name="gal_edit">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="inputMessage" class="col-lg-2 control-label">Title: </label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="gal_title" value="<?php echo $gallery['gal_title'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage" class="col-lg-2 control-label">Image: </label>
                                            <div class="col-lg-10">
                                                <input type="text" name="gal_image_hidden" value="<?php echo $gallery['gal_image'] ?>" >
                                                <input type="file" name="gal_image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage" class="col-lg-2 control-label">Status: </label>
                                            <div class="col-lg-10">
                                                <input type="checkbox" placeholder="" name="gal_status" class="gal_status" <?php echo (( $gallery['gal_status'] == 1 ) ? 'checked' : '' ) ?> >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-10 col-md-offset-2">
                                        <input type="submit" class="btn btn-success" value="save">
                                        <a href="index.php" class="btn btn-default">Cancel</a>
                                    </div>
                                </form>
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
