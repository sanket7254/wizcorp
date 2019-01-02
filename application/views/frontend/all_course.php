<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
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
                                    <header>Course List</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-6" style="margin-left: 25px;padding-top: 10px;">
                                     <div class="btn-group">
                                         <a href="<?php echo base_url('add_course');?>" id="addRow" class="btn btn-info">
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
                                                        <th>Course Name</th>
                                                        <th>Course Fees</th>
                                                        <th>Commission</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php if (count( $courseall )):
                                                    $i=1;
                                                    
                                                    foreach ($courseall as $courses ) :?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?= $courses->course_name ?></td>
                                                        <td><?= $courses->course_fees ?></td>
                                                        <td><?= $courses->commission ?></td>
                                                        <td>
                                                           <a href="<?php echo base_url();?>editcourse/<?=$courses->course_id?>" class="btn btn-primary btn-xs">
                                                               <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <!-- <a href="<?php echo base_url();?>delete_course/<?=$courses->course_id?>" class="btn btn-danger btn-xs">
                                                                 <i class="fa fa-trash-o "></i>
                                                            </a> -->
                                                            <?php $id=$courses->course_id ?>
                                                            <a id="<?php echo $courses->course_id?>" href="javascript:void(0);" onclick="delete_course(this.id)" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
                                                    <div class="container">
  <br />
  <h3 align="center">How to Import Excel Data into Mysql in Codeigniter</h3>
  <form method="post" id="import_form" enctype="multipart/form-data">
   <p><label>Select Excel File</label>
   <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
   <br />
   <input type="submit" name="import" value="Import" class="btn btn-info" />
  </form>
  <br />
  <div class="table-responsive" id="customer_data">

  </div>
 </div>
                                                </tbody>
                                            </table>
                                            <script type="text/javascript">
                                    function delete_course(id)
                                    {
                                        var url="<?php echo base_url();?>";
                                        swal(
                                        {
                                            title: "Are you sure?",
                                            text: "You really want to delete this course?",
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                        })
                                        .then((willDelete) => 
                                        {
                                                                    
                                            if (willDelete)
                                            {
                                                window.location = url+"delete_course/"+id;
                                                timer: 1500;
                                                swal("Your Course was deleted!",
                                                {
                                                    
                                                    icon: "success",
                                                    timer: 1000,
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

        <script type="text/javascript">
$(document).ready(function(){
 load_data();

 function load_data()
 {
    alert('dfgv');
  $.ajax({
   url:"<?php echo base_url(); ?>excel_import/fetch",
   method:"POST",
   success:function(data){
    $('#customer_data').html(data);
   }
  })
 }

 $('#import_form').on('submit', function(event){
    alert('submit');
  $.ajax({
   url:"<?php echo base_url(); ?>excel_import/import",
   method:"POST",
   data:new FormData(this),
   contentType:false,
   cache:false,
   processData:false,
   success:function(data){
    $('#file').val('');
    load_data();
    alert(data);
   }
  })
 });

});
</script>
