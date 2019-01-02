
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                    </div>
                   <!-- start widget -->
                     <!-- start new student list -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>Records</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <?php echo form_open('AdminController/record_get'); ?>
                                <form action="#" id="form_sample_1" class="form-horizontal">
                                <div class="form-group row" style="margin-left: 15px;margin-top: 25px;">
                                    <label class="control-label col-md-3">From Date
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input class="form-control input-height" size="16" placeholder="From Date" type="text" value="" name="from_date">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input2" value="" />
                                    </div>
                                </div>

                                <div class="form-group row" style="margin-left: 15px;margin-top: 25px;">
                                    <label class="control-label col-md-3">To Date
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                            <input class="form-control input-height" size="16" placeholder="To Date" type="text" value="" name="to_date">
                                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        </div>
                                        <input type="hidden" id="dtp_input2" value="" />
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                <script type="text/javascript">
                                    function delete_student(id,ppimage)
                                    {
                                        var url="<?php echo base_url();?>";
                                        swal(
                                        {
                                            title: "Are you sure?",
                                            text: "You really want to delete this student?",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                        })
                                        .then((willDelete) => 
                                        {
                                                                    
                                            if (willDelete)
                                            {
                                                window.location = url+"deletestudent/"+id+'/'+ppimage;
                                                swal("Your file is deleted!",
                                                {
                                                    icon: "success",
                                                });
                                            }
                                            else
                                            {
                                                swal("Your file is safe!");
                                            }
                                        });
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <!-- end new student list -->
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery/jquery.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/popper/popper.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/sparkline/jquery.sparkline.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/app.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/layout.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/theme-color.js" ></script>
    <!-- material -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/material/material.min.js"></script>
    <!-- chart js -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/chart-js/Chart.bundle.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/chart-js/utils.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/pages/chart/chartjs/home-data.js" ></script>
    <!-- summernote -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/summernote/summernote.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/pages/summernote/summernote-data.js" ></script>
    <!-- end js include path -->
  </body>

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Aug 2018 12:34:16 GMT -->
</html>