
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Add Student</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Student</li>
                            </ol>
                        </div>
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
                                    <?php echo $this->session->userdata('user_id'); ?>
                                    <?php echo form_hidden('course_id',$this->session->userdata('course_id'));?>
                                    <?php echo form_hidden('fname',$this->session->userdata("fname")); ?>
                                    <?php echo $this->session->userdata("fname"); ?>
                                    <?php echo form_open_multipart('AdminController/addstudent'); ?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">

                                            <b><h3>Student Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">First Name
                                                        <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'firstname','placeholder'=>'Enter First Name','value'=>set_value('firstname')]) ?>
                                                    <span><?php echo form_error('firstname');?></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Middle Name
                                                        <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'middlename','placeholder'=>'Enter Middle Name','value'=>set_value('middlename')]) ?><span><?php echo form_error('middlename');?></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'lastname','placeholder'=>'Enter Last Name','value'=>set_value('lastname')]) ?><span><?php echo form_error('lastname');?></span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Date Of Birth
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                        <input class="form-control input-height" size="16" placeholder="Date Of Birth" type="text" value="" name="date_of_birth">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    </div>
                                                    <input type="hidden" id="dtp_input2" value="" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Select Picture
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <?php echo form_upload(['class'=>'form-control','name'=>'userfile','type'=>'file','required']) ?>
                                                    </div>
                                                </div>
                                            </div>                                            

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Gender
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="gender">
                                                        <option value="">Select...</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Registration Date
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                        <input class="form-control input-height" size="16" placeholder="Registration Date" type="text" value="" name="registration_date" required>
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                    </div>
                                                    <input type="hidden" id="dtp_input2" value="" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Co-cirricular Activities
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="ccactivity" placeholder="Enter Student's Co-Curricular Activity" class="form-control-textarea" rows="5" ></textarea>
                                                </div>
                                            </div>

                                            <b><h3>Education Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Grade
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'grade','placeholder'=>'Enter Grade','value'=>set_value('grade')]) ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">School Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'school','placeholder'=>'Enter School Name','value'=>set_value('school')]) ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Location
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'location','placeholder'=>'Enter School Location','value'=>set_value('Location')]) ?>
                                                </div>
                                            </div>

                                            <b><h3>Father Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">First Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <?php echo form_input(['class'=>'form-control input-height','name'=>'ffirstname','placeholder'=>'Enter First Name','value'=>set_value('ffirstname')]) ?>
                                                    <span><?php echo form_error('ffirstname');?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Middle Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="fmiddlename"  placeholder="Enter Middle Name" class="form-control input-height"  required /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="flastname"  placeholder="Enter Last Name" class="form-control input-height" value="<?php set_value('flastname') ?>" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Profession
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="profession"  placeholder="Enter Profession" class="form-control input-height" required /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Password
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="password"  placeholder="Enter Password" class="form-control input-height" required /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Mobile No
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="fmobileno"  placeholder="Enter Mobile Number" class="form-control input-height" /> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Email
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="femail"  placeholder="Enter Email" class="form-control input-height" /> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Address
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" placeholder="Address" class="form-control-textarea" rows="5" ></textarea>
                                                </div>
                                            </div>

                                            <b><h3>Course Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select onchange="get_course(this);" class="form-control input-height get_course" name="course" id="course_get">
                                                        <option value="..">Select......</option>
                                                       <?php

                                                        foreach($courses as $row)
                                                            {
                                                                echo '<option value="'.$row->course_id.'">'.$row->course_name.'</option>';
                                                            }
                                                         ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course Fees
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_fees"  placeholder="Course Fees" class="form-control input-height" id="c_fee"/> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course Commission
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="course_commission"  placeholder="Course Commission" class="form-control input-height" id="c_comm" /> </div>
                                            </div>

                                            <b><h3>Payment Details</h3></b>

                                            <script type="text/javascript">

                                                function check()
                                                {
                                                    var dropdown = document.getElementById("feedetail");
                                                    var current_value = dropdown.options[dropdown.selectedIndex].value;

                                                    if (current_value == "Paid")
                                                    {
                                                        document.getElementById("mypayment").style.display = "block";
                                                    }
                                                    else 
                                                    {
                                                        document.getElementById("mypayment").style.display = "none";
                                                        document.getElementById("chequeno").style.display = "none";
                                                        document.getElementById("netbanking").style.display = "none";
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

                                                function get_course()
                                                {
                                                    alert('In course');
                                                    var course_id=$("#course_get").val();
                                                    alert(course_id);
                                                    var BASE_URL = "<?php echo base_url();?>";
                                                    $.ajax(
                                                    {
                                                        url: BASE_URL+'AdminController/get_course',
                                                        type: 'POST',
                                                        data:  { 'course_id': course_id},
                                                        dataType:'json',
                                                        success: function(response,status,a) 
                                                        {

                                                            var course_fees=response.json.course_fees;
                                                            var commission=response.json.commission;
                                                            document.getElementById("c_fee").value=course_fees;
                                                            document.getElementById("c_comm").value=commission;
                                                            document.getElementById("amount_fee").value=course_fees;
                                                        }
                                                    });
                                                }

                                                function medical_history()
                                                {
                                                    var checkBox = document.getElementById("fit");
                                                    var text = document.getElementById("text");
                                                    if (checkBox.checked == true)
                                                    {
                                                        text.style.display = "block";
                                                    }
                                                    else
                                                    {
                                                       text.style.display = "none";
                                                    }
                                                }
                                            </script>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Fee Details
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="feedetails" id="feedetail" onchange="check(this);">
                                                        <option value="">Select...</option>
                                                        <option value="Paid" id="Paid">Paid</option>
                                                        <option value="Unpaid">Unpaid</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Enter Fee Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="coursefee"  placeholder="Enter Fee Amount" class="form-control input-height addcour" id="amount_fee" /> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Enter Paid Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="paidfee"  placeholder="Enter Paid Amount" class="form-control input-height" /> </div>
                                            </div>

                                            <div class="row" id="mypayment" style="display: none;">
                                                <div class="col-md-3">
                                                    <label class="control-label">Payment Method
                                                    <span class="required"> * </span>
                                                    </label>
                                                </div>
                                                <div class="col-md-5 offset-md-3">
                                                    <select id="paymenttype" class="form-control input-height" name="paymenttype" onchange="cehq(this);" style="margin-top: -35px;">
                                                        <option value="">Select...</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Card">Card</option>
                                                        <option value="Net Banking" id="Net Banking">Net Banking</option>
                                                        <option value="Cheque" id="Cheque">Cheque</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row" id="chequeno" style="display: none;">
                                                <label class="control-label col-md-3" style="margin-top: 15px;">Enter Cheque Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5 offset-md-3">
                                                    <input type="text" name="cheque"  placeholder="Enter Cheque Number" class="form-control input-height" style="margin-top: -35px;"/> </div>
                                            </div>

                                            <div class="form-group row" id="netbanking" style="display: none;">
                                                <label class="control-label col-md-3" style="margin-top: 15px;">Enter Transaction ID
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5 offset-md-3">
                                                    <input type="text" name="netbanking"  placeholder="Enter Transaction ID" class="form-control input-height" style="margin-top: -35px;"/> </div>
                                            </div>

                                            <b><h3>Documents</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Proof of Age
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="ageproof">
                                                        <option value="">Select...</option>
                                                        <option value="Birth Certificate">Birth Certificate</option>
                                                        <option value="Pan Card">Pan Card</option>
                                                        <option value="Adhar Crad">Adhar Crad</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Enter Ageproof Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="ageproofno"  placeholder="Enter Ageproof Number" class="form-control input-height" /> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Id Proof
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="idproof">
                                                        <option value="">Select...</option>
                                                        <option value="Voter ID">Voter ID</option>
                                                        <option value="Pan Card">Pan Card</option>
                                                        <option value="Adhar Crad">Adhar Crad</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Enter IDproof Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="idproofno"  placeholder="Enter IDproof Number" class="form-control input-height" />
                                                </div>
                                            </div>

                                            <b><h3>Medical History</h3></b>

                                            <label>
                                                <input type="checkbox" name="fit" id="fit" value="1" onclick="medical_history(this);">&nbsp;Medical Deficiency/Allergy/Illness/Injury/Physical Impairment or any other Health concern.<br>
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
                                                <input type="checkbox" name="not_fit" value="0">&nbsp;I hereby declare that my child is Medically Fit and is not suffering from any Health Issues.<br>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                  
        </div>
               </div>

