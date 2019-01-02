
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
</style>

  
    <div class="wrap-slider">
                <img src="<?php echo base_url();?>assets/frontend/images/color.jpg" style="height: 300px; width:100%;">
                <div class="centered">
                    <h1 style="font-style: italic; color: white;">PHOTO GALLERY</h1>
                </div> 
                </div>


        <?php echo form_hidden('title_id',$this->session->userdata("title_id")); ?>
        <?php echo $this->session->userdata('title_id'); ?>
        <section class="flat-row v24 home-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            foreach ($gall as $galls):?>
                        <div class="iso-portfolio">
                            <div class="item presen">
                                <div class="wrap-portfolio">
                                    <a class=""> 
                                
                                   <h5 style="text-align: center;"><?= $galls->img_title ?></h5> 
                                            <?php  
                                                $base = base_url()."uploads/gallery/";
                                                $path = $base.$galls->image_name;                            
                                            ?>
                                            <img src="<?= $path?>" style="height: 300px;width: 350px;">
                                    </a>
                                    <div class="hover">
                                        <a  href="<?php echo base_url('popup_images').'/'.$galls->title_id;?>"><i class="fa fa-search-plus"></i></a>

                                    
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <?php
            endforeach;?>
                         
                    </div>
                    
                </div>

            </div>
            
        </section>
    

    </div>
    
   