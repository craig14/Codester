<?php 
	include './init.php';
	if(isset($_POST['send'])){
		//$id=$_POST[''];
		$orderdes=$_POST['orderdes'];
		$orderq=$_POST['orderq'];
		$tcn=$_POST['tcn'];
		$dd=$_POST['dd'];

		$stmt=$dbconnect->prepare('INSERT INTO `order1` (`description`, `Quantity`, `Training_Center`, `Delivery_Date`) VALUES (?,?,?,?)');
		$stmt->bind_param('ssss',$orderdes,$orderq,$tcn,$dd);
		$stmt->execute();

		$result=$stmt->get_result();

		if(isset($result)){
			//echo "Order Submitted";
			unset($_POST['send']);
		}else{
			echo "Order Not Submitted";
			
		}
	}

 ?>