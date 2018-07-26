<html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
        <style>

            .wide{
                max-width: 50%;
            }

            body{
                 background-image: url(images/b2.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
		<script>
		function validateemail(uemail)
{
	if(
	(uemail.indexOf("@") < 2)
	||
	(uemail.indexOf("@") != (uemail.lastIndexOf("@")))
	)
	{
		alert("Invalid email");
	}
}
		
		</script>
    </head>
    <body class="w3-padding-16 ">

<?php 
        session_start();

    include './content/trainernext.php';
 ?>
       <center>
        <div class="w3-black w3-opacity-min w3-center w3-card w3-margin-left w3-margin-right wide w3-round">
            
                      <form name="frmregister" method="POST" action="" class="wide w3-content" enctype="multipart/form-data">
                            <p align="center" class="w3-xxxlarge" style="font-size:35px;"><br/><u><b>Trainer Sign Up</b></u></p>
                          <h2><b><b><u>Personal Details</u></b></b></h2>
                                    NAME:<input type="text" name="name" id="txtname" class="w3-padding-16 w3-round w3-input w3-border w3-content "
                                     maxlength="30"  placeholder="Enter name" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" required onblur="validateuname();"/>
                                     
                                                                                                             
                                    <!-- PASSPORT SIZE PHOTO:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload your BHAMASHAH CARD XEROX" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"/> -->
                                                                          <br/>
                                    PHONE NO.:<input type="text"  pattern="[1-9]{1}[0-9]{9}" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="phoneno" placeholder="Enter phone number" class="w3-padding-16 w3-input w3-border w3-content w3-round" required=""><br/>
                                    
                                    Date of Birth:<input type="Date" name="dob" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" rows="2" cols="20" max="2018-07-31" class="w3-padding-16 w3-round w3-input w3-border w3-content"><br/><br/>
                                    
                                    CURRENT ADDRESS:<textarea name="caddress" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" rows="2" cols="20" placeholder="Enter current address" class="w3-padding-16 w3-input w3-border w3-round w3-content"></textarea><br/>
								   
                                   PERMANENT ADDRESS:  <textarea name="paddress" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" rows="2" cols="20" placeholder="Enter permanent address" class="w3-padding-16 w3-input w3-border w3-content w3-round"></textarea><br/>
                                    
									EMAIL ID:<input type="email" name="email" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" rows="2" cols="20" class="w3-padding-16 w3-input w3-border w3-content w3-round" placeholder="Enter email id" required onblur="validateemail(this.value)" /><br/>
									
                                    AADHAR NUMBER:<input type="text"  pattern="[1-9]{1}[0-9]{11}" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="aadhar" placeholder="Enter aadhar number" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"><br/>
                                    
                                    <!-- ADHAAR UPLOAD:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload your ADHAAR CARD XEROX" required="" class="w3-padding-16 w3-input w3-border w3-round w3-content"/><br/> -->
                                    
                                    BHAMASHAH NUMBER:<input type="text"  pattern="[1-9]{1}[0-9]{10}" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="bid" placeholder="Enter bhamashah card number" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"><br/>
                                    
                                    <!-- BHAMASHAH CARD UPLOAD:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload your BHAMASHAH CARD XEROX" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"/><br/> -->
								    ACCOUNT NUMBER:<input type="text"  style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="acc" placeholder="Enter account number" required class="w3-padding-16 w3-input w3-border w3-content w3-round"><br/>
								  UPLOAD CERTIFICATES :<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:black;" name="up1" placeholder="Upload your Certificate" class="w3-padding-16 w3-input w3-border w3-round w3-content"/><br/>			
								     <input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:black;" name="up2" placeholder="Upload your Certificate" class="w3-padding-16 w3-input w3-border w3-round w3-content"/><br/>	
                                <input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:black;" name="up3" placeholder="Upload your Certificate" class="w3-padding-16 w3-input w3-border w3-round w3-content"/><br/>												 
                                <input type="submit" name="submit" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-green" value="SUBMIT"><a href="login.php">  </input>
								<input type="reset" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-red" value="CLEAR"/>
                          
            </form>
						
		
        </center>        
        </div>
    </body>
</html>