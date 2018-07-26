<html>
<head>
    <title> Login Form </title>
    	<!--<link rel="shortcut icon" href="avatar.png" type="image/x-icon">
	<link rel="icon" href="avatar.png" type="image/x-icon">-->
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
        <?php 
        session_start();
        include './content/logincontent.php';
         ?>
    <div class="login-box">
<!--    <img src="avatar.png" class="avatar">-->
        <h1>Login Here</h1>
            <form method="POST" action="">
                <p>BHAMASHAH ID</p>
                <input type="text" name="bid" placeholder="Enter BHAMASHAH ID" pattern="[1-9]{1}[0-9]{10}" required="Incorrect">
                <p>PASSWORD</p>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="submit" name="submit" value="Login">
                <!-- <a href="#">Forget Password</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
                <a href="./signup.php">Sign Up</a>
            </form>
        
        
        </div>
    
    </body>
</html>