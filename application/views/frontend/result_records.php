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
                                    <header>Student List</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table display product-overview mb-30" id="support_table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No</th>
                                                        <center><th>DP</th></center>
                                                        <th>First Name</th>
                                                        <th>Date</th>
                                                        <th>Fee Detils</th>
                                                        <th>Course Name</th>
                                                        <th>Commission</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (count( $student )):
                                                    $i=1;
                                                    
                                                    foreach ($student as $students ) : ?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?php  
                                                            $base = base_url()."uploads/";
                                                            $path = $base.$students->ppimage;
                                                         ?>
                                                             <img src="<?= $path?>" width="50" height="50">
                                                         </td>
                                                        <td><?= $students->firstname ?></td>
                                                        <td><?= $students->registration_date ?></td>
                                                        <td>
                                                            <?php
                                                                if($students->feedetails=="Paid"){
                                                            ?>

                                                                    <a class="btn btn-success btn-xs"><?= $students->feedetails ?></a>
                                                            <?php
                                                                }else{
                                                            ?>
                                                                    <a class="btn btn-danger btn-xs"><?= $students->feedetails ?></a>
                                                            <?php }?>
                                                        </td>
                                                        <td><?= $students->course_name ?></td>
                                                        <td><?= $students->commission ?></td>
                                                                                                  
                                                    </tr>
                                                    <?php 
                                                    $i++;
                                                    endforeach; ?>

                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                No Records Found.
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                                <b>Total Commission : <?= $sum ?></b>
                                            </table>
                                        </div>
                                    </div>  
                                </div>
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