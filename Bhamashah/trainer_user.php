
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
			
        <script>
            function myFunction(button) {
                var x = document.getElementById("myP");
                if (x.contentEditable == "true") {
                    x.contentEditable = "false";
                    button.innerHTML = '<i class="fa fa-pencil" style="color:black;"></i>';
                } else {
                    x.contentEditable = "true";
                    button.innerHTML = '<i class="fa fa-pencil" style="color:red;"></i>';
                }
            }
        </script>
		
		<style>
		
            
            
		.container-fluid eh-footer
		{
		height:50px;
		}
     #customers,#customers1 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers1 td, #customers tr, #customers td, #customers th {
    border: 1px solid black;
    padding: 8px;
}

#customers tr:nth-child(even),#customers1 tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover ,#customers1 tr:hover {background-color: #ffe0b3;}

#customers th,#customers1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #804d00;
    color: white;
}
		</style>
		


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
        $result;
        $result1;
  if(isset($_SESSION['Id'])){
    $Id=$_SESSION['Id'];
    $Id=$_SESSION['Id'];

    $stmt=$dbconnect->prepare('SELECT * FROM `trainingcenter` WHERE `Id`= ? ');
    $stmt->bind_param('s',$Id);
    $stmt->execute();
    $result=$stmt->get_result(); 
} 
  ?>

        
        
    <div>
        <!--Profile-->
        <div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
                    <p align="center"><img src="images/logo.png" style="height:106px;width:106px;border-radius:100%;width=45%;" alt="Avatar"></p>
                      <?php 
                if($row=$result->fetch_assoc())
                  {      ?>
                        <h4 class="w3-center"><?php echo $row['Username']; ?></h4>
						<h4 class="w3-center"><a href="logoutnext.php">Logout</a></h4>
                        <hr>
                    <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i><?php echo $row['Username']; ?></p>
                   
                   
              
                    <p><i class="fa fa-flag fa-fw w3-margin-right w3-text-theme"></i>India</p>

        </div>
        
        <!--Editable details-->
        <div style="width:70%;height:30%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
        
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
                <td><p>Bank A/C:</p></td>
                <td><p id="myP" contentEditable="false"><?php echo $row['BAC']; ?></p></td>
                </tr>
                
           
                
            </table>
        </div>
		
       <!--account realted stuff-->
          
				
				<div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                
                <div style="width:96%;margin-top:5px;margin-left:2%;margin-right:2%;margin-bottom:5px;float:center;">
                   
					 
                   <h3 style="margin-right:60%;"><B>UPDATE PROFILE</B></h3>
                    <div class="learn" style="margin-right:60%;width:40%;float:right;">
                  <p> &nbsp &nbsp   <button class="loan"  style="margin-right:50%;width:50%;float:right;background-color:black"> <a href="update_login.php"> Click for Update </a></button></p> <br>
                    </div>
                </div>
                </div>
				
				<div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                
                <div style="width:96%;margin-top:5px;margin-left:2%;margin-right:2%;margin-bottom:5px;float:center;">
                   
					 
                   <h3 style="margin-right:60%;"><B>BILL PAYMENT</B></h3>
                    <div class="learn" style="margin-right:60%;width:40%;float:right;">
                  <p> &nbsp &nbsp   <button class="loan"  style="margin-right:50%;width:50%;float:right;background-color:black"> <a href="http://emitra.rajasthan.gov.in/content/emitra/en/home.html#"> Pay </a></button></p> <br>
                    </div>
                </div>
                </div>
								<div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
            <table>
               
                <tr>
                    <td><p align="right">Aadhar No.:</p></td>
                    <th><p align="left"><?php echo $row['Aadhar'] ?></p></th>
                </tr>
                
                <tr>
                    <td><p align="right">&nbsp MAC Address:</p></td>
                    <th><p align="left"><?php echo $row['mac']; ?></p></th>
                </tr>
               
            </table>
        </div>
				 
              
                    </div> <br> <br>
					
					
				<div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;box-sizing:border-box;" class="w3-container">
                
                <div style="width:96%;margin-top:5px;margin-left:2%;margin-right:2%;margin-bottom:5px;float:center;">
                   
					 
                   <h3 style="margin-right:60%;"><B>ORDERS</B></h3>
                     <br><br>
          <?php 
  include './init.php';
  $stmt=$dbconnect->prepare('SELECT * FROM `order1`');
  $stmt->execute();
  $result=$stmt->get_result();

 ?>

<div class="">
     <table id="customers" class="" border="2px" style="width:95%" align="center">
          <tr>
               <th>Sl. NO.</th>
              <th>Order Description</th>
              <th>Quantity</th>
              <th>Training Center Name</th>
              <th>Delivery Date</th>
          </tr>
          <tr>
              <?php

                   
                    while($row=$result->fetch_assoc())
                     {  

                ?>
                <tr>
                 <td><?php echo $row['Id']; ?></td> 
                  <td><?php echo $row['description']; ?></td> 
                  <td><?php echo $row['Quantity']; ?></td>
                  <td><?php echo $row['Training_Center']; ?></td>
                  <td><?php echo $row['Delivery_Date']; ?></td>
                <?php

                }
                }
                 ?>

              </tr>
       </table>
    </div>
     <br><br>      
                    <div class="learn" style="margin-right:60%;width:40%;float:right;">
                   </div>
                </div>
                </div>

		
		
				<div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
            
             <br>
			 <table>
               
                <tr>
                    <td><p align="right"><a href="signup.html"><button style="background-color:black;height:40px;width:50px;border-radius:20px"></a><a href="signup.html">&#43;</a></button></p></td>
                    <th><p align="left"><p><b><a href="signup.html"> &nbsp  Add members</a></b></p></th>
                </tr>
                </table>
			
        </div>
		
		<div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
            
             <br>
       <table>
               
                <tr>
                    <td><p align="right"><a href="trainer.php"><button style="background-color:black;height:40px;width:50px;border-radius:20px"></a><a href="trainer.php">&#43;</a></button> </p></td>
                    <th><p align="left"><p><b><a href="trainer.php"> &nbsp  Add trainers</a></b></p></th>
                </tr>
                </table>
      
        </div>
		 <div style="width:25%;max-height:30%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;box-sizing:border-box;" class="w3-container">
             <br><br>
          <?php 
  include './init.php';
  $stmt=$dbconnect->prepare('SELECT `Id`,`Name`,`PhoneNo`,`Aadhar`,`Bid` FROM `trainer`');
  $stmt->execute();
  $result=$stmt->get_result();

 ?>
             <br>
         <center>   <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;width:35%;max-height:50%;background-color: black">DATABASE</button></center><center><br><br>
              <div id="id01" class="modal" style="background-color:white ">
               
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                     <!-- <table id="customers1" class="" border="2px" style="width:95%" align="center">
          <tr>
               <th>Trainer name</th>
              <th>Mobile.no</th>
              <th>Address</th>
              
          </tr>
          
               

              
       </table> -->
       <div class="">
     <table class="" border="2px" style="width:95%" align="center">
          <tr>
               <th>Sl. NO.</th>
              <th>Name</th>
              <th>Phone No.</th>
              <th>Aadhar</th>
              <th>Bhamashah ID</th>
          </tr>
          <tr>
              <?php

                   
                    while($row=$result->fetch_assoc())
                     {  

                ?>
                <tr>
                 <td><?php echo $row['Id']; ?></td> 
                  <td><?php echo $row['Name']; ?></td> 
                  <td><?php echo $row['PhoneNo']; ?></td>
                  <td><?php echo $row['Aadhar']; ?></td>
                  <td><?php echo $row['Bid']; ?></td>
                <?php

                }
                
                 ?>

              </tr>
       </table>
    </div>
     <br><br>
                        </div>
                <script>
            // Get the modal
            var modal = document.getElementById('id01');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        </div>
				 
                   <div>
				    <div style="width:70%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;;margin-right:30px;box-sizing:border-box;" class="w3-container">
                    <div style="margin-left:05%;margin-right:60%;width:90%;margin-top:20px;margin-bottom:20px;float:left;">
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
    <form action="" method="POST" target="_blank">
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
		
	
	<div class="container-fluid eh-footer" style="background-color:#251d13;color:white;position:relative;margin-top:92%;margin-bottom:0%;width:100%">
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
</footer>
</div>  
</body>
</html>