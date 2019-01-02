<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<style type="text/css">
		.container{
			
			margin-left: 40px;
			margin-top: 40px;
			margin-right: 40px;
			margin-bottom: 40px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		}
		 .header_{
			background-color:#92c551;
			width: 100%;
			margin: 0 auto;
			height: 80px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		}
		.text_{
			padding-top: 9px;
			text-align: center;
			color: white;
		}
		.body_{
			background-color: white;
			width: 100%;
			margin: 0 auto;
			height: 500px;
			margin-top: 0px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		}
		.body_text{
			color: red;
			text-align: center;
			padding-top: 20px;
		}
		p{
			margin-top: 120px;
			margin-left: 25px;
			margin-right: 25px;
			text-align: justify;
			font-size: 18px;
			font-style: italic;

		}
  
  h3{
   float: right;
    bottom: 5px;
    font-size:16px;
    margin: 0 auto;
    font-weight: bold;
    padding-right: 20px;
  }
	</style>
</head>
<body style="background-color: #e6ebf0;">
<div class="container">
	<div class="row header_">
			<div class="col-md-6 text_">
				<h2>Welcome Letter</h2>
			</div>
			<div class="col-md-6" style="padding-top: 5px;">
				<img src="<?php echo base_url();?>assets/frontend/images/logo.png" style="padding-left: 14px;">
			</div>
		</div>
		<div class="row body_">
			<div class="col-md-12 body_text">
				<h2>Congratulations on your decision...!</h2>
			</div>
		 <div class="container">
    		<div class="row" style="margin-top: 10px;">
      			<div class="col-md-6">
       				 <h4 style="float: left;margin-left: -12px;">Dear <?=$code?>,</h4>
      			</div>
      		
    	</div>
 	 </div>
 	 <p>We'll like to welcome you to "WIZCORP Pvt Ltd". We are excited that you have become a part of our Family.<br>
		A business that has the potential to turn your dreams into reality, as you build your business, you will establish lifelong friendships and develop support systems unparalleled in any other business.<br>
		We pledge our best efforts to provide the levels of continuing support necessary to ensure that your business is a total success. You are in this business for yourself, not by yourself.<br>
		We have developed an effective and proven progress product & plan to help you launch a profitable business of your own. With YOU in control, you determine your own level of commitment in order to adapt and benefit your lifestyle and personal goals.<br>
		The rewards are tremendous for those who endure the efforts required to develop a stable organization, one from which you can potentially benefit from eternally. We are confident that you will receive gratification from your involvement with Company Name and we wish you every Success!<br>
		Please note we are providing you an opportunity to earn money which is optional, your earnings will depend directly in the amount of efforts you put to develop your business team....
	</p>
         <h3>Warm Wishes....</h3>
	<div>
		
	</div>
	</div>
	</div>
	
</div>
</body>
</html>