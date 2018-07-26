<?php 
include './init.php';
	$name="";
	$phoneno="";
	$dob="";
	$caddress="";
	$paddress="";
	$bac="";
	$aadhar="";
	$username="";
	$password="";
	$comp="";
	$mac="";
	// $apply="";
	// $amount="";

	if(isset($_POST['submit'])){

		// getting post result
		$name=$_POST['name'];
		$phoneno=$_POST['phoneno'];
		$dob=$_POST['dob'];
		
		$caddress=$_POST['caddress'];
		$paddress=$_POST['paddress'];
		$bac=$_POST['bac'];
		$aadhar=$_POST['aadhar'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$comp=$_POST['comp'];
		// $amount=$_POST['amount']*200+30000-1;


		
		// if($amount>=30000){
		// 	$apply=1;
		// }else {
		// 	$apply=0;
		// 	$amount=0;
			
		// }
		
		$mac=$_POST['mac'];
		$stmt=$dbconnect->prepare('INSERT INTO `trainingcenter`(`Name`, `PhoneNo`, `DOB`, `CAddress`, `PAddress`, `BAC`, `Aadhar`, `Username`, `Password`, `Comp`, `mac`) VALUES (?,?,?,?,?,?,?,?,?,?,?)');

		$stmt->bind_param('sssssssssss',$name,$phoneno,$dob,$caddress,$paddress,$bac,$aadhar,$username,$password,$comp,$mac); // 's' specifies the variable type=> 'string'

		$stmt->execute();

		$result=$stmt->get_result();

		if(isset($result)){
			// success signup 
			
			?>
			<script>
				if(confirm('Sign Up Successful')){
			<?php 
				$_SESSION['trainer']=mysqli_insert_id($dbconnect);
				$_SESSION['username']=$username;
				 header("Location: trainerlogin.php");
				die();
			?>
			}
			</script>
			<?php
		}else{
			?> <script>alert("Sign Unsuccessful Due to Existing Username");</script><?php
		}

	}
 ?>
