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
  
  $password = mysqli_real_escape_string($db, $_POST['password']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "username is required"); }
  
  if (empty($password)) { array_push($errors, "Password is required"); }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  //$user_check_query = "SELECT * FROM username WHERE name='$username' OR email='$email' LIMIT 1";
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
  //if (count($errors) == 0) {
  	//$password = $password_1;//encrypt the password before saving in the database

  	//$query = "INSERT INTO username (name, email, pass) 
  	//		  VALUES('$username', '$email', '$password')";
  	//mysqli_query($db, $query);
  	//$_SESSION['name'] = $username;
  	//$_SESSION['success'] = "You are now logged in";
  	//header('location: index1.php');
  }



if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query1="SELECT * FROM login WHERE login_username='$username' AND login_password='$password'";
	//printf($query1);
	if($query1)
		{
		 $results=mysqli_query($db, $query1);
		 if (mysqli_num_rows($results) == 1) {
		  $_SESSION['user_name'] = $username;
		  $_SESSION['success'] = "You are now logged in";
		  header('location: homepage.php');
			}	
		else {
				array_push($errors, "Wrong username/password combination");
			}
		}	 
	//$query = "SELECT * FROM login WHERE login_username='$username' AND login_password='$password'";
	//if($query)
	//{
		//printf($query);
		//$results = mysqli_query($db, $query);
		//$a=mysqli_num_rows($results);
		//echo $results;
		//if (mysqli_num_rows($results) == 1) {
		  //$_SESSION['login_username'] = $username;
		  //$_SESSION['success'] = "You are now logged in";
		  //header('location: homepage.php');
		//}
		//else {
				//array_push($errors, "");
			//}
			
	//}
		
//}
}
}

?>