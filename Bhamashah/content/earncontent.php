<?php 

include './init.php';
	$skill1="";
	$skill2="";
	$skill3="";
	$bid=$_SESSION['bid'];
	$user=$_SESSION['user'];
	


	if(isset($_POST['submit'])){

		$skill1=$_POST['skill1'];
		$skill2=$_POST['skill2'];
		$skill3=$_POST['skill3'];

		

		$stmt1=$dbconnect->prepare('INSERT INTO `earningskill`(`Bid`, `Skill1`, `Skill2`, `Skill3`) VALUES (?,?,?,?)');

		$stmt1->bind_param('ssss',$bid,$skill1,$skill2,$skill3); // 's' specifies the variable type=> 'string'

		$stmt1->execute();

		$result=$stmt1->get_result();

		if(isset($result)){
			// success signup 
			
			?>
			<script>
				if(confirm('Sign Up Successful')){
			<?php 
			

				$stmt2=$dbconnect->prepare('UPDATE `user` SET `Earner`=1 WHERE `Bid`=?');

				$stmt2->bind_param('s',$bid); // 's' specifies the variable type=> 'string'

				$stmt2->execute();

				
				header("Location: earn_user.php");
				die();
			?>
			}
			</script>
			<?php
		}else{
			?> <script>alert("Try Again");</script><?php
		}

	
	}
 ?>