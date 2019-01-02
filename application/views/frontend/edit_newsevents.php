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
                                <?php echo form_open_multipart('AdminController/editnewsevents'); ?>
                                 <?php echo form_hidden('news_id',$news_row->news_id) ?>
                               <?php echo form_hidden('news_img',$news_row->news_img) ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Title
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="news_title" placeholder="enter title" class="form-control input-height" value="<?php echo set_value('news_title', $news_row->news_title) ?>"/> 
                                                     <?php echo form_error('news_title');?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Add Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="news_desc" placeholder="enter description" class="form-control-textarea" id="textabc" rows="5" ><?= $news_row->news_desc; ?></textarea>
                                                    <?php echo form_error('news_desc');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Select Picture
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <?php echo form_upload(['class'=>'form-control','name'=>'userfile','type'=>'file']) ?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <?php if (isset($upload_error)) echo $upload_error; ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <label>News Picture</label>
                                                </div>

                                                <div class="col-md-5">
                                                        <?php
                                                            $base = base_url()."uploads/news/";
                                                            $path = $base.$news_row->news_img;
                                                        ?>
                                                        <img src="<?= $path ?>" width="100" height="100">
                                                </div>
                                            </div>
                                    
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
                        <?php echo form_error(); ?>
                    </div>
                </div>
            </div>
            
        </div>
        <script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'textabc' );
        </script>
        <!-- end page container -->