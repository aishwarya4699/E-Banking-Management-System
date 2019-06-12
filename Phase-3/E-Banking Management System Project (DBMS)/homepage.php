<!DOCTYPE html>
<html lang="en">
<title>Homepage</title>
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
    <a class="w3-bar-item w3-button w3-padding-large w3-white" href="homepage.php">Home</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="fin_summary.php">Financial Summary</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="transferFunds.php">Transfer Funds</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="FDPage.php">Fixed Deposits</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="RDpage.php">Recurring Deposits</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="loans.php">Loan Status</a>
    
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="changePasswordPage.php">Change Password</a>
    <a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="loginpage.php">Log Out</a>
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
  <h1 class="w3-margin w3-jumbo">Welcome John Doe</h1>
  <p class="w3-xlarge"></p>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">View Financial Summary</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>The right kind of investments in 2019</h1>
      <h5 class="w3-padding-32">The right kind of investments in 2019</h5>

      <p class="w3-text-grey">Stocks carry higher investment risks than bonds 
          or money market investments, but they also have historically realized higher 
          rates of return over longer holding periods (see chart). While past performance 
          doesn't guarantee future results, the higher return potential of stocks can make them 
          suitable investments for long-term investors seeking to build the value of their 
          portfolios or to stay ahead of inflation. Both of these objectives are critical 
          to investors with specific long-term goals in mind, such as saving for retirement.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Transfer Funds in the comfort of your home now.</h1>
      <h5 class="w3-padding-32"></h5>

      <p class="w3-text-grey">By our website, we help you transfer your finds safely and securely in 
          less time efficiently. Transfer of funds can now be done anywhere at anytime 
          according to you. We help customers with a secure and assuring way of transferring funds.
          E - funds transfer is the way to go about transferring funds in todays digital time.  
      </p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
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

