
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
        alert(checkBox);
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
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Edit Student</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="#">Student</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Student</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Payment Information</header>
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
                                    <?php echo form_open('AdminController/paymentdone'); ?>
                                    <?php echo form_hidden('course_id',$this->session->userdata('course_id'));?>
                                    <?php echo form_hidden('id',$d_arr['stud_row']->id)?>
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        
                                        <div class="form-body">

                                            <b><h3>Course Details</h3></b>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="course">
                                                        <option>Select......</option>
                                                       <?php 

                                                            foreach($courses as $row)
                                                            {
                                                                if($d_ar['pay_row']->course_id==$row->course_id)
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
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Course Fee
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="coursefee"  placeholder="Enter Fee Amount" class="form-control input-height addcour" value="<?php echo set_value('course_fee',$d_ar['pay_row']->course_fee); ?>" readonly/> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Remaining Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="remaining_fee"  placeholder="Enter Paid Amount" class="form-control input-height" value="<?php echo set_value('remaining_fee',$d_ar['pay_row']->remaining_fee); ?>" readonly/> </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Enter Amount
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="paidfee"  placeholder="Enter Paid Amount" class="form-control input-height" value="<?php echo set_value('paid_fee',$d_ar['pay_row']->paid_fee); ?>" /> </div>
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
                                                </div>
                                            </div>

                                            <div class="form-group row" id="chequeno" style="display: none;">
                                                <label class="control-label col-md-3">Enter Cheque Number
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5 offset-md-3">
                                                    <input type="text" name="cheque"  placeholder="Enter Cheque Number" class="form-control input-height" style="margin-top: -35px;" value="<?php echo set_value('cheaque_no',$d_ar['pay_row']->cheaque_no); ?>" /> </div>
                                            </div>

                                            <div class="form-group row" id="netbanking" style="display: none;">
                                                <label class="control-label col-md-3"">Enter Transaction ID
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5 offset-md-3">
                                                    <input type="text" name="netbanking"  placeholder="Enter Transaction ID" class="form-control input-height" style="margin-top: -35px;" value="<?php echo set_value('transaction_id',$d_ar['pay_row']->transaction_id); ?>" /> </div>
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



                                            

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                    <button type="button" class="btn btn-default">Cancel</button>
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
            <!-- end page content -->

        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2017 &copy; Smart University Theme By
                <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">Redstar Theme</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery/jquery.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/popper/popper.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery-validation/js/jquery.validate.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery-validation/js/additional-methods.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"  charset="UTF-8"></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker-init.js"  charset="UTF-8"></script>
    <!-- Common js-->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/app.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/pages/validation/form-validation.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/layout.js" ></script>
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/js/theme-color.js" ></script>
    <!-- Material -->
    <script src="<?php echo base_url();?>assets/frontend/new-plugins/plugins/material/material.min.js"></script>
     <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/add_student_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Aug 2018 12:37:10 GMT -->
</html>