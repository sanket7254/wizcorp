
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
.title{
    font-size: 20px;

}
.col-xs-8.col-sm-6.col-md-4.a img {
    height: 100%;
    max-height: 250px;
    width: 100%;
}
</style>

            <div class="wrap-slider">
                <img src="<?php echo base_url();?>assets/frontend/images/color.jpg" style="height: 300px; width:100%;">
                <div class="centered">
                    <h1 style="font-style: italic; color: white;">NEWS AND EVENTS</h1>
                </div> 
            </div>

 <?php echo form_hidden('news_id',$this->session->userdata("news_id")); ?>
    <?php echo $this->session->userdata("news_id"); ?> 
<div class="services container-fluid" style="padding-top: 50px;">
    <div class="container">
         
        <div class="row">
            <?php
                    foreach ($newsdatas as $newss ) :?>
            
            <div class="col-xs-8 col-sm-6 col-md-4 a">  
                <a href="<?php echo base_url('readmore').'/'.$newss->news_id;?>">
                    <h4 style="text-align: center;"><?= $newss->news_title ?></h4></a>    
                  <div class="icon">
                    <?php  
                       $base = base_url()."uploads/news/";
                       $path = $base.$newss->news_img;
                    ?>
                 <img src="<?= $path?>" style="height: 300px;width: 400px;"></div><br>    
                  
            </div>
             <?php   endforeach; ?>    
       </div>                                             
   </div>
 </div>


       
         