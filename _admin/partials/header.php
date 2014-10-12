<?php $path = (($current_page != "root") ? "../" : ""); ?>

<nav class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
        <a href="<?php echo $path; ?>">
            <img width="60" src="<?php echo $path; ?>../images/asian-tour-logo.jpg" id="logo" class="pull-left">
        </a>
        <a href="../" class="navbar-brand" id="listing-name"> Radin's Tour Company</a>
        <ul class="nav nav-tabs pull-right visible-xs">
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">radin-reth@gmail.com <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="?action=logout"><span class="glyphicon glyphicon-log-out"></span>&emsp;Logout</a></li>
            </ul>
            </li>
        </ul>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
        <ul class="nav nav-tabs pull-right nav-config">
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">radin-reth@gmail.com <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="?action=logout"><span class="glyphicon glyphicon-log-out"></span>&emsp;Logout</a></li>
            </ul>
            </li>
        </ul>
    </nav>
  </div>
</nav>