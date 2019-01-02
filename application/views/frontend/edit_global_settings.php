
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
                                     
                                </div>
                                <div class="card-body" id="bar-parent">
                                  <?php echo form_open('AdminController/edit_global_set'); ?>
                                  <?php echo form_hidden('id',$setting_row->id) ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Site Name
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="site_name" placeholder="enter site name" class="form-control input-height" value="<?php echo set_value('site_name', $setting_row->site_name) ?>" />
                                                    <?php echo form_error('site_name');?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Contact
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="contact" placeholder="enter contact number" class="form-control input-height" onkeypress="return isNumberKey(event)" maxlength="10" value="<?php echo set_value('contact', $setting_row->contact) ?>" />
                                                    <?php echo form_error('contact');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="Email" name="email" placeholder="enter email" class="form-control input-height" value="<?php echo set_value('email', $setting_row->email) ?>"/>
                                                    <?php echo form_error('email');?>
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
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" placeholder="enter address" class="form-control-textarea" rows="5" ><?php echo $setting_row->address ?></textarea>
                                                    <?php echo form_error('address');?>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Facebook link
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="facebook_link" placeholder="enter site name" class="form-control input-height" value="<?php echo set_value('facebook_link', $setting_row->facebook_link) ?>" />
                                                    <?php echo form_error('facebook_link');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Twitter link
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="twitter_link" placeholder="enter site name" class="form-control input-height" value="<?php echo set_value('twitter_link', $setting_row->twitter_link) ?>" />
                                                    <?php echo form_error('twitter_link');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Linked In link
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="linked_link" placeholder="enter site name" class="form-control input-height" value="<?php echo set_value('linked_link', $setting_row->linked_link) ?>" />
                                                    <?php echo form_error('linked_link');?>
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