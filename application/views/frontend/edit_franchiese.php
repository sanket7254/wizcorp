
            <!-- start page content -->
             <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Franchiese</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Franchiese</li>
                            </ol>
                        </div>
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

                                  
                                    
                                    <?php echo form_open_multipart('AdminController/editfranchiese'); ?>
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
                                                    <input type="text" name="femail" placeholder="enter franchiese email" class="form-control input-height" value="<?php echo set_value('femail', $fran_row->femail) ?>"  />
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