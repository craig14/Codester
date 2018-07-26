<?php 
include 'init.php';
	$updateBID=$_SESSION['updateBID'];
	$learner;



	$stmt=$dbconnect->prepare('SELECT * FROM `user` WHERE `Bid`=?');
	$stmt->bind_param('s',$updateBID);
	$stmt->execute();

	$result=$stmt->get_result();
	if($row=$result->fetch_assoc()){
		$learner=$row['Learner'];
	}

	if(isset($_POST['submitApplyUpdate'])){
		if($learner){
			$stmt1=$dbconnect->prepare('UPDATE `detail` SET `Attendance`= ? WHERE `Bid`=?');
			$stmt1->bind_param('ss',$_POST['updateAttendance'],$updateBID);
			$stmt1->execute();

		$result1=$stmt1->get_result();
		

		}else{
			echo "false";

			$stmt2=$dbconnect->prepare('UPDATE `detail` SET `Earning`= ?,`Investment`= ? WHERE `Bid`=?');
			$stmt2->bind_param('sss',$_POST['updateEarning'],$_POST['updateInvestment'],$updateBID);
			echo $_POST['updateEarning'];
			$stmt2->execute();

		$result2=$stmt2->get_result();
		}
		header("Location: trainer_user.php");

	}
 ?>