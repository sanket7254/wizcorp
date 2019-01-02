        
<div class="wrap-slider">
                <img src="<?php echo base_url();?>assets/frontend/images/color.jpg" style="height: 300px; width:100%;">
                <div class="centered">
                    <h1 style="font-style: italic; color: white;">NEWS AND EVENTS</h1>
                </div> 
</div>
 <?php echo form_hidden('news_id',$this->session->userdata("news_id")); ?>
    <?php echo $this->session->userdata("news_id"); ?> 
       <section class="flat-row v21">
            <div class="container">
                <div class="row style-ove">
                     <?php
                    foreach ($d as $z)
                        { ?>
                    <div class="col-md-12 col-sm-12 profile-reponsive">
                       
                        <div class="title-section center">
                            <center><h1 class="title"><?= $z->news_title ?></h1></center>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 profile-reponsive">
                        <div class="profile">
                            <div class="pro-content">
                                <h5>Description:</h5>
                                <p><?= $z->news_desc ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 profile-reponsive">
                        <div class="feature-about-us">
                            <?php  
                       $base = base_url()."uploads/news/";
                       $path = $base.$z->news_img;
                    ?>
                 <img src="<?= $path?>">
                        </div>
                    </div>
                </div>
                <?php   } ?> 
            </div>
        </section>