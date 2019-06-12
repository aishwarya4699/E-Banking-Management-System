<!DOCTYPE html>
<html lang="en">
<title>Loan Details</title>
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
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="fin_summary.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Financial Summary</a>
    <a href="transferFunds.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transfer Funds</a>
    <a href="FDPage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Fixed Deposits</a>
    <a href="RDpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Recurring Deposits</a>
    <a href="loans.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Loan status</a>
    <a href="changePasswordPage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Change Password</a>
    <a href="loginpage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large"></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"></a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Loan Details</h1>
  <p class="w3-xlarge"></p>
  
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird"> '
      
<?php  
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'dbms';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword);
$ok = mysqli_select_db( $conn, $dbName);
$someid = 1;
$query = "select loan_type, loan_amt, loan_tenure_yrs, loan_rate_perc from loans where loan_userid = $someid";
// $query = "select loan_type, loan_amt, loan_tenure_yrs, loan_rate_perc from loans where loan_userid = '" . $someid . "'";
$result = mysqli_query($conn, $query);
/*
if($result === FALSE) { 
  die(mysql_error()); // TODO: better error handling
}
*/

$row = mysqli_fetch_assoc($result);

      echo '<p class="w3-text-grey">
          
             <h1><u>Loan Details :</u></h1>
              <p><h2>Loan type :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label> '. $row ['loan_type'].'</label></p></h2>
             <p><h2>Loan Amount :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>INR '.$row ['loan_amt'].'</label></p></h2>
              <p><h2>Loan time :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>'.$row ['loan_tenure_yrs'].' years</label></p></h2>
              <p><h2>Loan Interest Rate :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>'.$row ['loan_rate_perc'].'%</label></p></h2>
              <br>';
?> 
          
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

