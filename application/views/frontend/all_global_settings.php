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

                    <!-- <?php echo form_hidden('settings',$this->session->userdata("course_id")); ?>
                    <?php echo $this->session->userdata("course_id"); ?> --> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>Global Settings</header>
                                </div>

                                
                                
                                <div class="card-body ">

                                  <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table display product-overview mb-30" id="support_table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No</th>
                                                        <th>Site Name</th>
                                                        <th>Contact</th>
                                                        <th>Email</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php if (count( $setting )):
                                                    $i=1;
                                                    
                                                    foreach ($setting as $settings ) :?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        
                                                        <td><?= $settings->site_name ?></td>
                                                        <td><?= $settings->contact ?></td>
                                                        <td><?= $settings->email ?></td>
                                                        
                                                       <td>
                                                           <a href="<?php echo base_url();?>edit_global_settings/<?=$settings->id?>" class="btn btn-primary btn-xs">
                                                               <i class="fa fa-pencil"></i>
                                                            </a>
                                                            
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
      