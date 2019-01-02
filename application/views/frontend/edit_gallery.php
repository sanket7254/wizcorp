<!-- start page content -->
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Gallery</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Gallery</li>
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
                                <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
                                <?php echo form_open_multipart('AdminController/update_gallery'); ?>
                                <?php echo form_hidden ('title_id',$this->session->userdata('title_id'))?>
                                <?php echo form_hidden('title_id',$img_row->title_id)?>
                                <?php echo form_hidden('img_id',$this->session->userdata('img_id')); ?>
                                <?php echo form_hidden('image_old_path',$this->session->userdata('image_old_path')) ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Title
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="img_title" placeholder="enter title" class="form-control input-height" value="<?php echo set_value('img_title',$img_row->img_title); ?>" /> 
                                                <?php echo form_error('img_title');?></div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Add Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="img_desc" placeholder="enter description" class="form-control-textarea" rows="5" value="<?php echo set_value('img_title',$img_row->img_title); ?>"><?= $img_row->img_desc; ?></textarea>
                                                    <?php echo form_error('img_desc');?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Select Picture
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <input type="file" class="form-control" name="files[]" multiple/>
                                                    </div>
                                                </div>
                                            </div>           
                                    

                                                    <?php foreach ($gall_img as $gall_image):?>
                                                            <?php
                                                                    $base= base_url();
                                                                    $img=$gall_image->image_path;
                                                                    $path= $base.$img;

                                                                                     
                                                             ?>  

                                                             <a href="<?php echo base_url();?>delete_images/<?=$img_row->title_id?>/<?=$gall_image->img_id?>" class="btn btn-danger btn-xs">
                                                             <i class="fa fa-trash-o "></i></a>  
                                                        
                                                            <img src="<?= $path ?>" width="150" height="150">
                                                            
                                                    <?php endforeach; ?>

                                            <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <?php echo form_reset(['class'=>'btn btn-primary','name'=>'reset','value'=>'Reset']),
                                                    form_submit(['class'=>'btn btn-success','name'=>'submit','value'=>'Submit']) ;
                                                        ?>  
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