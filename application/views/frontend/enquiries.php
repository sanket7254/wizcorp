
 
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                <!-- start new student list -->

                    <?php echo form_hidden('enquiry_id',$this->session->userdata("enquiry_id")); ?>
                    <?php echo $this->session->userdata("enquiry_id"); ?> 
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
                                
                                <div class="card-body ">

                                  <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table display product-overview mb-30" id="support_table">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No</th>
                                                        <th>Name</th>
                                                        <th>Contact No</th>
                                                        <th>Email</th>
                                                        <th>Subject</th>
                                                        <th>Message</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php if (count( $enquiry )):
                                                    $i=1;
                                                    
                                                    foreach ($enquiry as $enqu ) :?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?=$enqu->name ?></td>
                                                        <td><?=$enqu->contact ?></td>
                                                        <td><?=$enqu->email ?></td>
                                                        <td><?=$enqu->subject ?></td>
                                                        <td><?=$enqu->message ?></td>
                                                        
            
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
      