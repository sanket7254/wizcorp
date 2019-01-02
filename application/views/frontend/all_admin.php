<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<style type="text/css">
    .swal-button {
  padding: 7px 19px;
  color: #ffff;
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
                <!-- start new student list -->

                    <?php echo form_hidden('course_id',$this->session->userdata("course_id")); ?>
                    <?php echo $this->session->userdata("course_id"); ?> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>Admin List</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6" style="margin-left: 19px;padding-bottom: 10px;">
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('add_blog');?>" id="addRow" class="btn btn-info">
                                             Add New <i class="fa fa-plus" style="color: white;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-body ">

                                  <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table display product-overview mb-30" id="support_table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No</th>
                                                        <th>Profile Pcture</th>
                                                        <th>Admin First Name</th>
                                                        <th>Admin Last Name</th>
                                                        <th>Contact</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php if (count( $admins )):
                                                    $i=1;
                                                    
                                                    foreach ($admins as $adminss ) :?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?php  
                                                            $base = base_url()."uploads/admin/";
                                                            $path = $base.$adminss->admin_img;
                                                         ?>
                                                             <img src="<?= $path?>" width="50" height="50">
                                                        </td>
                                                        <td><?= $adminss->Admin_fname ?></td>
                                                        <td><?= $adminss->Admin_lname ?></td>
                                                        <td><?= $adminss->Admin_cont ?></td>
                                                        <?php 
                                                            $id = $adminss->Admin_id ;
                                                            $image = $adminss->admin_img;             
                                                        ?>
                                                       <td>
                                                           <a href="<?php echo base_url();?>editadmin/<?=$adminss->Admin_id?>" class="btn btn-primary btn-xs">
                                                               <i class="fa fa-pencil"></i>
                                                            </a><!-- 
                                                            <a href="<?php echo base_url();?>delete_admin/<?=$adminss->Admin_id?>" class="btn btn-danger btn-xs">
                                                                 <i class="fa fa-trash-o "></i>
                                                            </a> -->
                                                            <a id="<?php echo $adminss->Admin_id?>" href="javascript:void(0);" onclick="delete_admin(this.id,'<?=$image?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
                                            <script type="text/javascript">
                                    function delete_admin(id,image)
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
                                                window.location = url+"delete_admin/"+id+'/'+image;
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
      