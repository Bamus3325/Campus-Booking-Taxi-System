<?php
$id = $_GET['id'];
include 'connect.php';
$query = mysqli_query($con, "DELETE FROM location WHERE id ='$id'");
if ($query == TRUE) {
    echo "<script> alert('Lcation Deleted Successfully'); window.location='addlocation.php';</script>";
}else {
    echo "<script> alert('Lcation NOT Deleted Successfully'); window.location='addlocation.php';</script>";

}
?>