<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<title>Login</title>
<style>

        html, body
        {
            height: 100%;
        }
        
        body
        {
            font: 12px 'Lucida Sans Unicode', 'Trebuchet MS', Arial, Helvetica;    
            margin: 0;
            background-color: #d9dee2;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#ebeef2), to(#d9dee2));
            background-image: -webkit-linear-gradient(top, #ebeef2, #d9dee2);
            background-image: -moz-linear-gradient(top, #ebeef2, #d9dee2);
            background-image: -ms-linear-gradient(top, #ebeef2, #d9dee2);
            background-image: -o-linear-gradient(top, #ebeef2, #d9dee2);
            background-image: linear-gradient(top, #ebeef2, #d9dee2);    
        }
        
        /*--------------------*/
        
        #login
        {
            background-color: #fff;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));
            background-image: -webkit-linear-gradient(top, #fff, #eee);
            background-image: -moz-linear-gradient(top, #fff, #eee);
            background-image: -ms-linear-gradient(top, #fff, #eee);
            background-image: -o-linear-gradient(top, #fff, #eee);
            background-image: linear-gradient(top, #fff, #eee);  
            height: 400px;
            width: 500px;
            margin: -150px 0 0 -230px;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 0;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;  
            -webkit-box-shadow:
                  0 0 2px rgba(0, 0, 0, 0.2),
                  0 1px 1px rgba(0, 0, 0, .2),
                  0 3px 0 #fff,
                  0 4px 0 rgba(0, 0, 0, .2),
                  0 6px 0 #fff,  
                  0 7px 0 rgba(0, 0, 0, .2);
            -moz-box-shadow:
                  0 0 2px rgba(0, 0, 0, 0.2),  
                  1px 1px   0 rgba(0,   0,   0,   .1),
                  3px 3px   0 rgba(255, 255, 255, 1),
                  4px 4px   0 rgba(0,   0,   0,   .1),
                  6px 6px   0 rgba(255, 255, 255, 1),  
                  7px 7px   0 rgba(0,   0,   0,   .1);
            box-shadow:
                  0 0 2px rgba(0, 0, 0, 0.2),  
                  0 1px 1px rgba(0, 0, 0, .2),
                  0 3px 0 #fff,
                  0 4px 0 rgba(0, 0, 0, .2),
                  0 6px 0 #fff,  
                  0 7px 0 rgba(0, 0, 0, .2);
        }
        
        #login:before
        {
            content: '';
            position: absolute;
            z-index: -1;
            border: 1px dashed #ccc;
            top: 2px;
            bottom: 2px;
            left: 2px;
            right: 2px;
            -moz-box-shadow: 0 0 0 1px #fff;
            -webkit-box-shadow: 0 0 0 1px #fff;
            box-shadow: 0 0 0 1px #fff;
        }
        
        /*--------------------*/
        
        h1
        {
            text-shadow: 0 1px 0 rgba(255, 255, 255, .7), 0px 2px 0 rgba(0, 0, 0, .5);
            text-transform: uppercase;
            text-align: center;
            color: #666;
            margin: 0 0 30px 0;
            letter-spacing: 4px;
            font: normal 26px/1 Verdana, Helvetica;
            position: relative;
        }
        
        h1:after, h1:before
        {
            background-color: #777;
            content: "";
            height: 1px;
            position: absolute;
            top: 15px;
            width: 120px;   
        }
        
        h1:after
        { 
            background-image: -webkit-gradient(linear, left top, right top, from(#777), to(#fff));
            background-image: -webkit-linear-gradient(left, #777, #fff);
            background-image: -moz-linear-gradient(left, #777, #fff);
            background-image: -ms-linear-gradient(left, #777, #fff);
            background-image: -o-linear-gradient(left, #777, #fff);
            background-image: linear-gradient(left, #777, #fff);      
            right: 0;
        }
        
        h1:before
        {
            background-image: -webkit-gradient(linear, right top, left top, from(#777), to(#fff));
            background-image: -webkit-linear-gradient(right, #777, #fff);
            background-image: -moz-linear-gradient(right, #777, #fff);
            background-image: -ms-linear-gradient(right, #777, #fff);
            background-image: -o-linear-gradient(right, #777, #fff);
            background-image: linear-gradient(right, #777, #fff);
            left: 0;
        }
        
        /*--------------------*/
        
        fieldset
        {
            border: 0;
            padding: 0;
            margin: 0;
        }
        
        /*--------------------*/
        
        #inputs input
        {
            background: #f1f1f1 url(/dist/uploads/2011/09/login-sprite.png) no-repeat;
            padding: 15px 15px 15px 30px;
            margin: 0 0 10px 0;
            width: 353px; /* 353 + 2 + 45 = 400 */
            border: 1px solid #ccc;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
            -webkit-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
            box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
        }
        
        #username
        {
            background-position: 5px -2px !important;
        }
        
        #password
        {
            background-position: 5px -52px !important;
        }
        
        #inputs input:focus
        {
            background-color: #fff;
            border-color: #e8c291;
            outline: none;
            -moz-box-shadow: 0 0 0 1px #e8c291 inset;
            -webkit-box-shadow: 0 0 0 1px #e8c291 inset;
            box-shadow: 0 0 0 1px #e8c291 inset;
        }
        
        /*--------------------*/
        #actions
        {
            margin: 20px 0 0 0;
        }
        
        #submit
        {		
            background-color: #ffb94b;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#fddb6f), to(#ffb94b));
            background-image: -webkit-linear-gradient(top, #fddb6f, #ffb94b);
            background-image: -moz-linear-gradient(top, #fddb6f, #ffb94b);
            background-image: -ms-linear-gradient(top, #fddb6f, #ffb94b);
            background-image: -o-linear-gradient(top, #fddb6f, #ffb94b);
            background-image: linear-gradient(top, #fddb6f, #ffb94b);
            
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            
            text-shadow: 0 1px 0 rgba(255,255,255,0.5);
            
             -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
             -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
             box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;    
            
            border-width: 1px;
            border-style: solid;
            border-color: #d69e31 #e3a037 #d5982d #e3a037;
        
            float: left;
            height: 35px;
            padding: 0;
            width: 120px;
            cursor: pointer;
            font: bold 15px Arial, Helvetica;
            color: #8f5a0a;
        }
        
        #submit:hover,#submit:focus
        {		
            background-color: #fddb6f;
            background-image: -webkit-gradient(linear, left top, left bottom, from(#ffb94b), to(#fddb6f));
            background-image: -webkit-linear-gradient(top, #ffb94b, #fddb6f);
            background-image: -moz-linear-gradient(top, #ffb94b, #fddb6f);
            background-image: -ms-linear-gradient(top, #ffb94b, #fddb6f);
            background-image: -o-linear-gradient(top, #ffb94b, #fddb6f);
            background-image: linear-gradient(top, #ffb94b, #fddb6f);
        }	
        
        #submit:active
        {		
            outline: none;
           
             -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
             -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
             box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;		
        }
        
        #submit::-moz-focus-inner
        {
          border: none;
        }
        
        #actions a
        {
            color: #3151A2;    
            float: right;
            line-height: 35px;
            margin-left: 10px;
        }
        
        /*--------------------*/
        
        #back
        {
            display: block;
            text-align: center;
            position: relative;
            top: 60px;
            color: #999;
        }
        
        .w3-margin w3-jumbo 
        {color: white}
        
        
        
        </style>
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

<!-- Navbar 
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Financial Summary</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Transfer Funds</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Fixed Deposits</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Recurring Deposits</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Loan Status</a>
    
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Change Password</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
  </div> -->

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
  <h1 class="w3-margin w3-jumbo" style="color:white;">Welcome to Netbanking...</h1>
  <p class="w3-xlarge"></p>
  
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1></h1>
      <form id="login" method="post" action="loginpage.php">
			<?php include('error.php'); ?>
            <h1>Login </h1>
            <fieldset id="inputs">
                <input  type="text" placeholder="Username"  name="username" autofocus required>   
                <input type="password" placeholder="Password" name="password" required>
               
            </fieldset>
            <div class="input-group">
				<button type="submit" class="btn" name="login_user">Submit</button>
			</div>
            <a href="/slick-login-form-with-html5-css3" id="back"></a>
        </form>
      

      
    </div>

    <!-- <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div> -->
  </div>
</div>

<!-- Second Grid 
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      
      <h5 class="w3-padding-32"></h5>

      
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Compound Your Wealth With Us Everyday</h1>
</div> -->

<!-- Footer
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div> 
 <p>Powered by <a href="https://www.netbanking.com" target="_blank">netbanking</a></p> -->
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

