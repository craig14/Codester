<?php 
session_start();
// if(!isset($_SESSION['username'])){
// header("Location: trainerlogin.php");
// die();

// }

// if(!isset($_SESSION['bid'])){
// header("Location: login.php");
// die();

// }
session_destroy();
header("Location: index.php");

 ?>