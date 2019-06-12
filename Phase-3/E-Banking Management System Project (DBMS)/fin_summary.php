<!DOCTYPE html>
<html lang="en">
<title>Financial Summary</title>
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
  <h1 class="w3-margin w3-jumbo">Financial Summary</h1>
  <p class="w3-xlarge"></p>
  
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      
    
      <p class="w3-text-grey">
          <form>
              <h1><u>Financial Summary Details :</u></h1>
             <p><h2>Current account : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>    INR. 90,000</label></p></h2>
             <p><h2>Savings account :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <label>  INR. 50,000</label></p></h2>
              <p><h2>Recurring Deposits Mature Amount :&nbsp&nbsp&nbsp&nbsp&nbsp<label> INR. 20,000</label></p></h2>
              <p><h2>Fixed Deposits Mature Amount :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label> INR. 30,000</label></p></h2>
              <p><h2>Active Credit Cards totally billed amount :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <label> INR. 0</label></p></h2>
             <p><h2>Active Debit Cards totally billed amount : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label> INR. 0</label></p></h2>
                <br>
              
          </form>
      </p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
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

