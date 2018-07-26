<div class="">
     <table class="" border="2px" style="width:95%" align="center">
          <tr>
               <th>Sl. NO.</th>
              <th>Name</th>
              <th>Phone No.</th>
              <th>Aadhar</th>
              <th>Bhamashah ID</th>
          </tr>
          <tr>
              <?php

                   
                    while($row=$result->fetch_assoc())
                     {  

                ?>
                <tr>
                 <td><?php echo $row['Id']; ?></td> 
                  <td><?php echo $row['Name']; ?></td> 
                  <td><?php echo $row['PhoneNo']; ?></td>
                  <td><?php echo $row['Aadhar']; ?></td>
                  <td><?php echo $row['Bid']; ?></td>
                <?php

                }
                }
                 ?>

              </tr>
       </table>
    </div>
     <br><br>