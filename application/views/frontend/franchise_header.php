<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Aug 2018 12:28:29 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>WIZCORP</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    
    <!-- icons -->
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/material/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/css/material_style.css">
    <!-- inbox style -->
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/css/theme/light/style.css" rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" /> 
 </head>
 <!-- END HEAD -->
<body  class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <span class="logo-icon material-icons fa-rotate-45">school</span>
                    <span class="logo-default" >Smart</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>
                 <form class="search-form-opened" action="#" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                    </div>
                </form>
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src=""/>
                                <span class="username username-hide-on-mobile"><?php echo form_hidden('fname',$this->session->userdata("fname")); ?>
                                    <?php echo $this->session->userdata("fname"); ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url('certificate');?>">
                                        <i class="icon-user"></i> Certificate </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('idcard_examp');?>">
                                        <i class="icon-settings"></i>ID Card
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('welcomepage');?>">
                                        <i class="icon-settings"></i>Welcome letter
                                    </a>
                                </li>
                                <li>
                                    <?= anchor('LoginController/logout', 'Logout'); ?>
                                        
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        
                    </ul>
                </div>
            </div>
        </div>
        <?php 
                $page = basename($_SERVER['PHP_SELF']);
            ?>

 <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll" class="left-sidemenu">
                        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
                                <div class="user-panel">
                                    <div class="pull-left image">
                                        <?php  
                                            $base = base_url()."uploads/admin/";
                                            $path = $base.$user_row->img;
                                        ?>
                                        <img src="<?= $path ?>" class="img-circle user-img-circle" alt="User Image" />
                                    </div>
                                    <div class="pull-left info">
                                        <b><?php echo form_hidden('fname',$this->session->userdata("fname")); ?>
                                    <?php echo $this->session->userdata("fname"); ?>
                                    </b>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="<?php if($page == 'Dashboard'){ echo 'active';} ?>">
                                <a href="<?php echo base_url('Dashboard');?>" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            
                            <li class="<?php if(($page == 'AllStudent') || ($page == 'AddStudent') || ($page == 'editstudent')) { echo 'active';} ?>">
                                <a href="<?php echo base_url('AllStudent');?>" class="nav-link nav-toggle"><i class="material-icons">group</i>
                                <span class="title">Students</span><span class="arrow"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu --> 