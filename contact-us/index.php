<?php
    require_once("../config/class.php");

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

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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
                        <h1 class="about-title">Contact Us</h1>
                        <p class="about-short-desc">Lorem ipsum dolor sit amet</p>
                        <p class="about-breadscrumb">home &raquo; contact-us</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h2>address</h2></div>
                                <div class="panel-body">
                                    <p><?php echo $contact['con_address_desc']; ?></p>
                                    <dl class="dl-horizontal">
                                        <dt>Mobile phone:</dt>
                                            <dd><?php echo $contact['con_phone']; ?></dd>
                                        <dt>Email</dt>
                                            <dd><?php echo $contact['con_email']; ?></dd>
                                        <dt>Facebook</dt>
                                            <dd><?php echo $contact['con_social']; ?></dd>
                                    </dl> 
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h2>email us</h2></div>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputName" class="col-lg-2 control-label">Name</label>
                                            <div class="col-lg-10">
                                                <input type="name" class="form-control" id="inputName" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTelephone" class="col-lg-2 control-label">Telephone</label>
                                            <div class="col-lg-10">
                                                <input type="telephone" class="form-control" id="inputTelephone" placeholder="Telephone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail1" class="col-lg-2 control-label">*Email</label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage" class="col-lg-2 control-label">*Message</label>
                                            <div class="col-lg-10">
                                                <textarea rows="5" name="message" id="message" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                               <button type="submit" class="btn btn-default">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h2>Map</h2></div>
                            <div class="panel-body">
                                <div id="map-canvas" style="width: 100%; height: 350px"></div>
                            </div>
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


        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn4-06AFYcsK0Zh5tXE1dauw1BPkS9Kds"></script>
        <script type="text/javascript">
          function initialize() {
            var mapOptions = {
              center: new google.maps.LatLng(<?php echo $contact['con_lat'] ?>, <?php echo $contact['con_long'] ?>),
              zoom: 8
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"),
                mapOptions);
          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>

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
