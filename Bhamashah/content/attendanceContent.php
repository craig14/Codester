<?php 

    $stmt=$dbconnect->prepare('SELECT * FROM `user` WHERE `Bid`= ? ');

    $stmt->bind_param('s',$bid);

    $stmt->execute();
    $currentSkill;
    $result=$stmt->get_result(); 
    if($row=$result->fetch_assoc()){
    	$currentSkill=$row['skill'];
    }



    $stmt1=$dbconnect->prepare('SELECT * FROM `detail` WHERE  `Bid`= ? ');

    $stmt1->bind_param('s',$bid);

    $stmt1->execute();

    $result1=$stmt1->get_result(); 
    if($row2=$result1->fetch_assoc()){
    	$currentAttendance=$row2['Attendance'];

    	if($currentAttendance==100){
    		 $stmt01=$dbconnect->prepare('SELECT * FROM `existingskill` WHERE `Bid`=?');

	    	$stmt01->bind_param('s',$bid);

    		$stmt01->execute();
    		$result01=$stmt01->get_result();
    		$skills=$currentSkill;
    		echo $skills;
    		if($row01=$result01->fetch_assoc()){
    			$skills=$row01['Skill'].",".$currentSkill;
			}

    		 $stmt1=$dbconnect->prepare('UPDATE `existingskill` SET `Skill`=? WHERE `Bid`=?');

    	$stmt1->bind_param('ss',$skills,$bid);

    	$stmt1->execute();



    	
    	}
    }
    if(isset($_POST['submitNextSkill'])){
    	$newSkill=$_POST['newSkill'];
    	$stmt2=$dbconnect->prepare('UPDATE `detail` SET `Attendance`= 0 WHERE `Bid`=?');

    	$stmt2->bind_param('s',$bid);

    	$stmt2->execute();

    	$stmt3=$dbconnect->prepare('UPDATE `user` SET `skill`=? WHERE `Bid`=?');

    	$stmt3->bind_param('ss',$newSkill,$bid);

    	$stmt3->execute();
    	$currentSkill=$newSkill;
    	
    }
    $skillCount=0;
    $skillarr;
	{
    $stmt=$dbconnect->prepare('SELECT * FROM `existingskill` WHERE  `Bid`= ? ');

    $stmt->bind_param('s',$bid);

    $stmt->execute();
    
    $result=$stmt->get_result();
    $rows=$result->fetch_assoc();
    $skillarr=explode(',', $rows['Skill']);
    $skillCount=sizeof($skillarr);
}
 ?>