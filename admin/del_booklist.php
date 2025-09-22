<?php
$id = $_GET['id'];
include 'connect.php';
$query = mysqli_query( $con, "DELETE FROM booking_hist WHERE id = '$id'" );
if ($query == TRUE) {
    echo "<script>alert('Record Deleted Successful ✔✔✔'); window.location='booklist.php'; </script>";
}else {
    echo "<script>alert('Record Not Deleted Successful'); </script>";

}
?>

