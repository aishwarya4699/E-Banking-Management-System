<?php include('tfserver.php') ?>
<!DOCTYPE html>
<html lang="en">
<title>Transfer Funds</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="fin_summary.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Financial Summary</a>
    <a href="transferFunds.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transfer Funds</a>
    <a href="FDPage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Fixed Deposits</a>
    <a href="RDpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Recurring Deposits</a>
    <a href="loans.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Loan Status</a>
    
    <a href="changePasswordPage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Change Password</a>
    <a href="loginpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Transfer Funds</h1>
  <p class="w3-xlarge"></p>
</header>

<!-- First Grid -->
<div class="">
  <div class="w3-content">
   <!-- <div class="w3-twothird"> -->
    <form action = "transferFunds.php" method = "POST">
      <label><h2>From account number:</h2></label>
      <input type = "number" name= "from_accno" required>
      <h2>From customer ID :</h2>
      <input type = "number" name= "from_id" required>
      <h2>To account number :</h2>
      <input type = "number" name= "to_accno" required>
      <h2>To customer ID :</h2>
      <input type = "number" name= "to_id" required>
      <label><h2>Amount :</h2></label>
      <input type = "number" name= "amt" required>
      <h2><div class="input-group">
					<button type="submit" class="btn" name="reg_user">Transfer</button>
				</div>
    </form>  
  </div>
</div>

<!-- Second Grid -->
<div class="">
  <div class="w3-content">

    <div class="w3-twothird">
        <!-- <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top"></button> -->
      <p class="w3-text-grey"></p>
    </div>
  </div>
</div>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <hr>
    <h1 class="w3-margin w3-xlarge">Compound Your Wealth With Us Everyday</h1>
</div>

<!-- Footer
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div> -->
 <p>Powered by <a href="https://www.netbanking.com" target="_blank">netbanking</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>

