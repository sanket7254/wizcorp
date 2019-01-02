
            <!-- start page content -->

             <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Franchiese Details:</header>
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
                                     <?php echo form_hidden('user_id',$this->session->userdata('user_id'))?>
                                     <?php echo form_hidden('id',$this->session->userdata('id'))?>
                                    <?php echo form_open_multipart('AdminController/franchiseadd'); ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Franchiese Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="fname" placeholder="enter franchiese name" class="form-control input-height" value="<?php echo set_value('fname')?>" />
                                                    <?php echo form_error('fname')?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Franchiese Contact
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="fcontact" placeholder="enter franchiese Contact" class="form-control input-height" onkeypress="return isNumberKey(event)" maxlength="10" value="<?php echo set_value('fcontact')?>" />
                                                    <?php echo form_error('fcontact')?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Franchiese Email
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="email" name="femail" placeholder="enter franchiese email" class="form-control input-height" value="<?php echo set_value('femail')?>"/>
                                                    <?php echo form_error('femail')?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Person to Contact
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="contact_per" placeholder="enter person to contact" class="form-control input-height" value="<?php echo set_value('contact_per')?>"/>
                                                <?php echo form_error('contact_per')?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3"> Contact no
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="per_con" placeholder="enter person's contact no" class="form-control input-height" onkeypress="return isNumberKey(event)" maxlength="10" value="<?php echo set_value('per_con')?>"/>
                                                    <?php echo form_error('per_con')?>
                                                </div>
                                            </div>
                                            
                                            
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Person's Email
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="email" name="per_email" placeholder="enter person's email " class="form-control input-height" value="<?php echo set_value('per_email')?>"/>
                                                    <?php echo form_error('per_email')?>
                                                </div>
                                            </div>
                                           
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" id="textabc" placeholder="enter address" class="form-control-textarea" rows="5" ><?php echo set_value('address')?>
                                                    </textarea>
                                                    <?php echo form_error('address')?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Locality
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="locality" placeholder="enter locality" class="form-control input-height" value="<?php echo set_value('locality')?>"/>
                                                    <?php echo form_error('locality')?>
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
                                                <label class="control-label col-md-3">Username
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="uname" placeholder="enter user name " class="form-control input-height" value="<?php echo set_value('uname')?>"/>
                                                    <?php echo form_error('uname')?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="password" name="password" placeholder="enter password " class="form-control input-height" value="<?php echo set_value('password')?>"/>
                                                    <?php echo form_error('password')?>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                function isNumberKey(evt)
                                                {
                                                    var charCode = (evt.which) ? evt.which : event.keyCode
                                                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                                                    return false;
                                                    return true;
                                                }
                                            </script>
                                           
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
                      
                       
        </div>
        <script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'textabc' );
        </script>
