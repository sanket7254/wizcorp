<?php if($user_row->divide == "admin") { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<style type="text/css">
    .swal-button {
  padding: 7px 19px;
  color: #ffff;
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
<?php if ($this->session->flashdata('error')): ?>
                            <script>
                                swal({
                                    title: "Done",
                                    text: "<?php echo $this->session->flashdata('error'); ?>",
                                    icon: "success",
                                    timer: 1500,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
    <!-- start page content -->
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Edit Profile</header>
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
                                
                                 <?php echo form_open('AdminController/update_profile'); ?>
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
<?php } else { ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<style type="text/css">
    .swal-button {
  padding: 7px 19px;
  color: #ffff;
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
<?php if ($this->session->flashdata('error')): ?>
                            <script>
                                swal({
                                    title: "Done",
                                    text: "<?php echo $this->session->flashdata('error'); ?>",
                                    icon: "success",
                                    timer: 1500,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
            <!-- start page content -->
             <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Edit Profile</header>
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
                                    <?php echo form_open('AdminController/update_profile'); ?>
                                    <?php echo form_hidden('id',$fran_row->id) ?>
                                    <?php echo form_hidden('fran_img',$fran_row->fran_img) ?>
                                    <input type="hidden" name="fran_img" value="<?=$fran_row->fran_img?>">
                                      
                                
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Franchiese Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="fname" placeholder="enter franchiese name" class="form-control input-height" value="<?php echo set_value('fname', $fran_row->fname) ?>" /> 
                                                    <?php echo form_error('fname');?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Franchiese Contact
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="fcontact" placeholder="enter franchiese Contact" maxlength="10" class="form-control input-height" value="<?php echo set_value('fcontact', $fran_row->fcontact) ?>"/>
                                                    <?php echo form_error('fcontact');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Franchiese Email
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="Email" name="femail" placeholder="enter franchiese email" class="form-control input-height" value="<?php echo set_value('femail', $fran_row->femail) ?>"  />
                                                    <?php echo form_error('femail');?> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Person to Contact
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="contact_per" placeholder="enter person to contact" class="form-control input-height" value="<?php echo set_value('contact_per', $fran_row->contact_per) ?>"/>
                                                    <?php echo form_error('contact_per');?> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3"> Contact no
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="per_con" placeholder="enter person's contact no" maxlength="10" class="form-control input-height" value="<?php echo set_value('per_con', $fran_row->per_con) ?>" /> 
                                                <?php echo form_error('per_con');?></div>
                                            </div>
                                            
                                            
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Person's Email
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="per_email" placeholder="enter person's email " class="form-control input-height" value="<?php echo set_value('per_email', $fran_row->per_email) ?>"/>
                                                    <?php echo form_error('per_email');?> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Locality
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="locality" placeholder="enter locality" class="form-control input-height" value="<?php echo set_value('locality', $fran_row->locality) ?>"/>
                                                    <?php echo form_error('locality');?> </div>
                                            </div>
                                           
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" id="textabc" placeholder="enter address" class="form-control-textarea" rows="5"><?= $fran_row->address; ?></textarea>
                                                    <?php echo form_error('address');?>
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
                                                            $base = base_url()."uploads/franchise/";
                                                            $path = $base.$fran_row->fran_img;
                                                        ?>
                                                        <img src="<?= $path ?>" width="100" height="100">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Franchise Username
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="uname" placeholder="enter username" class="form-control input-height" value="<?php echo set_value('uname', $fran_row->uname) ?>" /> 
                                                <?php echo form_error('uname');?></div>
                                            </div>
                                             
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Franchise Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="password" placeholder="enter password" class="form-control input-height" value="<?php echo set_value('password', $fran_row->password) ?>"" /> 
                                                    <?php echo form_error('password');?></div>
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
            <!-- end page content -->
            <!-- start chat sidebar -->
<script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'textabc' );
        </script>
        <!-- end page container -->
<?php } ?>