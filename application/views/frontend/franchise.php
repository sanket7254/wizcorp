
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
.box
{
    margin-bottom: 20px;border: 1px solid #e3e3e3;
    text-align: center;
    z-index: 10;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: inset 0 0 50px rgba(0,0,0,0.1);
}
p.a{
    text-align: justify;
}
li.a{
    text-align: justify;
}
ol.a{
    list-style-type: circle;
}
</style>

    <div class="wrap-slider">
        <img src="<?php echo base_url();?>assets/frontend/images/slides/photo1.jpg" style="width: 100%;height: 600px;">
    </div>

    <section class="flat-row v21">
            <div class="container">
                <div class="row style-ove">
                    <div class="col-md-12 col-sm-12 profile-reponsive">
                        <div class="title-section center">
                            <center><h1 class="title">FRANCHISE </h1></center>

                            <center><h2>Get a way to earn more.</h2></center>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 profile-reponsive">
                        <div class="profile">
                            <h2 class="pro-title">Wizcorp Franchise</h2>
                            <div class="pro-content">
                                <div class="container" style="margin-top: 40px;">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="a" style="padding-bottom: 15px;"><b>Year Business began :</b>2012.</p>
                                            <p class="a" style="padding-bottom: 15px;"><b>Franchising since :</b>2015.</p>
                                            <p class="a" style="padding-bottom: 15px;"><b>Headquarter :</b>Pune.</p>
                                            <p class="a" style="padding-bottom: 15px;"><b>Number of units :</b>125.</p>
                                             
                                        </div>
                                        <div class="col-md-4">
                                            <div class="box" style=" margin-right: 10px;">
                                                <img src="<?php echo base_url();?>assets/frontend/images/logo.png" style="height: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12-12">
                                        <p  class="a" style="padding-bottom: 15px;"><b>Franchise description :</b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                    </div>

                                    
                                <div class="col-md-12-12">
                                    <ol class="a" style="margin-left: 20px;">
                                        <li class="a" style="padding-bottom: 15px;font-size: 20px;font-family: organo;">Franchise description :</b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</li>

                                        <li class="a" style="padding-bottom: 15px;font-size: 20px;font-family: organo;">Franchise description :</b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</li>

                                        <li class="a" style="padding-bottom: 15px;font-size: 20px;font-family: organo;">Franchise description :</b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</li>
                                    </ol>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="divider h77"></div>
                <br>
                <br>
            </div>
        </section>

        <section class="flat-row v28 parallax parallax8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section center">
                            <h1 class="title">All Franchiese of Wizcorp</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <?php foreach ($franc as $franchieses ) :?>
                    <div class="col-md-4">
                        <div class="iconbox">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="fa fa-home"></i>
                                </div>
                            </div>
                            <div class="box-content" style="height: 250px;widows: 250px;">
                                <div class="box-title"><?= $franchieses->fname ?></div>    
                                <p><?= character_limiter($franchieses->address,50); ?></p><br>
                                <h7><span class="glyphicon glyphicon-phone"></span> <?= $franchieses->fcontact ?></h7><br> <br>
                                <h7><span class="glyphicon glyphicon-envelope"> </span> <?= $franchieses->femail ?></h7><br>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>


            
         