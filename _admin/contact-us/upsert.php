<?php
    $active_page = 'backend';
    require("../../config/class.php");

    if ($_POST) {
        $opr->contact->description = $_POST['description'];
        $opr->contact->email = $_POST['email'];
        $opr->contact->phone = $_POST['phone'];
        $opr->contact->social = $_POST['social'];

        if($_POST['contact_edit']) {
            if (!$opr->contact->update_basic_info()) {
                echo "Cannot update Basic Info!";
            } else {
                header("location: index.php"); exit();
            }
        } else {
            if (!$opr->contact->save()) {
                echo "Cannot save Basic Info!";
            } else {
                header("location: index.php?flash=1"); exit();
            }
        }
    }
    $contact = $opr->find_record("*", TBL_CONTACT_US, 1);
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
        <link rel="stylesheet" type="text/css" href="../css/contact-us.css">
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
                                <form class="form-horizontal" role="form" method="post">
                                    <input type="hidden" name="contact_edit" value="<?php echo $contact['con_id']; ?>">
                                    <div class="col-xs-12"><h2>Basic Info</h2></div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="inputMessage" class="col-lg-2 control-label">Description</label>
                                            <div class="col-lg-10">
                                                <textarea rows="5" name="description" id="description" class="form-control"><?php echo $contact['con_address_desc']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage" class="col-lg-2 control-label">Communications</label>
                                            <div class="col-lg-10">
                                                <div class="row com-dropdown">
                                                    <div class="col-xs-4">
                                                        <select class="form-control">
                                                            <option value="email" selected>Email</option>
                                                            <option value="phone">Phone</option>
                                                            <option value="facebook">Facebook</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <input type="text" placeholder="" class="form-control" name="email" value="<?php echo $contact['con_email']; ?>">
                                                    </div>
                                                </div>
                                                <div class="row com-dropdown">
                                                    <div class="col-xs-4">
                                                        <select class="form-control">
                                                            <option value="email">Email</option>
                                                            <option value="phone" selected>Phone</option>
                                                            <option value="facebook">Facebook</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <input type="text" placeholder="" class="form-control" name="phone" value="<?php echo $contact['con_phone']; ?>">
                                                    </div>
                                                </div>
                                                <div class="row com-dropdown">
                                                    <div class="col-xs-4">
                                                        <select class="form-control">
                                                            <option value="email">Email</option>
                                                            <option value="phone">Phone</option>
                                                            <option value="facebook" selected>Facebook</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-8">
                                                        <input type="text" placeholder="" class="form-control" name="social" value="<?php echo $contact['con_social']; ?>">
                                                    </div>
                                                </div>
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
