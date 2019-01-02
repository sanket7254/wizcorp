
    <!-- start page content -->
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
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
                                <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
                                 <?php echo form_hidden('Admin_id',$this->session->userdata('Admin_id')); ?>
                                  <?php echo form_open_multipart('AdminController/addadmin'); ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Admin First Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="Admin_fname" placeholder="enter first name" class="form-control input-height" value="<?php echo set_value('Admin_fname') ?>" />
                                                    <?php echo form_error('Admin_fname');?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Admin Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="Admin_lname" placeholder="enter last name" class="form-control input-height" value="<?php echo set_value(
                                                    'Admin_lname')?>" />
                                                    <?php echo form_error('Admin_lname');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="Email" name="Admin_email" placeholder="enter email" class="form-control input-height" value="<?php echo set_value(
                                                    'Admin_email')?>"/>
                                                    <?php echo form_error('Admin_email');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3"> Contact no
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="tel" name="Admin_cont" placeholder="enter contact no" class="form-control input-height" value="<?php echo set_value(
                                                    'Admin_cont')?>" onkeypress="return isNumberKey(event)" maxlength="10"/>
                                                    <?php echo form_error('Admin_cont');?>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                function isNumberKey(evt)
                                                {
                                                    var charCode = (evt.which) ? evt.which : event.keyCode
                                                    if (!(charCode > 31 && (charCode < 48 || charCode > 57)))
                                                    return false;
                                                    return true;
                                                }
                                            </script>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="Admin_address" placeholder="enter address" class="form-control-textarea" rows="5" value="<?php echo set_value(
                                                    'Admin_address')?>"></textarea>
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
                                                <label class="control-label col-md-3">Type
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="divide">
                                                        <option value="">Select...</option>
                                                        <option value="admin">Admin</option>
                                                    </select>
                                                    <?php echo form_error('divide');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Admin Username
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="uname" placeholder="enter username" class="form-control input-height" value="<?php echo set_value('uname')?>" />
                                                    <?php echo form_error('uname');?>
                                                </div>
                                            </div>
                                             
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Admin Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="password" name="password" placeholder="enter password" class="form-control input-height" value="<?php echo set_value('password')?>"/>
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
                </div>
            </div>
            
        </div>
        <!-- end page container -->