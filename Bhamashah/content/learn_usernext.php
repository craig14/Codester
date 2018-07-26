<?php 
include './init.php';
	if(isset($_SESSION['bid'])){
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$phoneno=$_POST['phoneno'];
		$bid=$_SESSION['bid'];

		$stmt=$dbconnect->prepare('SELECT * FROM `user` WHERE `Bid`= ? ');
		$stmt->bind_param('s',$bid);
		$stmt->execute();
		$result=$stmt->get_result();

		//$row=$result->fetch_assoc();

		

	}

 ?>