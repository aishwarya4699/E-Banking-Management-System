<?php
session_start();

// initializing variables
$login_id = "";
  
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'dbms');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $old_password = mysqli_real_escape_string($db, $_POST['old_password']);
  
  $new_password = mysqli_real_escape_string($db, $_POST['new_password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($old_password)) { array_push($errors, "old password is required"); }
  
  if (empty($new_password)) { array_push($errors, "new Password is required"); }
  if (empty($confirm_password)) { array_push($errors, "confirm new Password is required"); }
  
  if($confirm_password!=$new_password){
	array_push($errors, "The two passwords do not match");}

echo"hwy";
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  //$user_check_query = "SELECT * FROM login WHERE login_password='$old_password' ;
  //$result = mysqli_query($db, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
  
  //if ($user) { // if user exists
    //if ($user['name'] === $username) {
      //array_push($errors, "Username already exists");
    //}

    //if ($user['email'] === $email) {
      //array_push($errors, "email already exists");
    //}
  //}

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
	$pass = $new_password;//encrypt the password before saving in the database
echo 'hey';
  	$query = "UPDATE login
             SET login_password ='$pass' WHERE login_username = '$username'";
     printf($query);
  
  	mysqli_query($db, $query);
$_SESSION['login_username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: homepage.php');
  	
  }
}






/*if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM username WHERE name='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password_1;//encrypt the password before saving in the database

  	$query = "INSERT INTO username (name, email, pass) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index1.php');
  }
}
*/

?>