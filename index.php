<?php
    require_once("config/class.php");
    $current_page = 'root';

    $slides = $opr->select_records("*", TBL_HOME_SLIDE);
    $news = $opr->select_records("*", TBL_HOME_NEWS);
    $abouts = $opr->select_records("*", TBL_ABOUT_US);
    $tours = $opr->select_records("*", TBL_TOUR);
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
                                    <?php
                                    $i=0;
                                    while($row=mysql_fetch_array($slides)) {
                                    ?>
                                    <div class="item <?php echo (++$i == 1) ? 'active' : ''; ?>">
                                        <img src="images/slides/<?php echo $row['slide_image'];?>" alt="<?php echo $row['slide_image'];?>">
                                        <div class="carousel-caption">
                                            image: <?php echo $row['slide_image'];?>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
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
                                    នៅ​ថ្ងៃ​ទី​១៧ ខែ​សីហា ឆ្នាំ​២០១៤ វេលា​ម៉ោង ៤:០០​នាទី​ព្រឹក ឯកឧត្តម  ថោង ខុន រដ្ឋមន្ត្រី ក្រសួង​ទេសចរណ៍ និង​ជា​ប្រធាន​គណៈកម្មាធិការ​ជាតិ​អូឡាំពិក​កម្ពុជា​បាន​ផ្ដល់​កិត្តិយស​អញ្ជើញ ជា​អធិប្បតេយភាព​ក្នុង​ទិវា​រត់ប្រណាំង​ម៉ា​រ៉ា​តុង​ចក្រភព​អង្គរ​លើក​ទី​១​មុខ​ប្រាសាទអង្គរវត្ត ។​
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4>Popular Destinations</h4>
                                </div>
                                <div class="panel-body">
                                    កាលពី​ថ្ងៃ​ទី សុក្រ ទី ១៥ ខែ សីហា ឆ្នាំ​២០១៤ វេលា​ម៉ោង ១៤:៤៥ នាទី​រសៀល ឯកឧត្តម ថោង ខុន បាន​ទទួល​ជួប​សំដែង​ការគួរសម និង​ពិភាក្សា​ការងារ​ជាមួយ ឯកឧត្តម អាគី​ហ៊ី​រ៉ូ អូ​តា (H.E Mr. Akihiro Ohta) រដ្ឋមន្ត្រី​នៃ​ក្រសួង​ដែនដី ហេ​ដ្ឋា​រចនាស័ម្ពន្ធ នគរូបនីយកម្ម និង​ទេសចរណ៍​នៃ​ប្រទេស​ជប៉ុន​។​
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h4>Holidays &amp; Activities</h4>
                                </div>
                                <div class="panel-body">
                                    កាលពី​ថ្ងៃ​ទី សុក្រ ទី ១៣ ខែ សីហា ឆ្នាំ ២០១៤ វេលា​ម៉ោង ៣:០០ នាទី​រសៀល ឯកឧត្តម ថោង ខុន បាន​ទទួល​ជួប​សំដែង​ការគួរសម និង​ពិភាក្សា​ការងារ​ជាមួយ ឯកឧត្តម ធូ​ឆាយ​យុ​ធ ប៉ា​ឌី (H.E Mr. Touchayoot PAKDI) ឯកអគ្គរាជទូត​បញ្ចប់​អណត្តិ​នៃ​ព្រះរាជាណាចក្រ​ថៃ​។
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3">
                            <?php
                            while($row = mysql_fetch_array($news)) {
                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><?php echo $row['news_title']; ?></h4>
                                </div>
                                <div class="panel-body">
                                  <p>
                                    <?php echo $row['news_desc']; ?>
                                  </p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php
                                    while($row = mysql_fetch_array($abouts)) {
                                    ?>
                                    <div class="row info">
                                        <div class="col-xs-12 col-sm-9">
                                            <h5 class="info-title">
                                                <?php echo $row['abo_title']; ?>
                                            </h5>
                                            <p class="info-p"><?php echo $row['abo_desc']; ?></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-3 info-img">
                                            <img src="images/about-us/<?php echo $row['abo_image']; ?>" alt="<?php echo ($row['abo_image']=='')?'No image': ''; ?>" class="thumbnail img-responsive">
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="row">
                                    <?php
                                    while($row = mysql_fetch_array($tours)) {
                                    ?>
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="panel-body">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <a style="width: 60px; height: 60px; overflow: hidden;" class="pull-left" href="#">
                                                        <img class="media-object img-responsive" src="images/tour-destination/<?php echo $row['tou_image']; ?>" alt="<?php echo $row['tou_image']; ?>">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><?php echo $row['tou_title']; ?></h4>
                                                        <p><?php echo $row['tou_desc']; ?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>


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
        <script type="text/javascript" src="js/app.js"></script>
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
