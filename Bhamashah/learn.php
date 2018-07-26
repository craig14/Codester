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
                 background-image: url(learn1.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
			.OP{
			opacity:0.8;
			}
        </style>
    </head>
    <?php 
    	session_start();
    	include './content/learncontent.php';

     ?>
    <body class="w3-padding-16 ">
       <center>
        <div class="w3-black OP w3-center w3-card w3-margin-left w3-margin-right wide w3-round">
            
                      <form name="frmregister" method="POST" action="" class="wide w3-content" >
                            <p align="center" class="w3-xxxlarge" style="font-size:40px;"><br/><u><b> Learn</b></u></p>
                          
                                    Existing Skill Set:<input type="text" name="existingskill" id="txtname" class="w3-padding-16 w3-round w3-input w3-border w3-content "
                                     placeholder="Enter your skills(Eg:- Cooking,Knitting,Weaving)" style="border:none;border-bottom:2px solid orange;background-color:inherit;color:white;" required onblur="validateuname();"/>
                                     <br/>

                                                                                                             
                                    Learn Skills:<br/>
                                                                          
												Skill Set 1:<select  name="skill1" >
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
												
												Skill Set 2:<select name="skill2" >
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
												
												Skill Set 3:<select name="skill3" >
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
												
												Skill Set 4:<select  name="skill4" placeholder="enter 4th skill">
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
												
												Skill Set 5:<select name="skill5" >
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
                                    
								<br/>
                                <input type="submit"  name="submit" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-green" value="SUBMIT" />
								<input type="reset" class="w3-button w3-margin-bottom w3-content w3-border w3-round w3-ripple w3-hover-red" value="CLEAR"/>
                          
            </form>
						
		
        </center>        
        </div>
    </body>
</html>