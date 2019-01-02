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
<style type="text/css">
  .abc{
    height: 10px;
    width: 34px;
     background:url('assets/frontend/images/dustbin.png') no-repeat;
    font-size: 0px;
    float: center;
  }
</style>
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                   
                
                    
                     <!-- start new student list -->
                     <?php echo form_hidden('title_id',$this->session->userdata("title_id")); ?>
                      <?php echo form_hidden('img_id',$this->session->userdata('img_id')); ?>
                      <?php echo form_hidden('image_path',$this->session->userdata('image_path')); ?>
                                    <?php echo $this->session->userdata("course_id"); ?> 
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>All Images</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6" style="margin-left: 25px;padding-top: 10px;">
                                     <div class="btn-group">
                                         <a href="<?php echo base_url('store_gallery');?>" id="addRow" class="btn btn-info">
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
                                                        <th>Title</th>
                                                        <th>Created_at</th>
                                                        <th>Action</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php if (count( $imgss )):
                                                    $i=1;
                                                                        

                                                    foreach ($imgss as $imgs ) :
                                                         $new_date = $imgs->created_at;
                                                        $a = explode(" ", $new_date);  ?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?= $imgs->img_title ?></td>
                                                        <td><?= $a[0] ?></td>
                                                    <td>
                                                     
                                                           <a href="<?php echo base_url();?>edit_gallery/<?=$imgs->title_id?>" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                            </a>
                                                         
                                                            <?php $id=$imgs->title_id; ?>
                                                            <a id="<?php echo $id ?>" href="javascript:void(0);" onclick="delete_gallery(this.id)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                                         
                                                                
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
                                    function delete_gallery(id)
                                    {
                                      alert(id);
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
                                                window.location = url+"delete_gallery/"+id;
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
        <!-- start footer -->