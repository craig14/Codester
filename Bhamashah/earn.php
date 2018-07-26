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
                 background-image: url(earn1.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
			.OP{
			opacity:0.8;
			}
        </style>
    </head>
    <body class="w3-padding-16 ">
    	   <?php 
    	session_start();
    	include './content/earncontent.php';

     ?>
       <center>
        <div class="w3-black OP w3-center w3-card w3-margin-left w3-margin-right wide w3-round">
            
                      <form name="frmregister" method="POST" class="wide w3-content" >
                            <p align="center" class="w3-xxxlarge" style="font-size:40px;"><br/><u><b> EARN </b></u></p>
                          
                                    
                                                                                                             
                                     Top 3 Earning Skills:<br/>
                                                                          
												Skill Set 1:<select name="skill1">
												  <option value="cook">Cooking</option>
												  <option value="stitch">Stitching</option>
												  <option value="craft">Crafting</option>
												  <option value="paint">Painting</option>
												  <option value="weav">Weaving</option>
												  <option value="sing">Singing</option>
												  <option value="dance">Dancing</option>
												  <option value="bt">Beautician Training</option>
												  <option value="ct">Computer Training</option>
												  <option value="knit">Knitting</option>
												</select><br/><br/>
												
												Skill Set 2:<select name="skill2">
												  <option value="cook">Cooking</option>
												  <option value="stitch">Stitching</option>
												  <option value="craft">Crafting</option>
												  <option value="paint">Painting</option>
												  <option value="weav">Weaving</option>
												  <option value="sing">Singing</option>
												  <option value="dance">Dancing</option>
												  <option value="bt">Beautician Training</option>
												  <option value="ct">Computer Training</option>
												  <option value="knit">Knitting</option>
												</select><br/><br/>
												
												Skill Set 3:<select name="skill3">
												  <option value="cook">Cooking</option>
												  <option value="stitch">Stitching</option>
												  <option value="craft">Crafting</option>
												  <option value="paint">Painting</option>
												  <option value="weav">Weaving</option>
												  <option value="sing">Singing</option>
												  <option value="dance">Dancing</option>
												  <option value="bt">Beautician Training</option>
												  <option value="ct">Computer Training</option>
												  <option value="knit">Knitting</option>
												</select><br/><br/>
												Declaration/Agreement:<input type="checkbox"  name="remember" required> I hereby declare that the skills declared by me are in the preference of my interest and their certification will be done by me from the training centres
                                    

                                    
								<br/>
                                <input type="submit" name="submit" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-green" value="SUBMIT" />
								<input type="reset" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-red" value="CLEAR"/>
                          
            </form>
						
		
        </center>        
        </div>
    </body>
</html>