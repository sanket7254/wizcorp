<footer class="footer">
            <div class="container">
                <div class="row"> 
                    <div class="col-md-4 col-sm-6">  
                        <div class="widget widget-information">
                            <h4 class="logo-footer" style="color: #1eaf13;"><img src="<?php echo base_url();?>assets/frontend/images/logo.png" style="width: 120px; padding-top: 15px;"></a></h4>
                            <ul class="feature" style="color: #1eaf13;">
                                <p>The midbrain is the topmost part of the brainstem, the connection central between the brain and the spinal cord</p>
                            </ul> 
                            <ul class="social-links style2" style="padding-top: 10px;">
                                <li><a href="#"><i class="fa fa-facebook" style="padding-top: 10px;"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" style="padding-top: 10px;"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" style="padding-top: 10px;"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" style="padding-top: 10px;"></i></a></li>
                            </ul>        
                        </div>         
                    </div><!-- /.col-md-3 --> 

                   <div class="col-md-2 col-sm-6"> 
                           <h4 class="widget-title" style="color: white;font-size: 15px;">COURSES</h4>
                         <?php foreach ($courses as $cour ) :?> 
                        <div class="widget widget-categories">
                            <ul class="feature">
                                <li><a><?= $cour->course_name ?></a></li>
                                
                            </ul>
                        </div>
                         <?php endforeach; ?>
                    </div>
                    <div class="col-md-2 col-sm-6"> 
                           <h4 class="widget-title" style="color: white;font-size: 15px;">FRANCHAISE</h4>
                         <?php foreach ($fran as $franchieses ) :?> 
                        <div class="widget widget-categories">
                            <ul class="feature">
                                <li><a><?= $franchieses->locality ?></a></li>
                                
                            </ul>
                        </div>
                         <?php endforeach; ?>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-2 col-sm-6">  
                         <h4 class="widget-title" style="color: white;font-size: 15px;">USEFUL LINKS</h4>
                        <div class="widget widget-useful"> 
                            <ul class="one-half">
                                <li><a href="<?php echo base_url('faq');?>">FAQs</a></li>
                                <li><a href="<?php echo base_url('Privacy');?>">Privacy </a></li>
                            </ul>
                        </div>
                    </div>
                     <div class="col-md-2 col-sm-6" > 
                         <h4 class="widget-title" style="color: white;font-size: 15px;">CONTACT US</h4> 
                        <div class="widget widget-information">
                            <ul class="flat-information">
                               <li class="phone"><a><?= $footer[0]->contact;?></a></li>
                                <li class="email"><a><?= $footer[0]->email;?></a></li>
                                <li class="address"><a ><?= $footer[0]->address;?></a></li>
                            </ul>
                        </div>
                    </div><!-- /.col-md-3 --><!-- /.col-md-3 -->
                </div><!-- /.row -->    
            </div><!-- /.container -->
        </footer>

        <!-- Bottom -->
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-6 bottom-reponsive">
                        <div class="copyright">
                           <p>© 2018 <a href="#">WIZCORP</a>. All rights reserved.</p>
                        </div>                 
                    </div> 
                    <div class="col-md-3 col-sm-6 bottom-reponsive">
                        <ul class="link-bottom">
                            <li><a href="<?php echo base_url();?>Privacy">Privacy</a></li>
                            <li><a href="<?php echo base_url();?>Terms">Terms</a></li>
                        </ul>
                    </div>
                </div>                  
            </div><!-- /.container -->
        </div><!-- bottom -->

         <!-- Go Top -->
        <a class="go-top">
            <i class="fa fa-angle-up" style="padding-top: 12.5px;"></i>
        </a>  
    

    </div>
    

    </div>
    
    <!-- Javascript -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.easing.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery-waypoints.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery-validate.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.event.move.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.twentytwenty.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.cookie.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery-countTo.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/jquery.magnific-popup.min.js"></script> 

    
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/javascript/main.js"></script>

         <!-- Revolution Slider -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/slider3.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/revolution/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>