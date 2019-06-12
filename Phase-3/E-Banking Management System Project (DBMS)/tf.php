<!-- makes connection to database from website -->
<?php
session_start();
  $conn = mysqli_connect('localhost', 'root', 'root', 'dbms');

// getting form values
// $id = (isset($_POST['id']) ? $_POST['id'] : '');
$facn = (int)$_POST['from_acc_no'];//? $_POST['from_acc_no']: 0);
echo "$facn";
$fcustid = $_POST['from_cust_id'];//? $_POST['from_cust_id']: 0);
$tacn = $_POST['to_acc_no'];//? $_POST['to_acc_no']: 0);
$tcustid = ($_POST['to_cust_id']);//? $_POST['to_cust_id']: 0);
$amt = $_POST['amt'];//? $_POST['amt']: 0);
$type = 'rtg';

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'dbms';

 



// get acc balances
$sql1 = "select acc_balance from account where acc_no = '$facn'";
$result1 = mysqli_query($conn, $sql1);
$amt1 = (int)mysqli_fetch_assoc($result1);

$sql2 = "select acc_balance from account where acc_no = '$tacn'";
$result2 = mysqli_query($conn, $sql2);
$amt2 =(int) mysqli_fetch_assoc($result2);

// calc new balances and update it in accounts table
$amt1 = $amt1 - $amt;
$amt2 = $amt2 + $amt;
 $query3 = "select MAX(tf_id) as m from fund_transfer; ";
  $result2 = mysqli_query($conn, $query3);
  while($row2 =mysqli_fetch_array($result2)) {
	$user2 = $row2['m'];
	break;
  }
  $tf_id = intval($user2);
  $tf_id = $tf_id + 1;

$sql3 = "update account set acc_balance = '$amt1' where acc_no = '$facn'";
$result3 = mysqli_query($conn, $sql3);

if(!$result3) 
{
    echo "update unsuccessful for sender";
}

$sql4 = "update account set acc_balance = '$amt2' where acc_no = '$tacn'";
$result4 = mysqli_query($conn, $sql4);

if(!$result4) 
{
    echo "update unsuccessful for reciever";
}

// insert trasaction into trasaction table
$sql5 = "insert into fund_transfer(tf_id, tf_name, tf_sender_accno, tf_senderid, tf_reciever_accno, tf_recieverid, tf_amt) values('".$tf_id."',".$type.",'$facn', '$fcustid', '$tacn', '$tcustid', '$amt')";
$result5 = mysqli_query($conn, $sql5);


// re-direct to homepage after 2 seconds ! include if want this feauture
//header("location: homepage.php")

?>