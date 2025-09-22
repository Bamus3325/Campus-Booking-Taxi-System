<?php
$id = $_GET['user'];
include 'connect.php';
$sql = "SELECT * FROM booking_hist WHERE id = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
if ($row['status'] == 0) {
    $query1 = mysqli_query($con, "UPDATE booking_hist SET status = '2' WHERE id='$id'");
    echo "<script> alert('Payment Denied ❌❌❌'); window.location='payhistory.php'; </script>";
   
}
?>