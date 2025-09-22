<?php
$id = $_GET['id'];
include 'connect.php';
$query = mysqli_query($con, "DELETE FROM users WHERE id ='$id'");
if ($query == TRUE) {
    echo "<script> alert('User Deleted Successfully'); window.location='user_list.php';</script>";
}else {
    echo "<script> alert('User NOT Deleted Successfully'); window.location='user_list.php';</script>";

}
?>