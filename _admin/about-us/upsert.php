<?php
    $active_page = 'backend';
    require("../../config/class.php");

    if ($_POST) {

        $opr->about->abo_title   = $_POST['abo_title'];
        $opr->about->abo_desc    = $_POST['abo_desc'];
        $opr->about->abo_image   = $_FILES["abo_image"]["name"];
        $opr->about->abo_status  = (($_POST['abo_status']) == 'on' ? 1 : 0);
        $opr->about->abo_id      = $_POST['abo_edit'];

        if($_POST['abo_edit']) {
            //echo '=> ' . $_POST["abo_image_hidden"]; exit(0);

            if($_POST["abo_image_hidden"] != '' && $_FILES["abo_image"]["name"] == '') {
                $opr->about->abo_image = $_POST["abo_image_hidden"];
            } else {
              $opr->upload_file($_FILES["abo_image"], "../../images/about-us/");
            }

            if (!$opr->about->update()) {
                echo "Cannot update about!";
            } else {
                header("location: index.php?flash=1"); 
                exit();
            }
        } else {
            $is_uploaded = $opr->upload_file($_FILES["abo_image"], "../../images/about-us/");

            if (!$opr->about->save()) {
                echo "Cannot save about!";
            } else {
                header("location: index.php?flash=1"); 
                exit();
            }
        }

    } else if ( $_GET["action"] == "edit") {
        $field = "*";
        $table = TBL_ABOUT_US;
        $condition = sprintf("abo_id=%u", $_GET["abo_id"]);

        $about = $opr->find_record($field, $table, $condition);

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
                                    <a href="index.php" role="button" class="btn btn-default pull-right">
                                      <span class="glyphicon glyphicon-arrow-left"></span> Back
                                    </a>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading title-bar">
                                    <h4>Add new</h4>
                                </div>
                                <div class="panel-body">
                                  <form method="post" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $about['abo_id'] ?>" name="abo_edit">
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-4">
                                        <div class="thumb-about">
                                          <!-- <span class="glyphicon glyphicon-plus"></span> add photo -->
                                          <input type="file" name="abo_image">
                                          <input type="hidden" name="abo_image_hidden" value="<?php echo $about['abo_image'] ?>" >
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-8">
                                         <div class="form-group row">
                                           <label for="abo_title" class="col-lg-2 control-label">Title</label>
                                           <div class="col-lg-10">
                                             <input type="text" class="form-control" name="abo_title" id="abo_title" placeholder="Title" value="<?php echo $about['abo_title'] ?>">
                                           </div>
                                         </div>
                                         <div class="form-group row">
                                           <label for="abo_desc" class="col-lg-2 control-label">Description</label>
                                           <div class="col-lg-10">
                                             <textarea rows="5" name="abo_desc" id="abo_desc" class="form-control"><?php echo $about['abo_desc'] ?></textarea>
                                           </div>
                                         </div>
                                         <div class="form-group row">
                                            <input type="checkbox" name="abo_status" class="abo_status" <?php echo (( $about['abo_status'] == 1 ) ? 'checked' : '' ) ?> >
                                         </div>
                                         <div class="form-group row">
                                           <div class="col-lg-offset-2 col-lg-10">
                                             <input type="submit" class="btn btn-success" value="Save">
                                           </div>
                                         </div>
                                      </div>
                                    </div>
                                  </form>
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
