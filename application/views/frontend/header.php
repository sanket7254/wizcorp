<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>WIZCORP
</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/stylesheets/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/stylesheets/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/stylesheets/responsive.css">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/revolution/css/settings.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/stylesheets/colors/color2.css" id="colors">
    
    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/stylesheets/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/stylesheets/twentytwenty.css">

    <!-- Favicon and touch icons  -->
        <link href="<?php echo base_url();?>assets/frontend/images/logo.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="<?php echo base_url();?>assets/frontend/images/logo.png" rel="apple-touch-icon-precomposed">
    <link href="<?php echo base_url();?>assets/frontend/images/logo.png" rel="shortcut icon">
<style>
    .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.wrap-slider{
    position: relative;
    text-align: center;
    color: white;
}
</style>
</head>                                 
<body class="header-sticky v3"> 
    <!-- Preloader -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading</h2>
        </div>
    </section>    

    <!-- Boxed -->
    <div class="boxed">

        <div class="site-wrapper">
            <div class="top bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 top-reponsive">                      
                            <ul class="flat-information">
                                <li class="phone"><a href="#"><?= $data[0]->contact;?></a></li>
                                <li class="email"><a href="#"><?= $data[0]->email;?></a></li>
                            </ul>           
                        </div><!-- /.col-md-6 -->       
                        <div class="col-md-6 col-sm-6 top-reponsive">
                            <ul class="social-links">
                                <?php $facebook_link="http://".$data[0]->facebook_link;?>
                                <?php $twitter_link="http://".$data[0]->twitter_link;?>
                                <?php $linkedin_link="http://".$data[0]->linked_link;?>
                                <li><a href="<?= $facebook_link;?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?= $twitter_link;?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?= $linkedin_link;?>"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="flat-dropdown flat-sign-in">                        
                                <ul class="unstyled">
                                    <li class="current"><a href="<?php echo base_url('Login');?>">Login</a>
                                        
                                     </li>
                                </ul>
                            </div> 
                        </div>        
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.top -->

            <?php 
                $page = basename($_SERVER['PHP_SELF']);
            ?>

            <!-- Header -->            
            <header id="header" class="header clearfix responsive">
                <div class="flat-header clearfix">
                    <div class="container">
                        <div class="row">                 
                            <div class="header-wrap clearfix">
                                <div class="col-md-12">
                                    <div class="logo" style="float: left;margin-left: 10px;">
                                        <img src="<?php echo base_url();?>assets/frontend/images/logo.png">
                                    </div> 
                                    <div class="nav-wrap">
                                                               
                                        <nav id="mainnav" class="mainnav">
                                            <ul class="menu"> 
                                                <li class="<?php if($page == 'Home'){ echo 'active';} ?>"> 
                                                    <a href="<?php echo base_url('Home');  ?>">Home</a>
                                                </li>
                                                <li  class="<?php if(($page == 'About') || ($page == 'Franchise') || ($page == 'Gallery')) { echo 'active';} ?>"><a>Company</a>
                                                    <ul class="submenu"> 
                                                        <li><a href="<?php echo base_url('About');?>">About us</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('Franchise');?>">Franchise</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('Gallery');?>">Gallery</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="<?php if($page == 'Midbrain'){ echo 'active';} ?>"><a>Course</a>
                                                    <ul class="submenu"> 
                                                        <li><a href="<?php echo base_url('Midbrain');?>">Mid-Brain</a>
                                                        </li>
                                                        <li><a href="<?php echo base_url('our_courses');?>">Our Courses</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="<?php if($page == 'News'){ echo 'active';} ?>"><a href="<?php echo base_url('News');?>">News & Event</a></li>
                                                
                                                <li class="<?php if($page == 'Contact'){ echo 'active';} ?>"><a href="<?php echo base_url('Contact');?>">Contact</a>
                                                        </li>                       
                                            </ul><!-- /.menu -->
                                        </nav><!-- /.mainnav -->
                                    </div><!-- /.nav-wrap -->
                                    
                                </div>                      
                            </div><!-- /.header-inner -->                 
                        </div><!-- /.row -->
                    </div>
                </div>
            </header><!-- /.header -->
