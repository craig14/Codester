<html>
<head>
    <title> Transparent Login Form Design </title>
    	<!--<link rel="shortcut icon" href="avatar.png" type="image/x-icon">
	<link rel="icon" href="avatar.png" type="image/x-icon">-->
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
         <?php 
        session_start();
        include './content/trainerlogincontent.php';
         ?>
    <div class="login-box">
<!--    <img src="avatar.png" class="avatar">-->
        <h1>TRAINER CENTER LOGIN PORTAL</h1>
            <form method="POST" action="">
            <p>TRAINING CENTER USERNAME</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>PASSWORD</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <!-- <a href="#">Forget Password</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
            <a href="registrationTC.php">Sign Up</a>
            </form>
        
        
        </div>
    
    </body>
</html>