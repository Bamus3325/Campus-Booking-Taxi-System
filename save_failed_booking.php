<?php
include 'admin/connect.php'; // Ensure this path is correct

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from POST request
    $cdate = mysqli_real_escape_string($con, $_POST['cdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $track_id = mysqli_real_escape_string($con, $_POST['track_id']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $n_sit = mysqli_real_escape_string($con, $_POST['n_sit']);
    $total = mysqli_real_escape_string($con, $_POST['total']);

    // Construct the SQL query
    $query = "INSERT INTO booking_hist (cdate, email, location, track_id, price, no_sit, t_price) 
              VALUES ('$cdate', '$email', '$location', '$track_id', '$price', '$n_sit', '$total')";

    // Execute the query
    if (mysqli_query($con, $query)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => mysqli_error($con)]);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
