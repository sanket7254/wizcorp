
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
                                <?php echo form_hidden('course_id',$this->session->userdata('course_id')); ?>
                                <?php echo form_open('AdminController/addcourse'); ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Course Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_name" placeholder="Enter Course Name" class="form-control input-height" />
                                                    <?php echo form_error('course_name');?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Course Details
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="course_details" id="textabc" placeholder="Add Course Details" class="form-control-textarea" rows="5" ></textarea>
                                                    <?php echo form_error('course_details');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course Fees
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_fees" placeholder="Enter Course Fees" class="form-control input-height" onkeypress="return isNumberKey(event)"/>
                                                    <?php echo form_error('course_fees');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Commission
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="commission" placeholder="Enter Course Commission" class="form-control input-height" onkeypress="return isNumberKey(event)"/>
                                                    <?php echo form_error('commission');?>
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
            <?php echo form_error(); ?>
            
        </div>
         <script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'textabc' );
        </script>
        <!-- end page container -->