<?php 

include './init.php';

	if(isset($_POST['submit'])){
		$bid=$_POST['bid'];
		$password=$_POST['password'];

		$stmt=$dbconnect->prepare('SELECT * FROM `user` WHERE `Bid`= ?  AND `Password`=? ');
		$stmt->bind_param('ss',$bid,$password );
		$stmt->execute();
		$result=$stmt->get_result();
		if($row=$result->fetch_assoc()){
			$_SESSION['user']=$row['Id'];
			$_SESSION['bid']=$bid;
			if($row['Learner'])
			{
			header("Location: learn_user.php");
			}
			else
				{
					header("Location: earn_user.php");
				}
				die();
			

		}else{
			?>
			<script>alert('Invalid credentials');</script>
			<?php
		}

	}


 ?>