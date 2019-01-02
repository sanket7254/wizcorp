 <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Franchiese Profile</div>
                            </div>
                            
                        </div>
                    </div>
                      <?php echo form_hidden('id',$fran_row->id) ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <div class="card card-topline-aqua">
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="profile-userpic">
                                                <?php
                                                            $base = base_url()."uploads/franchise/";
                                                            $path = $base.$fran_row->fran_img;
                                                        ?>
                                                        <img src="<?= $path ?>" width="150" height="150">
                                              </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> <?=$fran_row->fname?></div>
                                            <div class="profile-usertitle-job"> <?=$fran_row->locality?> </div>
                                        </div>
                                       
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                                    
                                        <!-- END SIDEBAR BUTTONS -->
                                    </div>
                                </div>
                                 <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>Address</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row text-center m-t-10">
                                    <div class="col-md-12">
                                        <p><?=$fran_row->address?></p>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="card">
   
                                    <div class="card-body no-padding height-9">
                                        <div class="profile-desc">
                                           <b>Franchise Details</b>
                                        </div>
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                Contact No
                                                <div class="profile-desc-item pull-right"><?=$fran_row->fcontact?></div>
                                            </li>
                                            <li class="list-group-item">
                                                Email
                                                <div class="profile-desc-item pull-right"><?=$fran_row->femail?></div>
                                            </li>
                                             <li class="list-group-item">
                                                Contact Person
                                                <div class="profile-desc-item pull-right"><?=$fran_row->contact_per?></div>
                                            </li>
                                            <li class="list-group-item">
                                                Contact Person Number
                                                <div class="profile-desc-item pull-right"><?=$fran_row->per_con?></div>
                                            </li>
                                            <li class="list-group-item">
                                                Contact Person Email
                                                <div class="profile-desc-item pull-right"><?=$fran_row->per_email?></div>
                                            </li>
                                        </ul>
                                        <!-- <div class="row list-separated profile-stat">
                                            <div class="col-md-4 col-sm-4 col-6">
                                                <div class="uppercase profile-stat-title"> <?php $count = $this->students->num_rows() ?>
                                          <?php echo" $count "; ?> </div>
                                                <div class="uppercase profile-stat-text"> Stdents Added </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
  
                              
                            </div>

                            <div class="profile-content">
                                <div class="row">
                                     <div class="card">
                                         <div class="card-topline-aqua">
                                             <header></header>
                                         </div>
											<div class="white-box">
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
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (count( $student )):
                                                    $i=1;
                                                    
                                                    foreach ($student as $student ) :?>
                                                    <tr>
                                                        <td><?= $i; ?></td>
                                                        <td><?php  
                                                            $base = base_url()."uploads/";
                                                            $path = $base.$student->ppimage;
                                                         ?>
                                                             <img src="<?= $path?>" width="50" height="50">
                                                         </td>
                                                        <td><?= $student->firstname ?></td>
                                                        <td><?= $student->registration_date ?></td>
                                                        <td>
                                                            <?php
                                                                if($student->feedetails=="Paid"){
                                                            ?>

                                                                    <a class="btn btn-success btn-xs"><?= $student->feedetails ?></a>
                                                            <?php
                                                                }else{
                                                            ?>
                                                                    <a class="btn btn-danger btn-xs"><?= $student->feedetails ?></a>
                                                            <?php }?>
                                                        </td>
                                                        <td><?= $student->remaining_fee ?></td>
                                                        
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
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>