<!DOCTYPE html>
<html>
<head>

  <title>Certificate</title>
  <style type="text/css">
 

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    margin-top: 120px;
 
   /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    
   
    clear: both;
}
  .outer-border
  {
    width:800px; 
    margin: 0 auto;height:600px; 
    padding:20px; text-align:center; 
    border: 15px solid #787878;
     background-color: #ffffff;
    
  
  }
  
  .inner-border{
    width:750px; 
    margin: 0 auto;
    height:550px; 
    padding:20px; 
     border: 5px solid #787878;
     border-color: #92c551;
     font-weight: bold;
     z-index: 1;
     
  }
  .upper-logo{
    width: 150px;
    height: 100px;
    padding-bottom: 9px;
    float: left;
  }
  .certi-body{
     padding:20px; 
    text-align:center;
  }
 
 
 .row.g img {
    opacity: 0.2;
    position: absolute;
    margin-left: -4%;
    width: 100%;
    max-width: 650px;
   
}
  </style>
</head>
<body>
  <div class="outer-border">
      <div class="inner-border" >
          <div class="row">
            <img  src="<?php echo base_url();?>assets/frontend/images/logo.png" style="float: left;">
          </div>
            <div class="row g" style="margin-top: 120px; text-align: center;">
               <img  src="<?php echo base_url();?>assets/frontend/images/logo.png" style="float: left;">
            <span style="font-size:30px; font-weight:bold;font-family: cursive;">Franchiese Authorization Certificate</span>
              <br><br>
              <span style="font-size:20px;text-align: justify;"><p><i>This is to certify that Mr/Ms <?=$fran_id->contact_per?>  is Authorized Persons & Franchiesee of <b>WIZCORP Academy</b> for <?=$fran_id->locality?> Region, and have signed a pledge to abide by the rules and the regulations of Organzation.</i></p></span>
              <br>
              <span style="font-size:20px;float: left;"><i>Congratulation's for the future planning....</i></span><br/><br/>
            </div>
            <div class="row">
  <div class="column">
    <h4>Auth. Stamp</h4>
    
  </div>
  <div class="column">
    <h4>Managing Director</h4>
    
  </div>
  <div class="column">
    <h4>Chairman</h4>
    
  </div>
</div>

  </div>

</body>
</html>