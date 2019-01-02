

 <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title"> Student Profile</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Student Profile</li>
                            </ol>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>Student Profile</header>
                                       <div style="padding-top: 10px; padding-bottom: 10px; float: right;margin-right: 10px;">
                                     <div class="btn-group">
                                         <a href="<?php echo base_url('printpage').'/'.$stud_row->id;?>" id="addRow" class="btn btn-info">
                                             Print <i class="fa fa-print" style="color: white;"></i>
                                        </a>
                                     </div>
                                    </div>
                                    </div>
                                    <?php echo form_hidden('id',$stud_row->id) ?>
                                    <div class="card-body row">
                                
                                                    
                                         
                                        <div class="col-lg-3 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtFirstName" readonly="true">
                                             <label  class = "mdl-textfield__label">Batch No</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtFirstName" readonly="true">
                                             <label class = "mdl-textfield__label">Form No</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtFirstName" readonly="true">
                                             <label class = "mdl-textfield__label">Franchiese Code</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-3 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtFirstName" readonly="true">
                                             <label class = "mdl-textfield__label">Training Start Date</label>
                                          </div>
                                        </div>

                                        <div class="card-head" style="width: 100%;">

                                        <header style="font-size: 15px;">Student Details:</header>
                                     
                                        </div>
                                    <br>
                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" name="txtLasttName" id = "txtLasttName" value="<?php echo set_value('txtLasttName',$stud_row->firstname); ?>" readonly="true">
                                             <label class = "mdl-textfield__label" >First Name</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" name="txtLasttName" id = "txtLasttName" value="<?php echo set_value('txtLasttName',$stud_row->middlename); ?>" readonly="true">
                                             <label class = "mdl-textfield__label" >Last Name</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" name="txtLasttName" id = "txtLasttName" value="<?php echo set_value('txtLasttName',$stud_row->lastname); ?>" readonly="true">
                                             <label class = "mdl-textfield__label" >Last Name</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtLasttName" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->dob); ?>">
                                             <label class = "mdl-textfield__label" >Date of Birth</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtLasttName" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->gender); ?>">
                                             <label class = "mdl-textfield__label" >Gender</label>
                                          </div>
                                        </div>


                                        <div class="card-head" style="width: 100%;">

                                        <header style="font-size: 15px;">Students Educational Details:</header>
                                     
                                        </div>
                                        <br>

                                       <div class="col-lg-6 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->school); ?>">
                                             <label class = "mdl-textfield__label" >School Name</label>
                                          </div>
                                        </div>

                                        <div class="col-lg-6 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->grade); ?>">
                                             <label class = "mdl-textfield__label" >Grade</label>
                                          </div>
                                        </div>
                                        
                                        <div class="col-lg-6 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->location); ?>">
                                             <label class = "mdl-textfield__label" >Location</label>
                                          </div>
                                        </div>
                                        <div class="card-head" style="width: 100%;">

                                        <header style="font-size: 15px;">Father's Details:</header>
                                     
                                        </div>
                                        <br>
                                         <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->ffname); ?>">
                                             <label class = "mdl-textfield__label" >First Name</label>
                                          </div>
                                        </div>
                                         <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->fmname); ?>">
                                             <label class = "mdl-textfield__label" >Middle Name</label>
                                          </div>
                                        </div>
                                         <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->flname); ?>">
                                             <label class = "mdl-textfield__label" >Last Name</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->profession); ?>">
                                             <label class = "mdl-textfield__label" >Profession</label>
                                          </div>
                                        </div>
                                         <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "email" id = "txtemail" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->femail); ?>">
                                             <label class = "mdl-textfield__label" >Email</label>
                                          </div>
                                        </div>
                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->fmnumber); ?>">
                                             <label class = "mdl-textfield__label" >Mobile No</label>
                                          </div>
                                        </div>

                                        <div class="card-head" style="width: 100%;">

                                        <header style="font-size: 15px;">Students Medical Deatils:</header>
                                     
                                        </div>
                                          <?php if(!$stud_row->medical_issue == NULL) {?>
                                            <div class="col-lg-12 p-t-20"> 
                                              <div class = "mdl-textfield mdl-js-textfield txt-full-width">
                                                <textarea class = "mdl-textfield__input" rows =  "4" 
                                                  id = "text7" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->medical_issue); ?>"></textarea>
                                                <label class = "mdl-textfield__label" for = "text7">Medical History </label>
                                              </div>
                                            </div>
                                          <?php } else { ?>

                                            <h4 style="margin-left: 20px;">No Medical History Found.</h4>

                                          <?php } ?>

                                        <div class="card-head" style="width: 100%;">

                                        <header style="font-size: 15px;">Co-curricular Activities:</header>
                                     
                                        </div>
                                        <div class="col-lg-12 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield txt-full-width">
                                             <textarea class = "mdl-textfield__input" rows =  "4" 
                                                id = "text7" readonly="true" value="" ><?= $stud_row->ccactivity?></textarea>
                                             <label class = "mdl-textfield__label" for = "text7">Co-curricular Activities</label>
                                          </div>
                                         </div>

                                          <div class="card-head" style="width: 100%;">

                                        <header style="font-size: 15px;">Address Details:</header>
                                     
                                        </div>
                                          <div class="col-lg-12 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield txt-full-width">
                                             <textarea class = "mdl-textfield__input" rows =  "4" 
                                                id = "text7" readonly="true" value=""><?= $stud_row->ccactivity?></textarea>
                                             <label class = "mdl-textfield__label" for = "text7">Address</label>
                                          </div>
                                         </div>
                                           <div class="card-head" style="width: 100%;">

                                        <header style="font-size: 15px;">Course Details:</header>
                                     
                                        </div>

                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->course_name); ?>">
                                             <label class = "mdl-textfield__label" >Course Name</label>
                                          </div>
                                        </div>

                                        <div class="col-lg-4 p-t-20"> 
                                          <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                             <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" readonly="true" value="<?php echo set_value('txtLasttName',$stud_row->paymenttype); ?>">
                                             <label class = "mdl-textfield__label" >Payment Method</label>
                                          </div>
                                        </div>

                                        <?php if($stud_row->paymenttype == "Net Banking") { ?>
                                          <div class="col-lg-4 p-t-20"> 
                                            <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                              <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" value="<?php echo set_value('txtLasttName',$stud_row->transaction_id); ?>" readonly="true">
                                              <label class = "mdl-textfield__label" >Transaction ID</label>
                                            </div>
                                          </div>
                                        <?php } else { ?>

                                        <?php } ?>

                                        <?php if($stud_row->paymenttype == "Cheque") { ?>
                                          <div class="col-lg-4 p-t-20"> 
                                            <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                              <input class = "mdl-textfield__input" type = "text" id = "txtRollNo" value="<?php echo set_value('txtLasttName',$stud_row->cheaque_no); ?>" readonly="true">
                                              <label class = "mdl-textfield__label" >Cheque No</label>
                                            </div>
                                          </div>
                                        <?php } else { ?>
                                          
                                        <?php } ?>



                                        
                                           
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>