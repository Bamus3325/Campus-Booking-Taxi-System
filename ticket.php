<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Booking Ticket</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.ticket {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    width: 300px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: relative;
}

header {
    text-align: center;
    border-bottom: 2px solid #4CAF50;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

header h1 {
    margin: 0;
    color: #4CAF50;
}

.details {
    margin-bottom: 20px;
}

.details p {
    margin: 5px 0;
}

footer {
    text-align: center;
    font-size: 0.9em;
}

footer a {
    color: #4CAF50;
    text-decoration: none;
}

footer a:hover {
    text-decoration: underline;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px;
    margin: 5px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

button:hover {
    background-color: #45a049;
}

/* Print styles */
@media print {

    /* Hide everything except the ticket */
    body * {
        visibility: hidden;
    }

    #ticket,
    #ticket * {
        visibility: visible;
    }

    #ticket {
        position: absolute;
        left: 0;
        top: 0;
    }
}
.button-container {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center buttons horizontally */
            margin-top: 20px;
        }
</style>

<body>
    <?php
    include 'admin/connect.php';
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM booking_hist WHERE id = '$id'");
    $row = mysqli_fetch_array($query);


// Assume this is the fetched string from the database
$fetchedString = $row['location'];

// Split the string by the dash and trim any extra whitespace
$parts = array_map('trim', explode('-', $fetchedString));

$firstPart = $parts[0];
$secondPart = $parts[1];

// Check if the split operation resulted in exactly two parts
// if (count($parts) == 2) {
//     $firstPart = $parts[0];
//     $secondPart = $parts[1];
    
//     // Print the results
//     echo "First part: " . htmlspecialchars($firstPart) . "<br>";
//     echo "Second part: " . htmlspecialchars($secondPart) . "<br>";
// } else {
//     echo "Unexpected format";
// }
    ?>
    <div class="ticket" id="ticket">
        <header>
            <h1>Campus Shuttle</h1>
            <p>Thank you for booking with us!</p>
        </header>
        <section class="details">
            <p><strong>Booking ID:</strong> <?php echo $row['track_id']; ?></p>
            <p><strong>Amount:</strong>&#x20A6; <?php echo $row['t_price']; ?></p>
            <p><strong>Date:</strong> <?php echo $row['cdate']; ?></p>
            <p><strong>Pick-up Location:</strong> <?php echo $firstPart; ?></p>
            <p><strong>Drop-off Location:</strong> <?php echo $secondPart; ?></p>
        </section>
        <footer>
            <p>For inquiries, contact us at <a href="mailto:support@campushuttle.com">support@campushuttle.com</a></p>
        </footer>
        <div class="button-container">
            <button id="printButton">Print Ticket</button>
            <button id="downloadButton">Download as PDF</button>
            <button onclick="window.location.href='dashboard.php'">Back Home</button>
        </div>
        
    </div>

    <script>
    document.getElementById('printButton').addEventListener('click', () => {
        window.print();
    });

    document.getElementById('downloadButton').addEventListener('click', () => {
        const element = document.getElementById('ticket');
        html2pdf().from(element).save('ticket.pdf');
    });
    </script>
</body>

</html>