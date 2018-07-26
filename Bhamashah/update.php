<html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .box{
                height: 400px;
                width:800px;
            }
			  body{
                 background-image: url(images/stats.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
        </style>
    </head>
    <body>
<?php 
        session_start();
        include 'content/updateContent.php';

 ?>
         
     <div class="w3-card w3-container w3-content w3-display-middle box w3-hover-orange w3-round" >
        <center>
        <div class="w3-display-middle">
         <b class=""><h2><b> ENTER THE DETAILS</b></h2></b>
		 <form class="tracer" action="" method="POST">
         <table>
             <tr>
                 <td>BHAMASHAH ID</td>
                 <td><input type="number" readonly  id="bid" value="<?php echo $_SESSION['updateBID']; ?>" class="w3-round"></td>
             </tr>

             <?php 
             if($learner){
              ?>
             <tr>
                 <td>ATTENDANCE</td>
                 <td><input type="number" name="updateAttendance" placeholder="Enter the attendance" id="textattnd" class="w3-round"></td>
             </tr>
         <?php }else{ ?>
             <tr>
                 <td>EARNINGS</td>
                 <td><input type="number" name="updateEarning" placeholder="Enter the earnings" id="txtearn" class="w3-round"></td>
             </tr>
             <tr>
                 <td>INVESTMENT</td>
                 <td><input type="number" name="updateInvestment" placeholder="Enter investment" id="txtinvest" class="w3-round"></td>
             </tr>
         <?php } ?>
			 
             
         </table>
         <input type="submit" name="submitApplyUpdate" value="Apply" id="btnapply" class="w3-btn w3-ripple w3-hover-red w3-margin-top"><a href="trainer_user.php"></a></input>
		 </form>
         </div>
         </center>
     </div>
        
        
        
        
        
    </body>
</html>