<?php 

include './init.php';

	if(isset($_POST['submit'])) 
	  {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$stmt=$dbconnect->prepare('SELECT * FROM `trainingcenter` WHERE `Username`=? AND `Password`=? ');
		$stmt->bind_param('ss',$username,$password );
		$stmt->execute();
		$result=$stmt->get_result();
		if($row=$result->fetch_assoc()){

			$_SESSION['Id']=$row['Id'];
			$_SESSION['username']=$row['Username'];
			header("Location: trainer_user.php");
			die();

		} 
		else 
		{
			?> <script>alert('Invalid credentials');</script><?php
		}

	}
 ?>