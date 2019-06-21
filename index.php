<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Kennith Copeland Ministries</title>
  <meta name="description" content="CPPS LMS for KCM">
  <meta name="" content="">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/card-flip.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <?php include 'header/navigation_login.php'; ?>
  <?php include 'header/header.php'; ?>

  <div class="container-fluid descriptionBanner">
      <div class="text-center">
          <p class="descriptionContent">CPPS is the leading developer and provider of scalable training and consulting solutions in the U.S. for Workplace Violence Prevention, Active Shooter Response, and International Travel Safety. CPPS has worked together with thousands of organizations–large and small–to include over 50% of Fortune 100 corporations, over 1600 colleges and universities; 2000 hospitals and many of the largest non-profit/charitable organizations in the U.S.</p>
      </div>
  </div>

  <div class="wrapper">
    <?php
      //Include the When Lightning Strikes Module
      include 'courseCards/WLS_Module.php';
      //Include the FPDP Module
      include 'courseCards/FP_Module.php';
      //Include the Safe Passage Module
      include 'courseCards/SafePassage_Module.php';
      //Include the Beyond Lockdown Module
      include 'courseCards/BL_Module.php';
    ?>
  </div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
