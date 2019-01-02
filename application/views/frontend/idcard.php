<!DOCTYPE html>
<html>
<head>
	<title>ID Card</title>
	<style type="text/css">
		body {
			background-color: #d7d6d3;
			font-family:'verdana';
		}
		.id-card-holder {
			width: 225px;
			height: 300px;
		    padding: 4px;
		    margin: 0 auto;
		    background-color: #1f1f1f;
		    border-radius: 5px;
		    position: relative;
		}
		.id-card-holder:after {
		    content: '';
		    width: 7px;
		    display: block;
		    background-color: #0a0a0a;
		    height: 100px;
		    position: absolute;
		    top: 105px;
		    border-radius: 0 5px 5px 0;
		}
		.id-card-holder:before {
		    content: '';
		    width: 7px;
		    display: block;
		    background-color: #0a0a0a;
		    height: 100px;
		    position: absolute;
		    top: 105px;
		    left: 222px;
		    border-radius: 5px 0 0 5px;
		}
		.id-card {
			
			background-color: #fff;
			padding: 10px;
			border-radius: 10px;
			text-align: center;
			box-shadow: 0 0 1.5px 0px #b9b9b9;
			height: 280px;
		}
		.id-card img {
			margin: 0 auto;
		}
		.header img {
			width: 100px;
    		margin-top: 15px;
		}
		.header1 img{
			width: 150px;"
		}
		.photo img {
			width: 150px;
    		margin-top: 15px;
		}
		h2 {
			font-size: 15px;
			margin: 5px 0;
		}
		h3 {
			font-size: 12px;
			margin: 2.5px 0;
			font-weight: 300;
		}
		p {
			font-size: 10px;
			margin: 2px;

		}
		.id-card-hook:after {
			content: '';
		    background-color: #d7d6d3;
		    width: 47px;
		    height: 6px;
		    display: block;
		    margin: 0px auto;
		    position: relative;
		    top: 6px;
		    border-radius: 4px;
		}
		.id-card-tag-strip:after {
			content: '';
		    display: block;
		    width: 100%;
		    height: 1px;
		    background-color: #c1c1c1;
		    position: relative;
		    top: 10px;
		}
		.id-card-tag:after {
			content: '';
		    display: block;
		    width: 0;
		    height: 0;
		    border-left: 50px solid transparent;
		    border-right: 50px solid transparent;
		    border-top: 100px solid #d7d6d3;
		    margin: -10px auto -30px auto;
		    position: relative;
		    top: -130px;
		    left: -50px;
		}
		.abc{
	position: absolute;
    bottom: 20px;
    font-size:10px;
    margin: 0 auto;
    
}
	</style>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/new-plugins/plugins/css/material_style.css">
</head>
<body>
	<div class="id-card-holder">
		 <?php foreach ($post as $franchieses ) :?>
		<div class="id-card">
			<div class="header">
				<img src="<?php echo base_url();?>assets/frontend/images/logo.png">
				<p><b>WIZCORP Pvt Ltd</b></p>
			</div>
			<div class="photo">
				<?php  
			        $base = base_url()."uploads/franchise/";
			        $path = $base.$franchieses->fran_img;
			       
      			?>
      			<img src="<?= $path?>" width="100" height="100" style="border-radius: 50%">
			
			</div>
			<h2><?= $franchieses->contact_per?></h2>
			<span><h3>Franchiese Name:</h3><h3> <?= $franchieses->fname ?></h3></span>
		</div>
		<?php endforeach; ?>
	</div>
	<br><br>
	<div class="id-card-holder">
		<div class="id-card">
			
			<h2>Head Office</h2>
			<h3>A-3,Paradigm Oppel,Near Cummins India,Baner,Pune-411044</h3>
			<h3><i class="material-icons">phone</i></h3>
			<hr>
			<h5>IF FOUND PLEASE RETURN TO HEAD OFFICE</h5>
			<div class="header1">
				<img src="<?php echo base_url();?>assets/frontend/images/logo.png">
				
			</div>
		</div>

	</div>
</body>
</html>