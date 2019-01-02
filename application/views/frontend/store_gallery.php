<!-- start page content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<style type="text/css">
    .swal-button {
  padding: 7px 19px;
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
<?php if ($this->session->flashdata('message')): ?>
                            <script>
                                swal({
                                    title: "Warning",
                                    text: "<?php echo $this->session->flashdata('message'); ?>",
                                    icon: "warning",
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Add Gallery</header>
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
                                <?php echo form_open_multipart('AdminController/store_gallery'); ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Title
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="img_title" placeholder="enter title" class="form-control input-height" value="<?php echo set_value('img_title')?>" />
                                                    <?php echo form_error('img_title')?>
                                                </div>
                                            </div>
                                             <div class="form-group row">
                                                <label class="control-label col-md-3">Add Description
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="img_desc" placeholder="enter description" class="form-control-textarea" id="textabc" rows="5" >
                                                        <?php echo set_value('img_desc') ?>
                                                    </textarea>
                                                    <?php echo form_error('img_desc')?>
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
                                                <div>
                                                    <?php if (isset($upload_error)) echo $upload_error; ?>
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
                    </div>
                </div>
            </div>
            
        </div>
        <script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'textabc' );
        </script>
        <!-- end page container -->