<?php
session_start();
  $errors = array(); 

  $db = mysqli_connect('localhost', 'root', 'root', 'dbms');


if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  
  $from_accno = mysqli_real_escape_string($db, $_POST['from_accno']);
  $from_id = mysqli_real_escape_string($db, $_POST['from_id']);
  $to_accno = mysqli_real_escape_string($db, $_POST['to_accno']);
  $to_id = mysqli_real_escape_string($db, $_POST['to_id']);
  $amt = mysqli_real_escape_string($db, $_POST['amt']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array

  if (empty($from_accno)) { array_push($errors, "Sender Account No is required"); }
  if (empty($from_id)) { array_push($errors, "Sender ID is required"); }
  if (empty($to_accno)) { array_push($errors, "Reciever Account NO is required"); }
  if (empty($to_id)) { array_push($errors, "Reciever ID is required"); }
  if (empty($amt)) { array_push($errors, "Transfer Amount is required"); }
 

  $query2 = "select MAX(tf_id) as m from fund_transfer; ";
  $result1 = mysqli_query($db, $query2);
  while($row1 =mysqli_fetch_array($result1)) {
	$user1 = $row1['m'];
	break;
  }
  
  
  $tf_id = intval($user1);
  $tf_id = $tf_id + 1;
 
  $tf_name = 'nft' ;
  
  if (count($errors) == 0) {
  	

  	$query = "insert into fund_transfer(tf_id, tf_name, tf_sender_accno, tf_senderid, tf_reciever_accno, tf_recieverid, tf_amt) 
	          values('".$tf_id."','".$tf_name."','".$from_accno."', '".$from_id."', '".$to_accno."', '".$to_id."', '".$amt."')";
  	mysqli_query($db, $query);
  	
  	header('location: homepage.php');
  }
}
?>