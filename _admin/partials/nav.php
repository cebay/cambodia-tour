<?php $path = (($current_page != "root") ? "../" : ""); ?>

<ul class="nav nav-stacked" id="sidebar">
    <li><a href="<?php echo $path.'home'; ?>"><span class="glyphicon glyphicon-home"></span> &nbsp; Home</a></li>
    <li><a href="<?php echo $path.'about-us'; ?>"><span class="glyphicon glyphicon-user"></span> &nbsp; About Us</a></li>
    <li><a href="<?php echo $path.'tour'; ?>"><span class="glyphicon glyphicon-globe"></span> &nbsp; Tour Destination</a></li>
    <li><a href="<?php echo $path.'gallery'; ?>"><span class="glyphicon glyphicon-picture"></span> &nbsp; Gallery</a></li>
    <li><a href="<?php echo $path.'contact-us'; ?>"><span class="glyphicon glyphicon-earphone"></span> &nbsp; Contact Us</a></li>
</ul>