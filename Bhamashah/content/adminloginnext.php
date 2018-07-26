<?php 

include './init.php';

	if(isset($_POST['submit'])){
		$bid=$_POST['bid'];
		$password=$_POST['password'];

		$stmt=$dbconnect->prepare('SELECT * FROM `admin` WHERE `Id`= ?  AND `Password`=? ');
		$stmt->bind_param('ss',$bid,$password );
		$stmt->execute();
		$result=$stmt->get_result();
		if($row=$result->fetch_assoc()){
			$_SESSION['admin']=$row['Id'];
			$_SESSION['Id']=$bid;
			header("Location: admin.php");
			// if($row['Learner'])
			// {
			// header("Location: learn_user.php");
			// }
			// else
			// 	{
			// 		header("Location: earn_user.php");
			// 	}
			// 	die();
			

		}else{
			?>
			<script>alert('Invalid credentials');</script>
			<?php
		}

	}
 ?>