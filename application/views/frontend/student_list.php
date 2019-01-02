<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<style type="text/css">
    .swal-button {
  padding: 7px 19px;
  border-radius: 2px;
  color: #ffff;
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
<?php if ($this->session->flashdata('error')): ?>
                            <script>
                                swal({
                                    title: "Done",
                                    text: "<?php echo $this->session->flashdata('error'); ?>",
                                    icon: "success",
                                    timer: 1500,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
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

                                 <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6" style="margin-left: 25px;padding-top: 10px;">
                                     <div class="btn-group">
                                         <a href="<?php echo base_url('AddStudent');?>" id="addRow" class="btn btn-info">
                                             Add New <i class="fa fa-plus" style="color: white;"></i>
                                        </a>
                                     </div>
                                 </div>
                             </div>
                             <!-- <div class="row">
                                <div class="col-md-6 text-right">
                                    <?php $status= $this->session->flashdata('status'); ?>
                                    <a class="btn <?=$status?>">
                                        <?php echo $this->session->flashdata('error'); ?> </a>
                                </div>
                                <div class="col-md-6 text-left">
                                
                                </div>
                        </div> -->
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
                                                        <th>Remaining Fee</th>
                                                        <th>Action</th>
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
                                                        <td><?= $students->remaining_fee ?>
                                                        <!-- <?php if($students->remaining_fee == 0) { ?>
                                                            <a style="margin-left: 36px;" href="<?php echo base_url();?>payment/<?=$students->id?>" class="btn btn-warning btn-xs">Pay Fees</a>
                                                        <?php } 
                                                        else {?>
                                                            <a style="margin-left: 7px;" href="<?php echo base_url();?>payment/<?=$students->student_id?>" class="btn btn-warning btn-xs">Pay Fees</a>
                                                            <?php } ?> -->

                                                        </td>


                                                        <?php 
                                                            $id = $students->id ;
                                                            $image = $students->ppimage;             
                                                        ?>
                                                        <td>
                                                            <a href="<?php echo base_url();?>editstudent/<?=$students->id?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

                                                            <a id="<?php echo $students->id?>" href="javascript:void(0);" onclick="delete_student(this.id,'<?=$image?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                                                        
                                                            <a href="<?php echo base_url();?>viewprofile/<?=$students->id?>" class="btn btn-primary btn-xs"><i class="fa fa-eye-slash"></i></a>
                                                        </td>
                                                                                                  
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
                                                    timer: 1500,
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