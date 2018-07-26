<?php

 $stmt=$dbconnect->prepare('SELECT * FROM `detail` WHERE `Bid`= ? ');

    $stmt->bind_param('s',$bid);

    $stmt->execute();
    
    $result=$stmt->get_result(); 
    if($row=$result->fetch_assoc()){
    	$currentEarning=$row['Earning'];
    }





$stmt1=$dbconnect->prepare('SELECT * FROM `detail` WHERE  `Bid`= ? ');

    $stmt1->bind_param('s',$bid);

    $stmt1->execute();

    $result1=$stmt1->get_result(); 
    if($row1=$result1->fetch_assoc()){
    	$currentInvestment=$row1['Investment'];
    	}
    	?>