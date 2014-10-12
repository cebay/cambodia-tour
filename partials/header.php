<?php $path = (($current_page != "root") ? "../" : ""); ?>

<div class="col-xs-3">
    <a href="<?php echo $path; ?>">
        <img src="<?php echo $path; ?>images/logo_mot.png">
    </a>
</div>
<div class="col-xs-9">
    <div class="row">
        <div class="col-xs-12 hidden-xs">
            <section class="login pull-right">
                <?php
                if(!isset($_SESSION['user_id'])) {
                ?>
                    <a href="<?php echo $path.'signup'?>" class="btn btn-success">
                        Signup
                    </a>
                    &nbsp;or&nbsp;
                    <a href="<?php echo $path.'login'?>">Login</a>
                <?php
                } else {
                    ?>
                    <a href="<?php echo $path.'_admin'?>">My Admin</a>
                    <?php
                }
                ?>
            </section>
        </div>
    </div>
    <nav id="nav-custom" class="navbar navbar-default navbar-wrapper" role="navigation">
        <div class="navbar-header navbar-header-wrapper">
            <button class="navbar-toggle navbar-toggle-wrapper" data-target=".navbar-ex-collapse" data-toggle="collapse" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar icon-bar-bg"></span>
              <span class="icon-bar icon-bar-bg"></span>
              <span class="icon-bar icon-bar-bg"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-ex-collapse navbar-collapse-wrapper">
            <ul class="nav navbar-nav nav-top pull-right">
                <li class="active">
                    <a href="<?php echo $path.'#'; ?>" class="hover-style">Home</a>
                </li>
                <li>
                    <a href="<?php echo $path.'about-us'; ?>" class="hover-style">about us</a>
                </li>
                <li>
                    <a href="<?php echo $path.'tour-destination'; ?>" class="hover-style">tour destination</a>
                </li>
                <li>
                    <a href="<?php echo $path.'gallery'; ?>" class="hover-style">gallery</a>
                </li>
                <li>
                    <a href="<?php echo $path.'contact-us'; ?>" class="hover-style">contact us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>