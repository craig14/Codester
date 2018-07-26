<?php 
session_start();
include './init.php';

if(!isset($_SESSION['bid']))
{
// header("Location: ./../login.php");
// die();
}

	$id=$_SESSION['user'];
	$bid=$_SESSION['bid'];

	$stmt=$dbconnect->prepare('SELECT `Learner` FROM `user` WHERE `Id`= ? AND `Bid`=? ');
		$stmt->bind_param('ss',$id,$bid );
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
		if($row['Learner']){
			// echo $row['Learner'];
			
			header("Location: ./../learn_user.php");
			die();

		}else{
			
			header("Location: ../learn.php");
			die();
		}

		



 ?>