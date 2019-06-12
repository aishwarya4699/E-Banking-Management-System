<?php
session_start();
  $errors = array(); 

  $db = mysqli_connect('localhost', 'root', 'root', 'dbms');


if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
  $dep_name = mysqli_real_escape_string($db, $_POST['dep_name']);
  $dep_amt = mysqli_real_escape_string($db, $_POST['amount']);
  $dep_tenure = mysqli_real_escape_string($db, $_POST['time']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  if (empty($dep_name)) { array_push($errors, "Deposit name is required"); }
  if (empty($dep_amt)) { array_push($errors, "Deposit Amount is required"); }
  if (empty($dep_tenure)) { array_push($errors, "Deposit tenure is required"); }
 

  $query2 = "select MAX(dep_id) as m from deposits; ";
  $result1 = mysqli_query($db, $query2);
  while($row1 =mysqli_fetch_array($result1)) {
	$user1 = $row1['m'];
	break;
  }
  
  $query3 = "select MAX(depuser_id) as m from deposits; ";
  $result2 = mysqli_query($db, $query3);
  while($row2 =mysqli_fetch_array($result2)) {
	$user2 = $row2['m'];
	break;
  }
  $dep_id = intval($user1);
  $dep_id = $dep_id + 1;
  $depuser_id = intval($user2);
  $depuser_id = $depuser_id + 1;
  $dep_type = 'fixed' ;
  
  if (count($errors) == 0) {
  	

  	$query = "INSERT INTO deposits (dep_id, dep_name, dep_amt, dep_type, dep_tenure, depuser_id)
  			  VALUES('".$dep_id."', '".$dep_name."', '".$dep_amt."', '".$dep_type."', '".$dep_tenure."', '".$depuser_id."');";
  	mysqli_query($db, $query);
  	
  	header('location: homepage.php');
  }
}
?>