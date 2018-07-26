<?php 

include './init.php';
	$existingskill="";
	$skill1="";
	$skill2="";
	$skill3="";
	$skill4="";
	$skill5="";
	$bid=$_SESSION['bid'];
	$user=$_SESSION['user'];
	


	if(isset($_POST['submit'])){

		$existingskill=$_POST['existingskill'];
		$skill1=$_POST['skill1'];
		$skill2=$_POST['skill2'];
		$skill3=$_POST['skill3'];
		$skill4=$_POST['skill4'];
		$skill5=$_POST['skill5'];

		$existingskillarr=explode(',',$existingskill,0);
		foreach ($existingskillarr as $key => $skill) {

			$stmt=$dbconnect->prepare('INSERT INTO `existingskill`(`Bid`, `Skill`) VALUES (?,?)');

		$stmt->bind_param('ss',$bid,$skill); // 's' specifies the variable type=> 'string'

		$stmt->execute();
		}

		$stmt1=$dbconnect->prepare('INSERT INTO `learningskill`(`Bid`, `Skill1`, `Skill2`, `Skill3`, `Skill4`, `Skill5`)  VALUES (?,?,?,?,?,?)');

		$stmt1->bind_param('ssssss',$bid,$skill1,$skill2,$skill3,$skill4,$skill5); // 's' specifies the variable type=> 'string'

		$stmt1->execute();

		$result=$stmt1->get_result();

		if(isset($result)){
			// success signup 
			
			?>
			<script>
				if(confirm('Sign Up Successful')){
			<?php 
			

				$stmt2=$dbconnect->prepare('UPDATE `user` SET `Learner`=1 WHERE `Id`=? AND `Bid`=?');

				$stmt2->bind_param('ss',$user,$bid); // 's' specifies the variable type=> 'string'

				$stmt2->execute();

				
				header("Location: learn_user.php");
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