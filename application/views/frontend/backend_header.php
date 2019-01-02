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
    <link href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>

    
    <script type="text/javascript">

    function check()
    {
        var dropdown = document.getElementById("feedetail");
        var current_value = dropdown.options[dropdown.selectedIndex].value;
        
        if (current_value == "Paid" ) 
        {
            document.getElementById("mypayment").style.display = "block";
        }
        else 
        {
            document.getElementById("mypayment").style.display = "none";
        }
    }

    function cehq()
    {
        /*alert('This is Cheque');*/
        var dropdown = document.getElementById("paymenttype");
        var current_value = dropdown.options[dropdown.selectedIndex].value;

        if (current_value == "Cheque")
        {
            document.getElementById("chequeno").style.display = "block";
            document.getElementById("netbanking").style.display = "none";
        }
        else if (current_value == "Net Banking")
        {
            document.getElementById("netbanking").style.display = "block";
            document.getElementById("chequeno").style.display = "none";
        }
        else 
        {
            document.getElementById("chequeno").style.display = "none";
            document.getElementById("netbanking").style.display = "none";
        }
    }

    function medical_history()
    {
        var checkBox = document.getElementById("fit").value;
        var text = document.getElementById("text");
        if (checkBox == 1)
        {
            document.getElementById("fit").checked = true;
            text.style.display = "block";
        }
        else
        {
           document.getElementById("not_fit").checked = true;
           text.style.display = "none";
        }
    }

    function start()
    {
        check();
        cehq();
        medical_history();
    }
</script>
 </head>
 <!-- END HEAD -->
<body onload="start(this);"  class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
                    <a href="index.html">
                    <span class="logo-icon material-icons fa-rotate-45">school</span>
                    <span class="logo-default" >WIZCORP</span> </a>
                </div>
                <!-- logo end -->
                <ul class="nav navbar-nav navbar-left in">
                    <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                </ul>
                 
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
                                        <?php
                                            if($user_row->divide == "admin")
                                            {
                                                $base = base_url()."uploads/admin/";
                                                $path = $base.$user_row->img;
                                            }
                                            else
                                            {
                                                $base = base_url()."uploads/franchise/";
                                                $path = $base.$user_row->img;
                                            }
                                            
                                        ?>
                                        <img src="<?= $path ?>" class="img-circle user-img-circle" alt="User Image" style="height: 30px;width: 30px;"/>
                                <span class="username username-hide-on-mobile"><?php echo form_hidden('fname',$this->session->userdata("fname")); ?>
                                    <?php echo $this->session->userdata("fname"); ?></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                         <?php if($user_row->divide == "admin") { ?>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url('myprofile');?>/">
                                    <i class="fa fa-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('LoginController/logout');?>">
                                        <i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>

                    <?php } else {
                     ?>

                     <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url('myprofile');?>/">
                                        <i class="fa fa-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('certificate');?>">
                                        <i class="icon-user"></i> Certificate </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('welcomepage');?>">
                                        <i class="icon-settings"></i>Welcome letter
                                    </a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url('LoginController/logout');?>">
                                        <i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                    <?php } ?>
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
                                            if($user_row->divide == "admin")
                                            {
                                                $base = base_url()."uploads/admin/";
                                                $path = $base.$user_row->img;
                                            }
                                            else
                                            {
                                                $base = base_url()."uploads/franchise/";
                                                $path = $base.$user_row->img;
                                            }
                                            
                                        ?>
                                        <img src="<?= $path ?>" class="img-circle user-img-circle" alt="User Image" style="height: 76px;width: 200px;"/>
                                    </div>
                                    <div class="pull-left info">
                                        <?php echo $user_row->first_name ?>
                                        <?php echo $user_row->last_name ?>
                                    </div>
                                </div>
                            </li>
                            <?php if($user_row->divide == "admin") { ?>

                            <li class="<?php if($page == 'Dashboard'){ echo 'active';} ?>">
                                <a href="<?php echo base_url('Dashboard');?>" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="<?php if(($page == 'all_admin') || ($page == 'add_admin') || ($page =='editadmin')) { echo 'active';} ?>">
                                <a href="<?php echo base_url('all_admin');?>" class="nav-link nav-toggle"> <i class="material-icons">assignment_ind</i>
                                    <span class="title">Admin</span></a>
                            </li>                         
                            <li class="<?php if(($page == 'all_course') || ($page == 'add_course') || ($page == 'editcourse')) { echo 'active';} ?>">
                                <a href="<?php echo base_url('all_course');?>" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                                <span class="title">Course</span></a>
                            </li>
                            
                            
                            <li class="<?php if(($page == 'all_franchiese') || ($page == 'add_franchiese') || ($page == 'editfranchiese')) { echo 'active';} ?>">
                                <a href="<?php echo base_url('all_franchiese');?>" class="nav-link nav-toggle"> <i class="material-icons">business</i>
                                    <span class="title">Franchise</span></a>
                            </li>
                            <li class="<?php if(($page == 'AllStudent') || ($page == 'AddStudent') || ($page == 'editstudent')) { echo 'active';} ?>">
                                <a href="<?php echo base_url('AllStudent');?>" class="nav-link nav-toggle"><i class="material-icons">group</i>
                                <span class="title">Students</span></a>
                            </li>

                            <li class="<?php if(($page == 'all_gallery') || ($page == 'store_gallery') || ($page == 'edit_gallery')) { echo 'active';} ?>">
                                <a href="<?php echo base_url('all_gallery');?>" class="nav-link nav-toggle"><i class="material-icons">collections</i>
                                <span class="title">Gallery</span></span></a>
                            </li>

                            <li class="<?php if($page == 'all_newsevents'){ echo 'active';} ?>">
                                <a href="<?php echo base_url('all_newsevents');?>" class="nav-link nav-toggle"><i class="material-icons">phone</i>
                                <span class="title">News & Events</span></a>
                            </li>
                            <li class="<?php if($page == 'enquiries'){ echo 'active';} ?>">
                                <a href="<?php echo base_url('enquiries');?>" class="nav-link nav-toggle"><i class="material-icons">sms</i>
                                <span class="title">Enquiries</span></a>
                            </li>
                            <li class="<?php if($page == 'records'){ echo 'active';} ?>">
                                <a href="<?php echo base_url('records');?>" class="nav-link nav-toggle"><i class="material-icons">event</i>
                                <span class="title">Records</span></a>
                            </li>
                            <li class="<?php if($page == 'global_settings'){ echo 'active';} ?>">
                                <a href="<?php echo base_url('all_global_settings');?>" class="nav-link nav-toggle"><i class="material-icons">account_balance</i>
                                <span class="title">Global Settings</span></a>
                            </li>
                            <?php } 
                            else
                                {?>
                            
                                <li class="<?php if($page == 'Dashboard'){ echo 'active';} ?>">
                                <a href="<?php echo base_url('frandashboard');?>" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>

                            <li class="<?php if(($page == 'AllStudent') || ($page == 'AddStudent') || ($page == 'editstudent')) { echo 'active';} ?>">
                                <a href="<?php echo base_url('franchiseallstudent');?>" class="nav-link nav-toggle"><i class="material-icons">group</i>
                                <span class="title">Students</span></a>
                            </li>

                            <li class="<?php if($page == 'records'){ echo 'active';} ?>">
                                <a href="<?php echo base_url('records');?>" class="nav-link nav-toggle"><i class="material-icons">event</i>
                                <span class="title">Records</span></a>
                            </li>

                        <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu --> 