
    <!-- start page content -->
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Admin</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Admin</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Basic Information</header>
                                     <button id = "panel-button" 
                                           class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                                           data-upgraded = ",MaterialButton">
                                           <i class = "material-icons">more_vert</i>
                                        </button>
                                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                           data-mdl-for = "panel-button">
                                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                                        </ul>
                                </div>
                                <div class="card-body" id="bar-parent">
                                
                                 <?php echo form_open_multipart('AdminController/editadmin'); ?>
                                 <?php echo form_hidden('Admin_id',$addd_row->Admin_id) ?>
                                 <?php echo form_hidden('admin_img',$addd_row->admin_img) ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Admin First Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="Admin_fname" placeholder="enter first name" class="form-control input-height" value="<?php echo set_value('Admin_fname', $addd_row->Admin_fname) ?>" /> 
                                                <?php echo form_error('Admin_fname');?>
                                            </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Admin Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="Admin_lname" placeholder="enter last name" class="form-control input-height" value="<?php echo set_value('Admin_lname', $addd_row->Admin_lname) ?>" />
                                                    <?php echo form_error('Admin_lname');?>
                                                     </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="Admin_email" placeholder="enter email" class="form-control input-height" value="<?php echo set_value('Admin_email', $addd_row->Admin_email) ?>" />
                                                    <?php echo form_error('Admin_email');?>
                                                     </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3"> Contact NO
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="Admin_cont" placeholder="enter contact no" class="form-control input-height" value="<?php echo set_value('Admin_cont', $addd_row->Admin_cont) ?>" /> 
                                                <?php echo form_error('Admin_cont');?>
                                            </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="Admin_address" placeholder="enter address" class="form-control-textarea" rows="5"><?=$addd_row->Admin_address; ?></textarea>
                                                    <?php echo form_error('Admin_address');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Select Picture
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <?php echo form_upload(['class'=>'form-control','name'=>'userfile','type'=>'file','required']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <label>Profile Picture</label>
                                                </div>

                                                <div class="col-md-5">
                                                        <?php
                                                            $base = base_url()."uploads/admin/";
                                                            $path = $base.$addd_row->admin_img;
                                                        ?>
                                                        <img src="<?= $path ?>" width="100" height="100">
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label class="control-label col-md-3">Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="divide">
                                                        <option value="">Select...</option>
                                                        <option value="admin">Admin</option>
                                                        
                                                    </select>
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Admin Username
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="uname" placeholder="enter username" class="form-control input-height" value="<?php echo set_value('uname', $addd_row->uname) ?>" />
                                                    <?php echo form_error('uname');?>
                                                     </div>
                                            </div>
                                             
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Admin Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="password" placeholder="enter password" class="form-control input-height" value="<?php echo set_value('password', $addd_row->password) ?>"" /> 
                                                <?php echo form_error('password');?>
                                            </div>
                                            </div>
                                             
                                            
                                               
                                        
                                    
                                            <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                     <?php echo form_reset(['class'=>'btn btn-primary','name'=>'reset','value'=>'Reset']),
                                                         form_submit(['class'=>'btn btn-success','name'=>'submit','value'=>'Submit']) ;?>
                                                </div>
                                                </div>
                                             </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error(); ?>
                </div>
            </div>
            
        </div>
        <!-- end page container -->
        