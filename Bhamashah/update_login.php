<html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .box{
                height: 200px;
                width:500px;
            }
			 body{
                 background-image: url(images/update.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }

        </style>
    </head>
    <body>

        <?php 
        session_start();
            $updateBID;
            if(isset($_POST['submitUpdate'])){
                $_SESSION['updateBID']=$_POST['updateBID'];
                header("Location: update.php");
                die();
            }
             
             ?>

        
        
     <div class="w3-card w3-container w3-content w3-display-middle box w3-hover-orange" >
        <center>
        <div class="w3-display-middle">
		<form class="loan" method="POST" action="">
         <b class=""> ENTER YOUR BHAMASHAH ID</b>
         <input type="number" name="updateBID" id="bid" placeholder="Enter your BHAMASHAH ID" required class="w3-margin w3-hover-yellow"/>
         <br/>
         <input type="submit" name="submitUpdate" value="Apply" id="btnapply" class="w3-btn w3-ripple w3-hover-red w3-margin-top"></input>
         		 </form>
         </div>
         </center>
     </div>
        
        
        
        
        
    </body>
</html>