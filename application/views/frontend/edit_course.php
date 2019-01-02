
    <!-- start page content -->
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Course</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit course</li>
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
                                 <?php echo form_open('AdminController/editcourse'); ?>
                                      <?php echo form_hidden('course_id',$cour_row->course_id) ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Course Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_name" placeholder="enter course name" class="form-control input-height" value="<?php echo set_value('course_name', $cour_row->course_name) ?>" />
                                                <?php echo form_error('course_name');?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Course Details
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="course_details" placeholder="add course details" class="form-control-textarea" id="textabc" rows="5" ><?= $cour_row->course_details?></textarea>
                                                <?php echo form_error('course_details');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course Fees
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_fees" placeholder="enter course fees" class="form-control input-height" value="<?php echo set_value('course_fees', $cour_row->course_fees) ?>"  />
                                                <?php echo form_error('course_fees');?>
                                                </div>
                                            </div>
                                             
                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course Fees
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="commission" placeholder="enter course fees" class="form-control input-height" value="<?php echo set_value('commission', $cour_row->commission) ?>"  />
                                                <?php echo form_error('commission');?>
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
            
            <?php echo form_error(); ?>
        </div>
         <script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'textabc' );
        </script>
        <!-- end page container -->
        <!-- start footer -->