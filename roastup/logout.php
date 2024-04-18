<?php
if (session_status() == PHP_SESSION_NONE) {
  // Start the session
  session_start();
}
$_SESSION['mail']="";
$_SESSION['log']=false;
header("Location:login.php");

?>
