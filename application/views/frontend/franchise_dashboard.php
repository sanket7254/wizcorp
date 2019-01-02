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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<style type="text/css">
    .swal-button {
  padding: 7px 19px;
  border-radius: 2px;
  background-color: #4962B3;
  font-size: 12px;
  border: 1px solid #3e549a;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
}
.swal-footer {
  background-color: rgb(245, 248, 250);
  margin-top: 32px;
  border-top: 1px solid #E9EEF1;
  overflow: hidden;
}
.swal-overlay {
  background-color: #8abe51;
}
</style>
 </head>
 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
    <?php if ($this->session->flashdata('welcome')): ?>
                            <script>
                                swal({
                                    title: "Welcome",
                                    text: "<?php echo $this->session->flashdata('welcome'); ?>",
                                    icon: "success",
                                    timer: 1500,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
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
                        <!-- start language menu -->
                        
                        <!-- end language menu -->
                        <!-- start notification dropdown -->
                        
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->

                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <?php  
                                            $base = base_url()."uploads/franchise/";
                                            $path = $base.$user_row->img;
                                        ?>
                                        <img src="<?= $path ?>" class="img-circle user-img-circle"  alt="User Image" style="height: 30px;width: 30px;"/>
                                <span class="username username-hide-on-mobile"><?php echo form_hidden('fname',$this->session->userdata("fname")); ?>
                                    <?php echo $this->session->userdata("fname"); ?>
                                     </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="<?php echo base_url('myprofile');?>/">
                                        <i class="fa fa-user"></i> Profile </a>
                                </li>
                                <!-- <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li> -->
                                <li>
                                    <a href="<?php echo base_url('certificate');?>">
                                        <i class="fa fa-id-card"></i> Certificate </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('welcomepage');?>">
                                        <i class="fa fa-envelope-open"></i>Welcome letter
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('LoginController/logout');?>">
                                        <i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start color quick setting -->
        
        <!-- end color quick setting -->
        <!-- start page container -->
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
                                            $base = base_url()."uploads/franchise/";
                                            $path = $base.$user_row->img;
                                        ?>
                                        <img src="<?= $path ?>" class="img-circle user-img-circle" alt="User Image" style="height: 76px;width: 200px;"/>
                                    </div>
                                    <div class="pull-left info">
                                        <p> <?php echo form_hidden('fname',$this->session->userdata("fname")); ?>
                                    <?php echo $user_row->first_name ?>
                                        <?php echo $user_row->last_name?>
                                    </p>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a href="<?php echo base_url('frandashboard');?>" class="nav-link nav-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url('franchiseallstudent');?>" class="nav-link nav-toggle"><i class="material-icons">group</i>
                                <span class="title">Students</span></a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo base_url('records');?>" class="nav-link nav-toggle"><i class="material-icons">group</i>
                                <span class="title">Records</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                   <!-- start widget -->
                    <div class="state-overview">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 col-12">
                                  <div class="info-box bg-b-green">
                                    <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                                    <div class="info-box-content">
                                      <span class="info-box-text">Total<br>Students</span>
                                      <span class="info-box-number"><?php $count = $this->students->num_rows() ?>
                                          <?php echo" $count "; ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-xl-3 col-md-6 col-12">
                                    <div class="info-box bg-b-yellow">
                                        <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Commission<br>Earned</span>
                                        <span class="info-box-number">
                                        <?php $count = $this->students->calculate_commission();
                                        if ($count == 0)
                                        {
                                        echo "0";
                                        }
                                        else
                                        {
                                        echo" $count ";
                                        }
                                        ?>
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                
                                <!-- /.col -->
                                
                                <!-- /.col -->
                              </div>
                        </div>
                    

                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery/jquery.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/popper/popper.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/sparkline/jquery.sparkline.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/app.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/layout.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/theme-color.js" ></script>
    <!-- material -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/material/material.min.js"></script>
    <!-- chart js -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/chart-js/Chart.bundle.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/chart-js/utils.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/pages/chart/chartjs/home-data.js" ></script>
    <!-- summernote -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/summernote/summernote.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/pages/summernote/summernote-data.js" ></script>
    <!-- end js include path -->
  </body>

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Aug 2018 12:34:16 GMT -->
</html>