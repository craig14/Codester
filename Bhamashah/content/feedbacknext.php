<?php 
	include './init.php';
	if(isset($_POST['send'])){
		//$id=$_POST[''];
		$name=$_POST['Name'];
		$email=$_POST['Email'];
		$feedback=$_POST['Message'];

		$stmt=$dbconnect->prepare('INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES (?,?,?)');
		$stmt->bind_param('sss',$name,$email,$feedback);
		$stmt->execute();

		$result=$stmt->get_result();

		if(isset($result)){
			echo "Feedback Submitted";
			unset($_POST['send']);
		}else{
			echo "Feedback Not Submitted";
			die();
		}
	}

 ?>

