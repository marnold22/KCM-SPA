<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#loginModal").modal('show');
      });
  </script>
</head>

<style>
body {
  background-image: url("assets/images/blue_bkg.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<body>

    <div class="w3-container">
      <div id="loginModal" class="w3-modal" data-keyboard="false" data-backdrop="static">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <img src="/assets/images/cppslogo.png" alt="Avatar" style="width:30%" class=" w3-margin-top">
          </div>

          <form class="w3-container" action="" method="post" name="Login_Form">
            <div class="w3-section">
              <?php if(isset($msg)){?>
                <p><?php echo $msg;?></p>
              <?php } ?>

              <label><b>Username</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="Username" required>
              <label><b>Password</b></label>
              <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="Password" required>
              <input class="w3-button w3-block w3-dark-grey w3-section w3-padding" value="Login" name="Submit" type="submit">
            </div>
          </form>

        </div>
      </div>
    </div>

</body>
<!-- ++++++++++++++++++++++++++++++++++++ PHP STUFF HERE ++++++++++++++++++++++++++++++++++++ -->

<?php
session_start(); /* Starts the session */
/* Check Login form submitted */
if(isset($_POST['Submit'])){
/* Define username and associated password array */
$logins = array('' => '');

/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */
if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */
$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>
