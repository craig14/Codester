<?php 
	include './init.php';

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$phoneno=$_POST['phoneno'];
		$dob=$_POST['dob'];
		$caddress=$_POST['caddress'];
		$paddress=$_POST['paddress'];
		$email=$_POST['email'];
		$aadhar=$_POST['aadhar'];
		$bid=$_POST['bid'];
		$acc=$_POST['acc'];

	$stmt=$dbconnect->prepare('INSERT INTO `trainer` (`Name`, `PhoneNo`, `DOB`, `CAddress`, `PAddress`, `Email`, `Aadhar`, `Bid`, `Acc`) VALUES (?,?,?,?,?,?,?,?,?)');
	$stmt->bind_param('sssssssss',$name,$phoneno,$dob,$caddress,$paddress,$email,$aadhar,$bid,$acc);
	$stmt->execute();


	echo "Trainer Added";

	}
 ?>
