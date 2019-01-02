
    <script type="text/javascript">

    function check()
    {
        var dropdown = document.getElementById("feedetail");
        var current_value = dropdown.options[dropdown.selectedIndex].value;
        
        if (current_value == "Paid" ) 
        {
            document.getElementById("mypayment").style.display = "block";
        }
        else 
        {
            document.getElementById("mypayment").style.display = "none";
        }
    }

    function cehq()
    {
        /*alert('This is Cheque');*/
        var dropdown = document.getElementById("paymenttype");
        var current_value = dropdown.options[dropdown.selectedIndex].value;

        if (current_value == "Cheque")
        {
            document.getElementById("chequeno").style.display = "block";
            document.getElementById("netbanking").style.display = "none";
        }
        else if (current_value == "Net Banking")
        {
            document.getElementById("netbanking").style.display = "block";
            document.getElementById("chequeno").style.display = "none";
        }
        else 
        {
            document.getElementById("chequeno").style.display = "none";
            document.getElementById("netbanking").style.display = "none";
        }
    }

    function medical_history()
    {
        var checkBox = document.getElementById("fit").value;
        var text = document.getElementById("text");
        if (checkBox == 1)
        {
            document.getElementById("fit").checked = true;
            text.style.display = "block";
        }
        else
        {
           document.getElementById("not_fit").checked = true;
           text.style.display = "none";
        }
    }

    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
    }

    function start()
    {
        check();
        cehq();
        medical_history();
    }
</script>
    <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Basic Information</header>
                                     <button id = "panel-button" 
                               class = "mdl-button mdl-js-button mdl-button--icon pull-right" 
                               data-upgraded = ",MaterialButton">
                               <i class = "material-icons">more_vert</i>
                            </button>
                            <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                               data-mdl-for = "panel-button">
                               <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                               <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                               <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                            </ul>
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <?php echo form_hidden('user_id',$this->session->userdata('user_id')); ?>
                                    <?php echo form_open_multipart('AdminController/editstudent'); ?>
                                    <?php echo form_hidden('course_id',$this->session->userdata('course_id'));?>
                                    <?php echo form_hidden('id',$d_arr['stud_row']->id);?>
                                    <?php echo form_hidden('ppimage',$d_arr['stud_row']->ppimage);?>

                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        
                                        <div class="form-body">
                                            <b><h3>Student Details</h3></b>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">First Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="firstname" placeholder="Enter First Name" class="form-control input-height" value="<?php echo set_value('firstname',$d_arr['stud_row']->firstname); ?>" />
                                                    <?php echo form_error('firstname');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Middle Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="middlename" placeholder="Enter First Name" class="form-control input-height" value="<?php echo set_value('middlename',$d_arr['stud_row']->middlename); ?>" />
                                                    <?php echo form_error('middlename');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="lastname" placeholder="Enter Last Name" class="form-control input-height" value="<?php echo set_value('lastname',$d_arr['stud_row']->lastname); ?>" />
                                                    <?php echo form_error('lastname');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Date Of Birth
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                        <input class="form-control input-height" size="16" placeholder="Date Of Birth" type="text" value="<?php echo set_value('date_of_birth',$d_arr['stud_row']->dob); ?>" name="date_of_birth">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    </div>
                                                    <input type="hidden" id="dtp_input2" value="" />
                                                    <?php echo form_error('date_of_birth');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Select Profile Picture
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <?php echo form_upload(['class'=>'form-control','name'=>'userfile','type'=>'file']) ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-3">
                                                    <label>Profile Picture</label>
                                                </div>

                                                <div class="col-md-5">
                                                        <?php
                                                            $base = base_url()."uploads/";
                                                            $path = $base.$d_arr['stud_row']->ppimage;
                                                        ?>
                                                        <img src="<?= $path ?>" width="100" height="100">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Gender
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="gender">
                                                        <option value="">Select...</option>
                                                        <option value="Male"<?=$d_arr['stud_row']->gender == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                                                        <option value="Female"<?=$d_arr['stud_row']->gender == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                                                    </select>
                                                    <?php echo form_error('gender');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Registration Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                        <input class="form-control input-height" size="16" placeholder="Registration Date" type="text" name="registration_date" value="<?php echo set_value('registration_date',$d_arr['stud_row']->registration_date); ?>">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    </div>
                                                    <input type="hidden" id="dtp_input2" value="" />
                                                    <?php echo form_error('registration_date');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Batch No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'batch_no','placeholder'=>'Enter Batch','value'=>set_value('batch_no',$d_arr['stud_row']->batch_no)]) ?>
                                                    <?php echo form_error('batch_no');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Co-cirricular Activities
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="ccactivity" placeholder="enter student's co-curricular Activity" class="form-control-textarea" rows="5" /><?=$d_arr['stud_row']->ccactivity;?></textarea>
                                                    <?php echo form_error('ccactivity');?>
                                                </div>
                                            </div>

                            

                                            <b><h3>Education Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Grade
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'grade','placeholder'=>'Enter Grade','value'=>set_value('grade',$d_arr['stud_row']->grade)]) ?>
                                                    <?php echo form_error('grade');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">School Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'school','placeholder'=>'Enter School Name','value'=>set_value('school',$d_arr['stud_row']->school)]) ?>
                                                    <?php echo form_error('school');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Location
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'location','placeholder'=>'Enter School Location','value'=>set_value('location',$d_arr['stud_row']->location)]) ?>
                                                    <?php echo form_error('location');?>
                                                </div>
                                            </div>

                                            <b><h3>Father Details</h3></b>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">First Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="ffirstname"  placeholder="enter first name" class="form-control input-height" value="<?php echo set_value('ffname',$d_arr['stud_row']->ffname); ?>" />
                                                    <?php echo form_error('ffirstname');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Middle Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="fmiddlename"  placeholder="enter middle name" class="form-control input-height" value="<?php echo set_value('fmname',$d_arr['stud_row']->fmname); ?>" />
                                                    <?php echo form_error('fmiddlename');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="flastname"  placeholder="enter last name" class="form-control input-height" value="<?php echo set_value('flname',$d_arr['stud_row']->flname); ?>" />
                                                    <?php echo form_error('flastname');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Profession
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="profession"  placeholder="enter profession" class="form-control input-height" value="<?php echo set_value('profession',$d_arr['stud_row']->profession); ?>" />
                                                    <?php echo form_error('profession');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Mobile No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="fmobileno"  placeholder="enter mobile number" maxlength="10" class="form-control input-height" onkeypress="return isNumberKey(event)" value="<?php echo set_value('fmnumber',$d_arr['stud_row']->fmnumber); ?>" />
                                                    <?php echo form_error('fmobileno');?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="Email" name="femail"  placeholder="enter email" class="form-control input-height" value="<?php echo set_value('femail',$d_arr['stud_row']->femail); ?>" />
                                                    <?php echo form_error('femail');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" placeholder="address" class="form-control-textarea" rows="5"  ><?=$d_arr['stud_row']->address;?></textarea>
                                                    <?php echo form_error('address');?>
                                                </div>
                                            </div>

                                            <b><h3>Course Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="course" value="">
                                                        <option>Select......</option>
                                                       <?php 

                                                            foreach($courses as $row)
                                                            {
                                                                if($d_arr['stud_row']->course_id==$row->course_id)
                                                                {
                                                                    echo '<option value="'.$row->course_id.'" selected>'.$row->course_name.'</option>';
                                                                }
                                                                else
                                                                {
                                                                    echo '<option value="'.$row->course_id.'">'.$row->course_name.'</option>';
                                                                }
                                                                
                                                            }
                                                         ?>
                                                    </select>
                                                    <?php echo form_error('course');?>
                                                </div>
                                            </div>

                                            

                                            <b><h3>Payement Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Fee Details
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="feedetails"id="feedetail" onchange="check(this);">
                                                        <option id="feedetail" onchange="check(this);" value="Paid"<?=$d_arr['stud_row']->feedetails == 'Paid' ? ' selected="selected"' : '';?>>Paid</option>
                                                        <option value="Unpaid"<?=$d_arr['stud_row']->feedetails == 'Unpaid' ? ' selected="selected"' : '';?>>Unpaid</option>
                                                    </select>
                                                    <?php echo form_error('feedetails');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course Fee
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="coursefee"  placeholder="Course Fee" class="form-control input-height addcour" value="<?php echo set_value('course_fee',$d_arr['stud_row']->course_fee); ?>" readonly/>
                                                    <?php echo form_error('coursefee');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Remaining Fee
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="remaining_fee"  placeholder="Remaining Fee" class="form-control input-height addcour" value="<?php echo set_value('remaining_fee',$d_arr['stud_row']->remaining_fee); ?>" readonly/>
                                                    <?php echo form_error('remaining_fee');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Enter Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="paidfee"  placeholder="Enter Amount To Pay" class="form-control input-height" value="<?php set_value('paidfee') ?>" />
                                                    <?php echo form_error('paidfee');?>
                                                </div>
                                            </div>

                                            <div class="form-group row"  id="mypayment" style="display: none;">
                                                <div class="col-md-3">
                                                    <label class="control-label">Payment Method
                                                        <span class="required"> * </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-5 offset-md-3">
                                                    <select id="paymenttype" class="form-control input-height" name="paymenttype" onchange="cehq(this);" style="margin-top: -35px;">
                                                        <option value="Cash"<?=$d_arr['stud_row']->paymenttype == 'Cash' ? ' selected="selected"' : '';?>>Cash</option>
                                                        <option value="Card"<?=$d_arr['stud_row']->paymenttype == 'Card' ? ' selected="selected"' : '';?>>Card</option>
                                                        <option value="Net Banking"<?=$d_arr['stud_row']->paymenttype == 'Net Banking' ? ' selected="selected"' : '';?>>Net Banking</option>
                                                        <option value="Cheque"<?=$d_arr['stud_row']->paymenttype == 'Cheque' ? ' selected="selected"' : '';?>>Cheque</option>
                                                    </select>
                                                    <?php echo form_error('paymenttype');?>
                                                </div>
                                            </div>

                                            <div class="form-group row" id="chequeno" style="display: none;">
                                                <label class="control-label col-md-3">Enter Cheque Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5 offset-md-3">
                                                    <input type="text" name="cheque"  placeholder="Enter Cheque Number" class="form-control input-height" style="margin-top: -35px;" value="<?php echo set_value('cheaque_no',$d_arr['stud_row']->cheaque_no); ?>" />
                                                </div>
                                            </div>

                                            <div class="form-group row" id="netbanking" style="display: none;">
                                                <label class="control-label col-md-3"">Enter Transaction ID
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5 offset-md-3">
                                                    <input type="text" name="netbanking"  placeholder="Enter Transaction ID" class="form-control input-height" style="margin-top: -35px;" value="<?php echo set_value('transaction_id',$d_arr['stud_row']->transaction_id); ?>" /> </div>
                                            </div>

                                            <!-- <div class="form-group row"  id="mypayment" style="display: none;">
                                                <div class="col-md-3">
                                                    <label class="control-label">Payment Method
                                                        <span class="required"> * </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-5 offset-md-3">
                                                    <select id="paymenttype" class="form-control input-height" name="paymenttype" onchange="cehq(this);" style="margin-top: -35px;">
                                                        <option value="Cash"<?=$d_arr['stud_row']->paymenttype == 'Cash' ? ' selected="selected"' : '';?>>Cash</option>
                                                        <option value="Card"<?=$d_arr['stud_row']->paymenttype == 'Card' ? ' selected="selected"' : '';?>>Card</option>
                                                        <option value="Net Banking"<?=$d_arr['stud_row']->paymenttype == 'Net Banking' ? ' selected="selected"' : '';?>>Net Banking</option>
                                                        <option value="Cheque"<?=$d_arr['stud_row']->paymenttype == 'Cheque' ? ' selected="selected"' : '';?>>Cheque</option>
                                                    </select>
                                                </div>
                                            </div> -->



                                            <b><h3>Document Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Proof of Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="ageproof">
                                                        <option value="">Select...</option>
                                                        <option value="Birth Certificate"<?=$d_arr['stud_row']->ageproof == 'Birth Certificate' ? ' selected="selected"' : '';?>>Birth Certificate</option>
                                                        <option value="Pan Card"<?=$d_arr['stud_row']->ageproof == 'Pan Card' ? ' selected="selected"' : '';?>>Pan Card</option>
                                                        <option value="Adhar Crad"<?=$d_arr['stud_row']->ageproof == 'Adhar Crad' ? ' selected="selected"' : '';?>>Adhar Crad</option>
                                                    </select>
                                                    <?php echo form_error('ageproof');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Edit Ageproof Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="ageproofno"  placeholder="enter last name" class="form-control input-height" value="<?php echo set_value('ageproofno',$d_arr['stud_row']->ageproofno); ?>" />
                                                    <?php echo form_error('ageproofno');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Id Proof
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="idproof">
                                                        <option value="">Select...</option>
                                                        <option value="Voter ID"<?=$d_arr['stud_row']->idproof == 'Voter ID' ? ' selected="selected"' : '';?>>Voter ID</option>
                                                        <option value="Pan Card"<?=$d_arr['stud_row']->idproof == 'Pan Card' ? ' selected="selected"' : '';?>>Pan Card</option>
                                                        <option value="Adhar Crad"<?=$d_arr['stud_row']->idproof == 'Adhar Crad' ? ' selected="selected"' : '';?>>Adhar Crad</option>
                                                    </select>
                                                    <?php echo form_error('idproof');?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Edit IDproof Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="idproofno"  placeholder="enter last name" class="form-control input-height" value="<?php echo set_value('idproofno',$d_arr['stud_row']->idproofno); ?>" />
                                                    <?php echo form_error('idproofno');?>
                                                </div>
                                            </div>

                                            <label>
                                                <input type="checkbox" name="fit" id="fit" value="<?php echo set_value('check_box',$d_arr['stud_row']->check_box); ?>" onclick="medical_history(this);">&nbsp;Medical Deficiency/Allergy/Illness/Injury/Physical Impairment or any other Health concern.<br>
                                            </label>

                                            <div class="form-group row" id="text" style="display: none;margin-top: 15px;">
                                                <label class="control-label col-md-3">Please Specify
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5 offset-md-3" style="margin-top: -35px;">
                                                    <textarea name="medicaldetails" placeholder="Enter Medical History" class="form-control-textarea" rows="5" ></textarea>
                                                </div>
                                            </div>

                                            <label style="margin-top: 15px;">
                                                <input type="checkbox" name="not_fit" id="not_fit" value="0">&nbsp;I hereby declare that my child is Medically Fit and is not suffering from any Health Issues.<br>
                                            </label>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                     <?php echo form_reset(['class'=>'btn btn-primary','name'=>'reset','value'=>'Reset']),
                                                         form_submit(['class'=>'btn btn-success','name'=>'submit','value'=>'Submit']) ;?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <?php if($error=$this->session->flashdata('error')):?>
                                    <div>
                                        <?php echo $error?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php echo form_error(); ?>
                    </div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
    