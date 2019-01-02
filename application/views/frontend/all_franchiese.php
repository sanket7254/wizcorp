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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-box">
                                                    <div class="card-head">
                                                        <header>All Franchiese List</header>
                                                        <div class="tools">
                                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-6">
                                                                <div class="btn-group">
                                                                    <a href="<?php echo base_url('add_franchiese');?>" id="addRow" class="btn btn-info" style="margin-bottom: 15px;">
                                                                        Add New <i style="color: white;padding-left: 4px;" class="fa fa-plus"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-wrap">
                                                            <div class="table-responsive">
                                                        <table class="table display product-overview mb-30">
                                                            <thead>
                                                                <tr>
                                                                    
                                                                    <th> Sr. No</th>
                                                                    <th>Franchise Image</th>
                                                                    <th> Franchiese Name </th>
                                                                    <th> Franchiese Contact </th>
                                                                    <th> Franchiese Email </th>
                                                                    <th style="text-align: center;">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                    <?php if (count( $franchiese)):
                                                                         $i=1;?>

                                                                        <?php foreach ($franchiese as $franchieses ) :?>
                                                                            <tr>
                                                                                <td><?= $i; ?></td>
                                                                                <td>
                                                                                    <?php  
                                                                                        $base = base_url()."uploads/franchise/";
                                                                                        $path = $base.$franchieses->fran_img;
                                                                                    ?>
                                                                                    <img src="<?= $path?>" width="50" height="50">
                                                                                </td>
                                                                                <td>
                                                                                    <?= $franchieses->fname ?>
                                                                                </td>
                                                                                <td><?= $franchieses->fcontact ?></td>
                                                                                <td>
                                                                                    <?= $franchieses->femail ?>
                                                                                </td>

                                                                                <?php 
                                                                                    $id = $franchieses->id ;
                                                                                    $image = $franchieses->fran_img;             
                                                                                ?>

                                                                                <td>
                                                                                    <a href="<?php echo base_url();?>editfranchiese/<?=$franchieses->id?>" class="btn btn-primary btn-xs">
                                                                                        <i class="fa fa-pencil"></i>
                                                                                    </a>

                                                                                    <a id="<?php echo $franchieses->id?>" href="javascript:void(0);" onclick="delete_franchiese(this.id,'<?=$image?>')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                                                                    <a href="<?php echo base_url('idcard');?>/<?=$franchieses->id?>" class="btn btn-primary btn-xs">
                                                                                        <i class="fa fa-id-card "></i>
                                                                                    </a>
                                                                                     <a href="<?php echo base_url('franchiese_view');?>/<?=$franchieses->id?>" class="btn btn-primary btn-xs">
                                                                                        <i class="fa fa-eye-slash "></i>
                                                                                    </a>
                                                                             </td>

                                                                        </tr>
                                                                        <?php $i++; endforeach; ?>

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
                                    function delete_franchiese(id,image)
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
                                                window.location = url+"delete_franchiese/"+id+'/'+image;
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
                                    </div>
                                   
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
           
        </div>
        <!-- end page container -->
