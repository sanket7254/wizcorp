<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="invoice, receipt">
<title>WIZCORP</title>
<!-- Fonts -->

<style>
.head td, th {
text-align: left;
}
.head {
border-collapse: collapse;
width: 100%;
background-color: #ecf0f4;
}
.head th, td {
padding: 5px;
}
h6 h5 {
margin: 0;
padding: 0;
line-height: 1;
}
p{
padding: 0;
margin: 0;
font-weight: 400;
font-size: 12px;
}
#total thead tr th
padding: 8px;
font-weight: 400;
text-align: right;
}
small, time, .small {
font-family: Roboto,sans-serif;
font-weight: 500;
font-size: 11px;
color: bl
}
.details tr th{
padding: 6px;
color: #000;
font-weight: 400;
}
.details tr td{
padding: 6px;
color: #000;
font-weight: 500;
text-align: left;
}
ul li{
font-size: 12px;
color: #000;
font-weight: 400;
}
ul{
padding-left: 15px;
}
.nodes{
list-style: none;
padding: 0;
}
p{
font-size: 12px;
color: #000;
font-weight: 400;
}
table.abc th {
    text-align: right;
}
</style>
</head>
<body style="background-color: #fff;" >
<!-- Main container -->
<main>
  <div class="main-content">
      <div class="card">
        <div class="card-body printing-area">
          <div class="row gap-y">
            <table style="border: none; width: 100%;">
              <tbody>
                <tr>
                  <td style="width: 20%;"> <img src="<?php echo base_url();?>assets/frontend/images/logo.png" style="width: 150px;height: 100px;padding-bottom: 9px;" alt="logo">
                  </td>
                  <td style="text-align: center;width: 60%;"><H2 style="color: #000;"><strong>WIZCORP ACADEMY</strong></H2>
                      <p><strong>SKF Hall, Opp. Tata Motors Main-Gate, Gawade Colony, Chinchwad, Pune - 411033.</strong></p>
                  </td>
                   <td style="float: right;overflow: hidden;display: inline-block;text-align: right;">
                      <img src="<?php echo base_url();?>assets/Frontend/images/abc.svg" style="width: 150px;height: 100px;padding-bottom: 9px;">
                  </td>
              </tr>
            </tbody>
        </table>
        <table class="head" style=" background-color: #92c551;">
          <tr>
              <th style="width: 100%; padding: 10px;padding-left: 18px; text-align: center;">
                  <h4 style="color: #000; font-weight: 500; line-height: 1;margin-bottom: 0;text-decoration: underline; padding-bottom: 10px;">MEMORY ENRICHMENT WORKSHOP</h4>
              </th>
          </tr>
        </table>
    <?php
foreach ($posts as $post)
{
?>     
  <div class="container">
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-12">
        <h4 style="text-align: center;text-decoration: underline;">Regitration Form</h4>
      </div>
    </div>
    <div class="row" style="float: right;">
      <div class="col-md-12">
       <?php  
        $base = base_url()."uploads/";
        $path = $base.$post->ppimage;
      ?>
      <img src="<?= $path?>" width="100" height="100">
      <br>
      </div>
    </div>
  </div>

        <table class="head" style="background-color: #fff; width: 100%;margin-top: 60px; ">
      
          <tr>
            <th style=" padding: 5px;padding-left: 30px;">
              <small>Batch No:</small>
              <h4 style="font-weight: 400;"></h4>
            </th>
            <th style="padding: 5px;">
              <small >Form No:</small>
              <h6 style="font-weight: 400;"></h6>
            </th>
            <th style="padding: 5px;">
              <small>Franchise Code:</small>
              <h6 style="font-weight: 400;"></h6>
            </th>
            <th style="padding: 5px;">
              <small>Training Start Date:</small>
              <h6 style="font-weight: 400;"></h6>
            </th>
        </tr>
      </table>
    </div>
<br>
      <table style="width: 100%; " class="details">
          <thead>
              <tr style="background-color: #f5f9ef; color:#000;">
                <th style="padding: 6px;" colspan="6">STUDENT'S DETAILS</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <th>First Name: <?= $post->firstname;?></th>
                 <td></td>
                <th>Middle Name: <?= $post->middlename;?></th>
                  <td> </td>
                <th>Last Name: <?= $post->lastname;?></th>
                  <td></td>
              </tr>
              <tr>
                  <th>Date of Birth: <?= $post->dob;?></th>
                      <td></td>
                  <th>Gender: <?= $post->gender;?></th>
                    <td></td>
                  </tr>
          </tbody>
      </table>
      <table style="width: 100%; " class="details">
          <thead>
            <tr style="background-color:#f5f9ef; color:#000;">
              <th style="padding: 5px;" colspan="6">STUDENT'S EDUCATION DETAILS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>School Name: <?= $post->school;?></th>
                <td></td>
              <th>Grade: <?= $post->grade;?></th>
                <td></td>
             </tr>
             <tr>
              <th>Location: <?= $post->location;?></th>
                <td></td>
            </tr>
        </tbody>
      </table>
      <table style="width: 100%; " class="details">
          <thead>
            <tr style="background-color:#f5f9ef; color:#000;">
              <th style="padding: 5px;" colspan="6">FATHER'S DETAILS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>First Name: <?= $post->ffname;?></th>
                  <td></td>
              <th>Middle Name: <?= $post->fmname;?></th>
                  <td></td>
              <th>Last Name: <?= $post->flname;?></th>
                  <td> </td>
            </tr>
            <tr>
              <th>Profession: <?= $post->profession;?></th>
                  <td></td>
              <th>Mobile No: <?= $post->fmnumber;?></th>
                  <td></td>
              <th>Email: <?= $post->femail;?></th>
                  <td></td>
            </tr>
              </tbody>
        </table>
          <table style="width: 100%; " class="details">
              <thead>
                  <tr style="background-color: #f5f9ef; color:#000;">
                    <th style="padding: 5px;" colspan="6">MEDICAL HISTORY</th>
                  </tr>
              </thead>
                <tbody>
                  <tr>
                      <th><?= $post->medical_issue;?></th>
                  </tr>
                </tbody>
          </table>
            <table style="width: 100%; " class="details">
              <thead>
                <tr style="background-color: #f5f9ef; color:#000;">
                    <th style="padding: 5px;" colspan="6">CO-CURRICULAR DETAILS</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                  <th width="30%">Co-Curricular Activities: <?= $post->ccactivity;?></th>
                      <td>  </td>
              </tr>
            </tbody>
          </table>
          <table style="width: 100%; " class="details">
            <thead>
              <tr style="background-color: #f5f9ef; color:#000;">
                <th style="padding: 5px;" colspan="6">ADDRESS DETAILS</th>
              </tr>
            </thead>
              <tbody>
                <tr>
                <th>Address: <?= $post->address;?></th>
                  <td> </td>
                </tr>
              </tbody>
          </table>
          <table style="width: 100%; " class="details">
            <thead>
              <tr style="background-color: #f5f9ef; color:#000;">
                <th style="padding: 5px;" colspan="6">COURSE DETAILS</th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <th>Course Name: <?= $post->course_name;?></th>
                       <td>  </td>
                  </tr>
                  <tr>
                   <th>Payment Method: <?= $post->paymenttype;?></th>
                   <th><?php if($post->paymenttype == "Net Banking") { ?>
                              Transaction ID: $post->transaction_id
                        <?php } ?>
                    </th>
                    <th><?php if($post->paymenttype == "Cheque") { ?>
                              Cheque no: <?= $post->cheaque_no; ?>
                        <?php } ?>
                    </th>
                  </tr>
                  <?php 
                    } ?>

                                                    

</tbody>
</table>
<br><br><br><br><br><br>
<table style="width: 100%; " class="details">
<tbody>
<tr>
<th><strong>Authorised Signature <br>
<small>Wizcorp Pvt.Ltd</small></strong></th>
<th style="text-align: right;"><strong>Parent's Signature</strong> </th>
</tr>
</tbody>
</table>
<br><br><br><br>
<h4><b>Terms and Conditions:-</b></h4>
<ul>
<li>Memory Enrichment workshop duration (8 Weeks), 2 Days full day Training (9 am to 5 pm)</li>
<li>Weekly Session (8 Sunday for 4 Hrs)</li>
<li>Workshop Curriculum :- Basic + Advance: </li>
</ul>
<table width="100%">
<tbody>
<tr>
<td width="34%">
<ul style="margin-bottom: 0;" class="nodes" >
<li>1) Sepration of Cards</li>
<li>4) Odd / Even No. Cards sepration</li>
<li>7) Colour book using colour pencils</li>
<li>10) Writing</li>
<li>13) Distance coverage of 5 to 50 </li>
</ul>
</td>
<td width="34%">
<ul style="margin-bottom: 0;" class="nodes">
<li>2) Setting of Cards from 0 to 10</li>
<li>5) Picture Photo identification</li>
<li>8) Identify colours with sense</li>
<li>11) Solving Maths</li>
<li>14) Making rangoli on ground</li>
</ul>
</td>
<td>
<ul style="margin-bottom: 0;" class="nodes">
<li>3) Sepration of Balls </li>
<li>6) Sense with Foot</li>
<li>9) Reading</li>
<li>12) Backside of Cards identification</li>
<li>15) Raiding bicycle on ground</li>
</ul>
</td>
</tr>
<tr>
<td style="padding-top: 0;">
<ul class="nodes">
<li>16) Identification of moving objects</li>
</ul>
</td>
<td colspan="2" style="padding-top: 0;"><ul class="nodes">
<li>17) On ground activities playing football, cricket etc.</li>
</ul>
</td>
</tr>
</tbody>
</table>
<ul>
<li>Registration of Workshop also includes Memory Enrichment workshop KIT and other training items and is non-refundable</li>
<li>This Activities are depend on childrens concertration home culture and practices only</li>
<li>According to guidlines of Trainer daily Practice for 30 mins is compulsory for student at home to complete Memory Enrichment workshop</li>
<li>Authoritative and Release</li>
</ul>
<p>
I, Undersigned, Authorize recording, by Audio, Video photography, or any other means, I or My child's practicipation in the programs related to Bluelife Tradelinks (Memory Enrichment Workshop), Including the right to copyright such recordings and to use and publish them, in whole or in part. This Authorization expressly incudes the right to record, reproduce or otherwise use my child's face likeness and voice. The underisigned individual hereby release and sichages BlueLife Tradelinks, including their branches, employees, agents, representtatives, partners, instructor, volunteers, or staff, from any and all claims and demands arising out of or in connection with the use of foregoing and waives any rights the undersigned individual may have against BlueLife Tradelinks arising out the use and publication of said material in an manner, whether for commercial purpose or otherwise. br
<br> Waiver of Liability: I hereby waive and all claims of any natural or unnatural hazard whatsoever and agree not to hold Bluelife Tradelinks, Including their branches, agens, representatives, partners, instructor, volunteers or staff, responsible for any injurises sufered by me or my child, or loss, which i or my child my incur, that is caused in whole or in part, which may rise, occur, or by atttributable but limited to the following:
</p>
<ul>
<li>A Branch of any representation, warranty, or promise made by me or my child.</li>
<li>Any misstantement made by me or my child.</li>
<li>Me or My Child's failure to flow the instructions of the instructors.</li>
<li>I or My Child's inability or failure to satisfactory complete medium of instruction</li>
<li>The Workshop curriculum offered and follow standart medium of instruction.</li>
<li>Interruption or termination of the workshop due to Illness, acts of god, civil unrestt or any other unforeseen circumstances.</li>
</ul>
<p>I have read, understood and agree to all of the Terms and Condition for this registration. i represent and waarrant</p>
<ul>
<li>My Child has been healthy and fully able to perform daily physical activities</li>
<li>I will faithfully follow all instructions given by the representative / Trainer or Bluelife Tradelinks.</li>
<li>I am aware that this workshop is for the age group of 5 to 15 years and my child stands for this age group.</li>
</ul>
<br>
<table width="100%" class="details">
<tbody>
<tr>
<td width="34%">Place: <br>
Date:
</td>
<td>
BLM Name:
<br>
BlM Signature:
</td>
<td style="text-align: right;"><br>Parent's Signature</td>
</tr>
</tbody>
</table>
</div>
</div>
</div><!--/.main-content -->
</main>
<!-- END Main container -->
<script
src="https://code.jquery.com/jquery-2.2.4.js"
integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
crossorigin="anonymous"></script>
</body>
</html>