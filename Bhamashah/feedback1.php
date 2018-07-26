<html>
<body>
<?php 
	include './init.php';
	$stmt=$dbconnect->prepare('SELECT * FROM `feedback`');
	$stmt->execute();
	$result=$stmt->get_result();

 ?>

<div class="">
     <table class="">
          <tr>
              <th>Sl. NO.</th>
              <th>Name</th>
              <th>E-mail</th>
              <th>Feedback</th>
          </tr>
          <tr>
              <?php

                   
                    while($row=$result->fetch_assoc())
                     {  

                ?>
                <tr>
                  <td><?php echo $row['id']; ?></td> 
                  <td><?php echo $row['name']; ?></td> 
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['feedback']; ?></td>
                 </tr> 
                <?php

                }
                
                 ?>

              </tr>
       </table>
    </div>

</body>
</html>