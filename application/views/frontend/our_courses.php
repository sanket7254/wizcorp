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
.abc{
    background-image: url("assets/frontend/images/back.jpg");
}
</style>

  
    <body class="wrap-slider">
                <img src="<?php echo base_url();?>assets/frontend/images/slides/course.jpeg" style="height: 400px; width:100%;">
                <div class="centered">
                    <h1 style="font-style: italic; color: white;">Courses of WIZCORP</h1>
                </div> 
        </div>
         <section class="flat-row v28 parallax parallax8 abc">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section center">
                            <h1 class="title">Our Offered Courses</h1>
                        </div>
                    </div>
                </div>
                
                <div class="row">

                     <?php
                        foreach ($abc as $coursess):?>
                    <div class="col-md-4">
                        <div class="iconbox" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                            </div>
                            <div class="box-content" style="height: 150px;widows: 250px;">
                                <div class="box-title"> 
                                <div>
                                    <h6><?=$coursess->course_name?></h6>
                                    <p><?=$coursess->course_details?></p>
                                </div>
                               </div>   
                            </div>
                        </div>
                         <div class="divider"></div>
                    </div>
                     <?php endforeach;?>

                </div>
            </div>
        </section>






    