<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<style>
    .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.wrap-slider{
    position: relative;
    text-align: center;
    color: white;
}

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
<?php if ($this->session->flashdata('message')): ?>
                            <script>
                                swal({
                                    title: "Done",
                                    text: "<?php echo $this->session->flashdata('message'); ?>",
                                    icon: "success",
                                    timer: 1500,
                                    showConfirmButton: false,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
    


             <div class="wrap-slider">
                <img src="<?php echo base_url();?>assets/frontend/images/color.jpg" style="height: 300px; width:100%;">
                <div class="centered">
                    <h1 style="font-style: italic; color: white;">CONTACT US</h1>
                </div> 
            </div>
        <section class="flat-row v23">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 section-reponsive">
                        <div class="iconbox style3">
                            <div class="box-header">
                                <div class="box-icon" style="padding-top: 20px;">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="box-content">  
                                <a href="#" rel="alternate">+91-7020715363</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 section-reponsive">
                        <div class="iconbox style3">
                            <div class="box-header">
                                <div class="box-icon" style="padding-top: 20px;">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="box-content pdl">  
                                <a href="#" rel="alternate">praful.patil@wiz-corp.in</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 section-reponsive">
                        <div class="iconbox style3">
                            <div class="box-header">
                                <div class="box-icon" style="padding-top: 20px;">
                                    <i class="fa fa-globe"></i>
                                </div>
                            </div>
                            <div class="box-content">  
                                <a href="#" rel="alternate">Nakshatra I-Land,Alandi Moshi Road,Moshi,Pune-412105</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 section-reponsive">
                        <div class="iconbox style3">
                            <div class="box-header">
                                <div class="box-icon" style="padding-top: 20px;">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <div class="box-content pdl2">  
                                <a href="#" rel="alternate">Open hours: 9.00-17.00 Mon-Fri</a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider h51"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="flat-maps" data-images="<?php echo base_url();?>assets/frontend/images/map.png">
                            <div id="maps" data-images="<?php echo base_url();?>assets/frontend/images/map.png"></div>
                        </div>
                    </div>
                </div>
                <div class="divider h53"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-contact">
                            <h2>Get in touch with us</h2>
                        </div>
                    </div>
                    <?php echo form_open('HomeController/Contacts'); ?>
                    <form id="contactform" class="contactform" method="post" action="./contact/contact-process.php">
                        <div class="container" >
                            <div class="col-md-6">
                                <p class="contact-name">                                      
                                    <input type="text" placeholder="Name" size="30" value="" name="name" id="name" required>
                                </p>
                                <p class="contact-form-email">          
                                    <input type="email" placeholder="Email" size="30" value="" name="email" id="email" required>
                                </p>  
                                <p class="contact-form-url">          
                                    <input type="text" placeholder="Contact No" maxlength="10" onkeypress="return isNumberKey(event)" value="" name="contact" id="contact" required>
                                </p> 
                                
                            </div>
                            <div class="col-md-6">
                                <p class="contact-form-url">          
                                    <input type="text" placeholder="Subject" value="" name="subject" id="subject" required>
                                </p> 
                                <p class="contact-form-comment abc">
                                    <textarea id="message-contact" class="comment-messages" tabindex="4" placeholder="Messages" name="message" required></textarea>
                                </p>  
                            </div>
                            <div class="divider h10"></div>
                            <div class="col-md-12">
                                <div class="btn-contact">
                                    <p class="form-contact">                 
                                        <button class="flat-button font-poppins">Send messages</button>
                                    </p>
                                </div>
                            </div> 
                            </div>
                            <script type="text/javascript">
                                function isNumberKey(evt)
                                                {
                                                    var charCode = (evt.which) ? evt.which : event.keyCode
                                                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                                                    return false;
                                                    return true;
                                                }
                            </script>         
                    </form>
                </div>      
            </div>
        </section>

        

    
    
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery-waypoints.js"></script> 
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.event.move.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.twentytwenty.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.magnific-popup.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery-validate.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeAiGODJM6KVeD_K6od2b5hMvq869_1cg&region=GB"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/gmap3.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/main.js"></script>
</body>
</html>