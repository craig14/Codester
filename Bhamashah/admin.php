<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="manifest" href="/assets/manifest.json">
<link rel="apple-touch-icon" href="/assets/images/logo-82.png">
  <link rel="canonical" href="https://www.eventshigh.com/chennai/iit+madras">
  
<link rel="icon" href="//storage.googleapis.com/ehassets/images/eventshigh.png" type="image/png">
  <link rel="stylesheet" href="https://storage.googleapis.com/ehassets/css/3f5f1ccdd035bea7fc2f2033dbc6812a-sparky.css" ,="">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              <link href="css\learn_user\learn_user.css" rel="stylesheet">
			  <style>
        input[type=text],input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
body{margin:0;padding:0;height:100%;background:peachpuff;}
.row
{
color:white
}
h4{
color:white}
.col-xs-12{color:white}

a{color:white}
a:hover{color:orange}
 #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

 #customers tr, #customers td, #customers th {
    border: 1px solid black;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover  {background-color: #ffe0b3;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #804d00;
    color: white;
}
</style>


    </head>
	 <body style="background-color:#fff2e6">
	<div class="background">
    
	
        <div style="height:25%;background-color:#f26522;">
            <div class="imgcontainer" style="position:absolute;background-color:#f26522;">
                <img src="images/logo.png" alt="Avatar" class="avatar">
				</div>
            
            <div align="right" style="background-color:#f26522;width:100%;height:35%;float:center;">
        
                <header>
                    <section class="header-content">
                        <h1 class="header-title animate-pop-in">Bhamashah yojana</h1>
                </header>
			</div>
            </div>
			<div  style="background-color:#fff2e6">
        <!--Profile-->
        <div style="width:25%;height:50%;border:2px solid rgb(241,129,58);margin-left:30px;margin-top:1%;float:left;background-color:#fff2e6" class="w3-container">
                     
					<br><br><br>	<button style="background-color:orange;height:50%;width:60%;color:black;font-size:30px" onclick="myFunY()"><b>FEEDBACK</button><br><br>
					                	<button style="background-color:orange;height:50%;width:50%;color:black;font-size:30px" onclick="myFunN()"><b>ORDERS</b></button><br><br>
                            <button style="background-color:orange;height:50%;width:50%;color:black;font-size:30px" ><a style="color:black;font-size:30px" href="index.php" ><b>LOGOUT</a></b></button><br><br><br><br>
                   
        </div>
		 <script>
                                        function myFunY() {
                                            var x = document.getElementById("feedback");
											 var y = document.getElementById("orders");
											  var z = document.getElementById("msg");
											
                                                    x.style.display = "block";
													 y.style.display = "none";
													  z.style.display = "none";
                                        }
                                        function myFunN() {
                                                 var x = document.getElementById("feedback");
											 var y = document.getElementById("orders");
											  var z = document.getElementById("msg");
											
                                                    x.style.display = "none";
													 y.style.display = "block";
													  z.style.display = "none";
                                        }
                                    </script>
                                    
        <!--Editable details-->
        <div style="width:70%;height:50%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;color:black;margin-right:30px;background-color:#fff2e6;display:none;" id="feedback" class="w3-container">
        
         <h4 style="color:black">FEEDBACK</h4>
          <br><br>
          <?php 
  include './init.php';
  $stmt=$dbconnect->prepare('SELECT * FROM `feedback`');
  $stmt->execute();
  $result=$stmt->get_result();

 ?>
<style type="text/css">
body,html{
  width: 100%;
}
#tab,tr{
  width: 95%;
  margin: 0 auto;
}
  #tab td{
    width: 23%;
  }
    #tab th{
    width: 23%;
  }
</style>
<div class="">
     <table id="customers" class="" border="2px" style="width:95%" align="center">
          <tr>
              <th>Sl. NO.</th>
              <th>Name</th>
              <th>E-mail</th>
              <th>Feedback</th>
          </tr>
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

       </table>
    </div>
     <br><br>      
        </div>
		 <div style="width:70%;height:60%;float:right;border:2px solid rgb(241,129,58);margin-top:1%;margin-right:30px;background-color:#fff2e6;display:none"  id="orders" class="w3-container">
        
          <h4 style="color:black"><b>MAKE AN ORDER</b></h4><br>

          <?php 
          include './content/ordernext.php'; ?>
		  <form action="" method="POST">
		 <!--  Order Id:<input type="number" placeholder="Enter order Id" name="orderid" id="oid"></input><br><br> -->
		   Order Description:<input type="text" placeholder="Enter order Description" name="orderdes" id="odes" required></input><br><br>
		    Order quantity:<input type="number" placeholder="Enter order Quantity" name="orderq" id="oq" required></input><br><br>
			 Training Center Name:<input type="text" placeholder="Enter Traning Center Name" name="tcn" id="tcnq" required></input><br><br>
			  Delivery Date:<input type="date" max="2018-07-31" name="dd" id="od" required></input><br><br>
			 <center> <input type="submit" value="submit" name="send" style="background-color:black;color:white"></input><center><br>
           </form>
        </div>
		
		 <div style="width:70%;height:50%;float:right;border:2px solid rgb(241,129,58);margin-top:0%;position:relative;margin-bottom:100%;margin-right:30p;background-color:#fff2e6" id="msg" class="w3-container">
        
         <img src="images/update.jpg" style="width:100%;height:60%;"></img>
           
        </div>
		<div >
	<div class="container-fluid eh-footer" style="background-color:#251d13;color:white;position:absolute;margin-bottom:0%;margin-top:40%" >
     <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h4>Important Links</h4>
                <div class="footer-nav-left">
                    <ul>
                        <ul><li><a href="/content/dam/doitassets/Bhamashah/pdf/BhamashahFAQ.pdf" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">FAQ</span></a>



            </li><li><a href="http://bhamashah.rajasthan.gov.in/UserP/CampsSchedule.aspx" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Camps Schedule</span></a>



            </li><li><a href="http://bhamashah.rajasthan.gov.in/UserP/Tenders.aspx" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Tenders</span></a>



            </li><li><a href="/content/raj/bhamashah/en/screen-reader-access.html" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Screen Reader Access</span></a>



            </li></ul></ul>
                </div>
                <div class="footer-nav-right">
                    <ul>
                        <ul><li><a href="/content/raj/bhamashah/en/photo-gallery.html" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Photo Gallery</span></a>



            </li><li><a href="/content/raj/bhamashah/en/video-gallery.html" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Video Gallery</span></a>



            </li><li><a href="http://bhamashah.rajasthan.gov.in/UserP/ImpWebSites.aspx" target="_blank" style="font-size: 15px;"><span style="font-size: 14px;">Link to Important Websites</span></a>



            </li></ul></ul>
                </div>
            </div>
            
            
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 help-desk">
                <h4>Help Desk</h4>
                <a  style="font-size:20px"><i class="fa fa-phone" style="font-size:20px"></i> 1800-180-6127</a><br>
                <span class="time" style="font-size: 14px;">9:00 AM to 6:00 AM | Monday to Friday</span>
            </div>
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" contact="">
                <h4>Contact Us</h4>
                <div class="baseRichText">
    <p style="font-size: 15px;">IT Building, Yojana Bhawan Premises, Tilak Marg, C-Scheme, Jaipur, Rajasthan India - 302005,</p>
<p style="font-size: 15px;"><a rel="noopener noreferrer" href="tel:0141-4030695" style="font-size: 14px;">Landline : 0141-5166227,223,224</a>&nbsp;<br>
<a rel="noopener noreferrer" href="mailto:bhamashah@rajasthan.gov.in" style="font-size: 14px;">Email: bhamashah@rajasthan.gov.in</a></p>
<p style="font-size: 15px;">&nbsp;</p></div></div>
        </div>
        <div class="row copyright">
            <p class="col-xs-12" style="font-size: 15px;"><center>Copyright © 2016 Bhamashah Yojana, Government of Rajasthan, All rights reserved.</center> </p>
        </div>
    </div>
    <p class="scroll-button footer-scroll" style="font-size: 15px;">
        <a href="#section-1"><i class="fa fa-arrow-circle-o-up"></i></a>
    </p>
</footer></div>
			</body>
			</html>