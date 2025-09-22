<?php
include 'admin/connect.php';

$id = $_POST['id'];
$result= mysqli_query($con, "SELECT * FROM location WHERE id='$id'");
$row = mysqli_fetch_array($result);

$out = $row['amount'];
echo $out;

// $out = [
//     'amount' => $row['amount'],
//     'd_name' => $row['d_name'],
//     'd_no' => $row['d_no']
// ];

// echo json_encode($out);

?>