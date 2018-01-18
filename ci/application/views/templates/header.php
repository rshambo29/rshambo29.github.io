<html>
    <head>
        <title><?php echo $data['title']?></title>
        <script src="<?php echo base_url(); ?>scripts-style/jquery-3.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>scripts-style/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>scripts-style/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>scripts-style/style.css">
        <link 
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts-style/script.js"></script>
    </head>
    <body>
    <nav class="navbar-light navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navBarTop" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('home/index')?>">Ryan Archambeault</a>
        </div>
        <div class="collapse navbar-collapse" id="navBarTop">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('home/index')?>">Home</a></li>
                <li><a href="<?php echo site_url('movies/index')?>">Movies</a></li>
                <li><a href="">Photos</a></li>
                <li><a href="<?php echo site_url('videos/index')?>">Videos</a></li>
                <li><a href="<?php echo site_url('home/about')?>">About Me</a></li>
            </ul>
        </div>
    </div>
</nav>
