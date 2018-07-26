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
        include './content/adminloginnext.php';
         ?>
    <div class="login-box">
<!--    <img src="avatar.png" class="avatar">-->
        <h1>Admin Login</h1>
            <form method="POST" action="">
                <p>ADMIN ID</p>
                <input type="text"  name="bid" placeholder="Enter ADMIN ID"   required>
                <p>PASSWORD</p>
                <input type="password" name="password" placeholder="Enter Password" required>
				<br/><br/>
				<br/>
                <input type="submit" name="submit" value="Login">
                <!-- <a href="#">Forget Password</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; -->
             
            </form>
        
        
        </div>
    
    </body>
</html>