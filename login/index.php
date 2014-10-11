<?php
    require_once("../config/class.php");


    if($_POST) {
        $opr->register->user_name     = $_POST['user_name'];
        $opr->register->user_email    = $_POST['user_email'];
        $opr->register->user_password = $_POST['user_password'];
        $opr->register->user_status   = $_POST['user_status'];
        $opr->register->user_photo    = '';

        if( $opr->register->save() ) {
            header("location: ../_admin");
        } else {
            echo '<p style="color: red;">Register Fail!</p>';
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
                    </div>
                </header>
                <div class="main-content">
                    <div class="row">
                        
                        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                            <h1>Login</h1>
                            <p>Welcome back!</p>
                            <form class="form-horizontal" role="form" name="frm_register" method="post">
                                <div class="form-group">
                                    <label for="user_name" class="col-lg-2 control-label">User name: </label>
                                    <div class="col-lg-10">
                                        <input type="name" class="form-control" name="user_name" placeholder="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user_password" class="col-lg-2 control-label">User password: </label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" name="user_password" placeholder="password">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                       <input type="submit" class="btn btn-default" value="Register now!">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <script type="text/javascript" src="../js/app.js"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>


    </body>
</html>
