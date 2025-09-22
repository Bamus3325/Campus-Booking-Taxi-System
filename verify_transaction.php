<?php
$ref = $_GET['reference'];
$location = $_GET['location'];
$price = $_GET['price'];
$n_sit = $_GET['n_sit'];
$total = $_GET['total'];
$track_id = $_GET['track_id'];


if ($ref == ""){
    header("Location:javascript://history.go(-1)");
    exit;
}
?>
<?php
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: ",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $result = json_decode($response);
  }
  if($result->data->status == 'success'){
    $status = $result->data->status;
    $reference = $result->data->reference;
    $channel = $result->data->channel;    
    $ip_address = $result->data->ip_address;
    $email = $result->data->customer->email;
    $amount = $result->data->amount;
    date_default_timezone_set('Africa/Lagos');
    $cdate = date('m/d/Y h:i:s a', time());

    include 'admin/connect.php';
    $sql2 = $con->query("SELECT * FROM location WHERE id = '$location'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($sql2);
    $n_locat = $row['l_from']." - ".$row['l_to'];
    $sql = $con->query("INSERT INTO booking_hist(cdate, email, location, track_id, price, no_sit, t_price, amount_p, channel, reference_id, ip_address, status) 
                        VALUES('$cdate','$email','$n_locat','$track_id','$price','$n_sit','$total','$amount','$channel','$reference','$ip_address','1')") or die(mysqli_error($con));
    // $con->query("UPDATE product_detail SET prod_id = '$reference', status = '1' WHERE user='$email' and status='0'") or die(mysqli_error($con));

    if(!$sql){
        echo 'There is an error'.mysqli_error($con);
    }else{
      echo "<script> alert('Taxi Booked Successfully ✔️✔️✔️'); window.location='table.php'; </script>";
  }
    // else{
    //     header("Location:confirmation.php");
    //     exit;
    // }
    
  }else{
    header("Location:error.php");
    exit;
  }
?>