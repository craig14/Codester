<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href="css\learn_user\learn_user.css" rel="stylesheet">
			
       
        
    </head>
    <body style="background-color:#fff2e6">
	<div class="background">
    
	
        <div style="height:25%;background-color:#f26522;">
            <div class="imgcontainer" style="position:absolute;background-color:#f26522;">
                <img src="images/logo.png" alt="Avatar" class="avatar">
				</div>
            
            <div align="right" style="background-color:#f26522;width:100%;height:35%;float:center;">
        
                <header>
                    <section class="header-content">
                        <h1 class="header-title animate-pop-in">Bhamashah yojana</h1>
                </header>
			</div>
            </div>
       
         <?php 
        session_start();
        include './content/init.php';
  if(isset($_SESSION['bid'])){
    $bid=$_SESSION['bid'];

    $stmt=$dbconnect->prepare('SELECT * FROM `user` WHERE `Bid`= ? ');
    $stmt1=$dbconnect->prepare('SELECT * FROM `detail` WHERE `Bid`= ? ');
    $stmt1->bind_param('s',$bid);
    $stmt->bind_param('s',$bid);
    $stmt->execute();
    $stmt1->execute();
    $result=$stmt->get_result(); 
    $result1=$stmt1->get_result();} ?>
        
        
    <div>
        <!--Profile-->
        <div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
                    <p align="center"><img src="images/logo.png" style="height:106px;width:106px;border-radius:100%;width=45%;" alt="Avatar"></p>
                            <?php 
                if($row=$result->fetch_assoc())
                  {      ?>
                        <h4 class="w3-center"><?php echo $row['Name']; ?></h4>
						<h4 class="w3-center"><a href="logoutnext.php">Logout</a></h4>
                        <hr>
                    <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i><?php echo $row['Name']; ?></p>
                 
                    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i><?php echo $row['DOB']; ?></p>
              
                    <p><i class="fa fa-flag fa-fw w3-margin-right w3-text-theme"></i>India</p>

        </div>
        
        <!--Editable details-->
        <div style="width:70%;height:30%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
        
            <div style="float:right;"><button onclick="myFunction(this);" style="color:black;background-color:white;"><i class="fa fa-pencil"></i></button></div>
            <table>
			<tr>
                <td><h4><b>MORE DETAILS-</h4></b></td>
                
                </tr>
                <tr>
                <td><p>Mobile no.:</p></td>
                <td><p id="myP" contentEditable="false"><?php echo $row['PhoneNo']; ?></p></td>
                </tr>
                
                <tr>
                <td><p>Address:</p></td>
                <td><p id="myP" contentEditable="false"><?php echo $row['CAddress']; ?></p></td>
                </tr>
                
                <tr>
                <td><p>Email Id:</p></td>
                <td><p id="myP" contentEditable="false"><?php echo $row['email']; ?></p></td>
                </tr>
                
           <?php 
           $Aadhar=$row['Aadhar'];
            ?>
                
            </table>
        </div>
		 
		
		 <div style="width:70%;height:30%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
         
    <!-- Progress bars / Skills -->
    <?php
         include 'content/earnerContent.php';
         ?>
    <h3><b>EARNING</b></h3>
	<br>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" value="<?php echo $currentAttendance; ?>" style="width:<?php echo $currentEarning.'%'; ?>"><?php echo $currentEarning.'%'; ?></div>
    </div>
            <br>
            <p><center> <button  onclick="callfun()"  style="background-color:gray;width:10%">Pay</button></p>
                    </center></p>
                        <center>
        <div id="Divv" style="display:none">
                UPLOAD DEPOSIT RECEIPT:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:black;width:40%" class="w3-padding-16 w3-input w3-border w3-round w3-content"/><br/> 
                               </div></center>
                <div>   <p>
                <center>    Account No:2343526754180012</center>
                    </p></div>
          
        </div>
       
		  <div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
            <table>
               
                <tr>
                    <td><p align="right">Aadhar No.:</p></td>
                    <th><p align="left"><?php echo $Aadhar; ?></p></th>
                </tr>
                
                <tr>
                    <td><p align="right">Bhamashah id.:</p></td>
                    <th><p align="left"><?php echo $row['Bid']; ?></p></th>
                </tr>
                <?php } ?>
            </table>
        </div>
        
		 
		<div style="width:70%;height:30%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
		<h3><b>INVESTMENT</b></h3>
	<br>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center"  value="<?php echo $currentAttendance; ?>" style="width:<?php echo $currentInvestment.'%'; ?>"><?php echo $currentInvestment.'%'; ?></div>
    </div>
            <br>
          
        </div>
		
		
				
		
       <!--account realted stuff-->
					
		
				    <div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                    <div style="margin-right:40%;margin-left:05%;width:90%;margin-top:20px;margin-bottom:20px;float:left;">
                        <div class="w3-container w3-padding-large w3-grey">

                             <?php 
      include './content/feedbacknext.php';
     ?>

    <h4 id="contact"><b>Feedback</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>apurv.rathore.prakash@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Bhubaneswar,Odisha</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>7608903930</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="" target="_blank" method="POST">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" name="send" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>
                    </div>
                </div>
      
            </div>
        </div>
         <!--EVERY DETAILS-->
       
    </div>
	</div>
    <div class="container-fluid eh-footer" style="background-color:#251d13;color:white;position:relative;margin-top:83%;margin-bottom:0%;width:100%">
     <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h4>Important Links</h4>
                <div class="footer-nav-left">
                    <ul>
                        <ul><li><a href="/content/dam/doitassets/Bhamashah/pdf/BhamashahFAQ.pdf" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">FAQ</span></a>



            </li><li><a href="http://bhamashah.rajasthan.gov.in/UserP/CampsSchedule.aspx" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Camps Schedule</span></a>



            </li><li><a href="http://bhamashah.rajasthan.gov.in/UserP/Tenders.aspx" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Tenders</span></a>



            </li><li><a href="/content/raj/bhamashah/en/screen-reader-access.html" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Screen Reader Access</span></a>



            </li></ul></ul>
                </div>
                <div class="footer-nav-right">
                    <ul>
                        <ul><li><a href="/content/raj/bhamashah/en/photo-gallery.html" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Photo Gallery</span></a>



            </li><li><a href="/content/raj/bhamashah/en/video-gallery.html" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Video Gallery</span></a>



            </li><li><a href="http://bhamashah.rajasthan.gov.in/UserP/ImpWebSites.aspx" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Link to Important Websites</span></a>



            </li></ul></ul>
                </div>
            </div>
            
            
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 help-desk">
                <h4>Help Desk</h4>
                <a  style="font-size:20px"><i class="fa fa-phone" style="font-size:20px"></i> 1800-180-6127</a><br>
                <span class="time" style="font-size: 14px;">9:00 AM to 6:00 AM | Monday to Friday</span>
            </div>
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" contact="">
                <h4>Contact Us</h4>
                <div class="baseRichText">
    <p style="font-size: 15px;">IT Building, Yojana Bhawan Premises, Tilak Marg, C-Scheme, Jaipur, Rajasthan India - 302005,</p>
<p style="font-size: 15px;"><a rel="noopener noreferrer" href="tel:0141-4030695" style="font-size: 14px;">Landline : 0141-5166227,223,224</a>&nbsp;<br>
<a rel="noopener noreferrer" href="mailto:bhamashah@rajasthan.gov.in" style="font-size: 14px;">Email: bhamashah@rajasthan.gov.in</a></p>
<p style="font-size: 15px;">&nbsp;</p></div></div>
        </div>
        <div class="row copyright">
            <p class="col-xs-12" style="font-size: 15px;"><center>Copyright © 2016 Bhamashah Yojana, Government of Rajasthan, All rights reserved.</center> </p>
        </div>
    </div>
    <p class="scroll-button footer-scroll" style="font-size: 15px;">
       <!--  <a href="#section-1"><i class="fa fa-arrow-circle-o-up"></i></a> -->
    </p>
</footer></div> 
    </body>
</html>





