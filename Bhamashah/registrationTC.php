<html>
    <head>
        <title>
            
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            .slidecontainer {
    width: 100%;
}

.slider {
    -webkit-appearance: none;
    width: 100%;
    height: 10px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.slider:hover {
    opacity: 1;
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 23px;
    height: 24px;
    border: 0;
    background: url("earn1.jpg");
    cursor: pointer;
}

.slider::-moz-range-thumb {
    width: 23px;
    height: 24px;
    border: 0;
    background: url('contrasticon.png');
    cursor: pointer;
}
        </style>
    </head>
    <body class="w3-padding-16 ">
        <?php include './content/registrationTCcontent.php'; ?>
       <center>
        <div class="w3-black w3-opacity-min w3-center w3-card w3-margin-left w3-margin-right wide w3-round">
            
                      <form name="frmregister" method="POST" class="wide w3-content" >
                            <p align="center" class="w3-xxlarge" style="font-size:40px;color:crimson"><br/><u><b> REGISTRATION FOR TRAINING CENTER</b></u></p>
                          <h2><b><b><u>Personal Details</u></b></b></h2>
                                    TRAINING CENTER USERNAME:<input type="text" name="name" id="txtname" class="w3-padding-16 w3-round w3-input w3-border w3-content "
                                     maxlength="30" placeholder="Enter Training Center Name" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" required onblur="validateuname();"/>
                                     <br/>

                                                                                                             
                                    <!-- PASSPORT SIZE PHOTO:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload your BHAMASHAH CARD XEROX" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"/> -->
                                                                          <br/>
                                    PHONE NO.:<input type="number"  pattern="[1-9]{1}[0-9]{10}"  style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="phoneno" placeholder="Enter phone number" class="w3-padding-16 w3-input w3-border w3-content w3-round" required=""><br/>
                                    
                                    Date of Establishment:<input type="Date"  max="2018-07-31" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="dob" class="w3-padding-16 w3-round w3-input w3-border w3-content"><br/><br/>
                                    
                                    CURRENT ADDRESS:<textarea name="caddress" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" rows="2" cols="20" placeholder="Enter current address" class="w3-padding-16 w3-input w3-border w3-round w3-content"></textarea><br/>
								    
                                   PERMANENT ADDRESS:  <textarea name="paddress" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" rows="2" cols="20" placeholder="Enter permanent address" class="w3-padding-16 w3-input w3-border w3-content w3-round"></textarea><br/></br>
                                    
                                    BANK ACCOUNT NUMBER:<input type="text" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="bac" placeholder="Enter bank Account number" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"><br/>
                                    
                                    AADHAR NUMBER:<input type="number"  pattern="[1-9]{1}[0-9]{11}"  style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="aadhar" placeholder="Enter aadhar number" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"><br/>
                                    
                                    <!-- ADHAAR UPLOAD:<input type="file" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="txnmobile" placeholder="Upload your ADHAAR CARD XEROX" required="" class="w3-padding-16 w3-input w3-border w3-round w3-content"/><br/> -->
                                    
                                    USERNAME:<input type="text" name="username" id="txtname" class="w3-padding-16 w3-round w3-input w3-border w3-content "
                                     maxlength="30" placeholder="Enter username" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" required onblur="validateuname();"/>
                                     <br/>
                                    PASSWORD:<input type="password" name="password" id="txtname" class="w3-padding-16 w3-round w3-input w3-border w3-content "
                                     maxlength="30" placeholder="Enter password" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" required onblur="validateuname();"/>
                                     <br/>
                                    
                           
                                    <br/>
                                    
                                    DO YOU HAVE A COMPUTER?<br/><input type="radio" name="comp" value="1" class="w3-btn" onclick="myFunY();">YES <input type="radio" name="comp" value="0" class="w3-btn" onclick="myFunN();">NO
                                    <br/>
                                    <script>
                                        function myFunY() {
                                            var x = document.getElementById("myDiv");
                                                    x.style.display = "block";
                                        }
                                        function myFunN() {
                                            var x = document.getElementById("myDiv");
                                                    x.style.display = "none";
                                        }
                                    </script>
                                    
                                    
                                    
                            <div id="myDiv" style="display:none">
								 <br/> 
								MAC ADDRESS:<input type="text" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" name="mac" placeholder="Enter mac address" required="" class="w3-padding-16 w3-input w3-border w3-content w3-round"/><br/> 
                               <br/> 
							   <br/></div>
								    <br/>
								    
                                   
                                  
                                <input type="submit" name="submit" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-green" value="SUBMIT" />
								<input type="reset" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-red" value="CLEAR"/>
                          
            </form>
						
		
        </center>        
        </div>
    </body>
</html>