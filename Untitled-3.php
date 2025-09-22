<?php //session_start(); ?>
<?php
// Retrieve form data if it's set
$username = isset($_POST['username']) ? $_POST['username'] : '';
$location_id = isset($_POST['location']) ? $_POST['location'] : '';
$n_sit = isset($_POST['n_sit']) ? $_POST['n_sit'] : '';
$cdate = isset($_POST['cdate']) ? $_POST['cdate'] : '';
$total_price = isset($_POST['total']) ? $_POST['total'] : '';

// Validate form data as needed
// ...

// Fetch location details from database based on $location_id
include 'admin/connect.php';
if (!empty($location_id)) {
    $query_location = mysqli_query($con, "SELECT * FROM location WHERE id = '$location_id'");
    if ($query_location) {
        $row_location = mysqli_fetch_array($query_location);
        $location = $row_location['l_from'] . " - " . $row_location['l_to'];
        // Assuming 'price' is fetched from the database
        $price = $row_location['price']; // Adjust this according to your database structure
    } else {
        die("Error fetching location details: " . mysqli_error($con));
    }
}

// Continue with payment verification and database insertion
// ...
?>
