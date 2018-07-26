<?php 
include './init.php';
	$name="";
	$phoneno="";
	$dob="";
	$email="";
	$caddress="";
	$paddress="";
	$aadhar="";
	$bid="";
	$password="";
	$learner="";
	$earner="";

	if(isset($_POST['submit'])){
		// getting post result
		$name=$_POST['name'];
		$phoneno=$_POST['phoneno'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];
		$caddress=$_POST['caddress'];
		$paddress=$_POST['paddress'];
		$aadhar=$_POST['aadhar'];
		$bid=$_POST['bid'];
		$password=$_POST['password'];
		$learner=$_POST['comp'];
		if($learner)
		{
		$skill=$_POST['skill'];
	 	}
	 	else
	 		{$skill=NULL;}

		$stmt=$dbconnect->prepare('INSERT INTO `user`(`Name`, `PhoneNo`, `DOB`,`email`, `CAddress`, `PAddress`, `Aadhar`, `Bid`, `Password`, `Learner` ,`skill`) VALUES (?,?,?,?,?,?,?,?,?,?,?)');

		//echo $stmt;

		$stmt->bind_param('sssssssssss',$name,$phoneno,$dob,$email,$caddress,$paddress,$aadhar,$bid,$password,$learner,$skill); // 's' specifies the variable type=> 'string'

		$stmt->execute();
		

		$result=$stmt->get_result();

		if(isset($result)){
			// success signup 
		 
				$_SESSION['user']=mysqli_insert_id($dbconnect);
				$_SESSION['bid']=$bid;

				
			$stmt=$dbconnect->prepare('INSERT INTO `detail`( `Bid`) VALUES (?)');
			$stmt->bind_param('s',$bid); // 's' specifies the variable type=> 'string'
			$stmt->execute();

			$stmt11=$dbconnect->prepare('INSERT INTO `existingskill`( `Bid`) VALUES (?)');
			$stmt11->bind_param('s',$bid); // 's' specifies the variable type=> 'string'
			$stmt11->execute();

				header("Location: login.php");
				die();
			
		}else{
			?> <script>alert("Sign Unsuccessful Due to Existing Username");</script><?php
		}

	}
 ?>
