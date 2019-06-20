<?php
  session_start(); /* Starts the session */
  session_destroy(); /* Destroy started session */
  header("location:login_w3.php");  /* Redirect to login page */
  exit;
?>
