<?php $path = (($current_page != "root") ? "../" : ""); ?>

<div class="col-xs-3">
    <img src="<?php echo $path; ?>images/logo_mot.png">
</div>
<div class="col-xs-9">
    <div class="row">
        <div class="col-xs-12 hidden-xs">
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span> Submit
                </button>
            </form>
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
                    <a href="<?php echo $path; ?>" class="hover-style">Home</a>
                </li>
                <li>
                    <a href="<?php echo $path.'about-us'; ?>" class="hover-style">about us</a>
                </li>
                <li>
                    <a href="<?php echo $path.'tour-destination'; ?>" class="hover-style">destination</a>
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