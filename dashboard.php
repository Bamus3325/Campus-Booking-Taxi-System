<?php include '_include/head.php';?>
<!-- <script src='https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js'>
</script> -->
<script type='text/javascript' src='jquery.js'>
</script>
<style>
.price-input {
    position: relative;
    display: inline-block;
}

.price-input input[type="number"] {
    padding-left: 20px;
}

.price-input .icon {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    cursor: pointer;
}
.input-group {
    position: relative;
    display: flex;
}

.input-group input[type="text"] {
    padding-left: 5px;
}
.input-group-addon {
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    padding: .375rem .75rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    
}
</style>

<body class="loader-active">

    <?php include '_include/loader.php';?>


    <?php include '_include/header.php';?>

    <?php
                // include 'admin/connect.php';

                // if (isset($_POST['submit'])) {
                //   $username = mysqli_real_escape_string($con, $_POST['username']);
                //   $location = mysqli_real_escape_string($con, $_POST['location']);
                //   $n_sit = mysqli_real_escape_string($con, $_POST['n_sit']);
                //   $cdate = mysqli_real_escape_string($con, $_POST['cdate']);
                //   $price = mysqli_real_escape_string($con, $_POST['price']);
                //   $t_price = mysqli_real_escape_string($con, $_POST['t_price']);
                  
                //   $query = mysqli_query($con, "INSERT INTO booking_hist(cdate, username, location, no_sit, t_price) 
                //   VALUES('$cdate','$username','$location','$n_sit','$t_price')");
                //   if ($query == TRUE) {
                //     echo "<script> alert('Taxi Booked Successfully ✔️✔️✔️'); window.location='index.php'; </script>";
                //   }else {
                //     echo "<script> alert('Taxi NOT Booked');</script>";
                   
                //   }
                //   }
                
    ?>
    <section id="slider-area">

        <div class="single-slide-item overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="book-a-car">
                        <form action="verify_transaction.php" method="POST" onkeyup="calc();">

                                <div class="book-button text-center">
                                    <p class="book-now-btn">Make Reservation</p>
                                </div><br><br>
                                <div class="pick-up-date book-item">
                                    <input type="text" name="username" value="<?php echo $_SESSION['email']; ?>"  hidden/>
                                </div>

                                <div class="choose-car-type book-item">
                                    <h4>CHOOSE LOCATION:</h4>
                                    <select class="custom-select" name="location" id="locate" required>
                                        <option value=''>Select Location</option>
                                        <?php
                                        include 'admin/connect.php';
                                        $query = mysqli_query($con, "SELECT * FROM location");                                        
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                        <option value="<?php echo $row['id'];?>">
                                            <?php echo $row['l_from']." - ".$row['l_to']; ?></option>
                                        <?php
                                        }
                                        
                                        ?>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="pick-up-date book-item">
                                            <h4>Price:</h4>
                                            <div class="price-input">
                                                <span class="icon" onclick="pass()">&#x20A6;</span>
                                                <input type="number" name="t_price" id='price' readonly />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="pick-up-date book-item">
                                            <h4>NO OF SEAT:</h4>
                                            <input type="number" name="n_sit" id='n_sit' required />
                                        </div>
                                    </div>
                                </div>

                                <div class="pick-up-date book-item">
                                    <h4>Date:</h4>
                                    <input type="datetime-local" name="cdate" id="cdate" required />
                                </div>
                                <div class="pick-up-date book-item">
                                    <h4>Total Price:</h4>
                                    <div class="input-group">
                                        <span class="input-group-addon">&#x20A6;</span>
                                        <input type="text" name="total" id="total" readonly />
                                    </div>
                                </div>

                                <!-- <div class="pick-up-date book-item">
                                    <h4>Driver Name:</h4>
                                    <input type="number" name="t_price" id="d_name" required />
                                </div>
                                <div class="pick-up-date book-item">
                                    <h4>Driver Number:</h4>
                                    <input type="number" name="t_price" id="d_num" required />
                                </div> -->
                                <?php
                                $t = "TRA";
                                $d = date('Y');
                                $r = rand(1000, 9999);
                                $tra = $t.'/'.$d.'/'.$r;
                                ?>
                                <div class="pick-up-date book-item">
                                    <!-- <h4>TRACK ID</h4> -->
                                    <input type="hidden" id="track_id" name="track_id" value="<?php echo $tra; ?>" required />
                                </div> 

                                <div class="book-button text-center">
                                <script src="https://js.paystack.co/v1/inline.js"></script>
                                        <button type="submit" name="submit" onclick="payWithPaystack()"
                                        class="book-now-btn">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7 text-right">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="slider-right-text">
                                    <?php
                                    include 'admin/connect.php';
                                    $email = $_SESSION['email'];
                                    $u_r = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
                                    $user = mysqli_fetch_array($u_r);
                                    ?>
                                    <h1>Hi!&nbsp;<?php echo $user['u_name']; ?></h1>
                                    <h1>BOOK A Taxi TODAY!</h1>
                                    <p>FOR AS LOW AS &#x20A6;100, TRY US NOW <br> WE ARE FAST AND RELIABLE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About us</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>Campus taxis provide essential transportation services within university grounds, ensuring convenient mobility for students, faculty, and staff. Operating on designated routes or on-demand, these services often utilize eco-friendly vehicles, promoting sustainability. They enhance campus accessibility, especially for those with mobility challenges, offering a safe and reliable alternative to walking long distances. Often integrated with campus security, these taxis prioritize passenger safety and efficiency. With user-friendly booking apps or phone systems, they streamline scheduling and pickups, catering to the diverse needs of a bustling academic community. In essence, campus taxis play a pivotal role in facilitating seamless transportation solutions within educational environments.</p>
                                <div class="about-btn">
                                    <a href="dashboard.php">Book a Car</a>
                                    <a href="contact.php">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe
                            src="https://player.vimeo.com/video/121982328?title=0&amp;byline=0&amp;portrait=0"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>


                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>


                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>


                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>


                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>


                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>


                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-4 text-center">
                    <div class="service-item">
                        <i class="fa fa-taxi"></i>
                        <h3>RENTAL CAR</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                    </div>
                </div>


                <div class="col-lg-4 text-center">
                    <div class="service-item">
                        <i class="fa fa-cog"></i>
                        <h3>CAR REPAIR</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                    </div>
                </div>


                <div class="col-lg-4 text-center">
                    <div class="service-item">
                        <i class="fa fa-map-marker"></i>
                        <h3>TAXI SERVICE</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                    </div>
                </div>


                <div class="col-lg-4 text-center">
                    <div class="service-item">
                        <i class="fa fa-life-ring"></i>
                        <h3>life insurance</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                    </div>
                </div>


                <div class="col-lg-4 text-center">
                    <div class="service-item">
                        <i class="fa fa-bath"></i>
                        <h3>car wash</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                    </div>
                </div>


                <div class="col-lg-4 text-center">
                    <div class="service-item">
                        <i class="fa fa-phone"></i>
                        <h3>call driver</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit admollitia.</p> -->
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">

                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-smile-o"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">550</span>+</p>
                                        <h4>HAPPY CLIENTS</h4>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">250</span>+</p>
                                        <h4>CARS IN STOCK</h4>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">50</span>+</p>
                                        <h4>office in cities</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <?php include '_include/footer.php'; ?>


    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>

    <script>
    function calc() {
        var price = document.getElementById('price');
        var n_sit = document.getElementById('n_sit');
        var tota = document.getElementById('total');


        tota.value = price.value * n_sit.value;
        document.getElementById('total').innerHTML = tota;

    }
    </script>

    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <script src="assets/js/jquery-migrate.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/plugins/gijgo.js"></script>

    <script src="assets/js/plugins/vegas.min.js"></script>

    <script src="assets/js/plugins/isotope.min.js"></script>

    <script src="assets/js/plugins/owl.carousel.min.js"></script>

    <script src="assets/js/plugins/waypoints.min.js"></script>

    <script src="assets/js/plugins/counterup.min.js"></script>

    <script src="assets/js/plugins/mb.YTPlayer.js"></script>

    <script src="assets/js/plugins/magnific-popup.min.js"></script>

    <script src="assets/js/plugins/slicknav.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8931c195ec750a4d","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>


    <script>
    $(document).ready(function() {
        $('#locate').change(function() {
            var stdid = $('#locate').val();


            $.ajax({
                type: "POST",
                url: "fetch.php",
                data: {
                    id: stdid
                },
                success: function(data) {

                    $('#price').val(data);
                    // $('#price').val(data.amount);
                    // $('#d_name').val(data.d_name);
                    // $('#d_num').val(data.d_no);

                },
                error: function() {
                    alert('Error fetching data.');
                }
            });



        });
    });
    </script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cardoor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:33:43 GMT -->

</html>
<script>
function payWithPaystack() {
    var location = document.getElementById("locate").value;
    var price = document.getElementById("price").value;
    var n_sit = document.getElementById("n_sit").value;
    var cdate = document.getElementById("cdate").value;
    var total = document.getElementById("total").value;
    var track_id = document.getElementById("track_id").value;
    var email = '<?php echo $_SESSION['email']; ?>';

    var handler = PaystackPop.setup({
        key: 'pk_live_7d28b77f409c1d36b942dd67b3f302ffe34772a9',
        email: email,
        amount: total * 100,
        currency: "NGN",
        ref: 'MY' + Math.floor((Math.random() * 1000000000) + 1),

        callback: function(response) {
            // On successful payment, redirect to the verification page
            window.location.href = 'verify_transaction.php?reference=' + response.reference + '&location=' + location + '&price=' + price + '&n_sit=' + n_sit + '&cdate=' + cdate + '&total=' + total + '&track_id=' + track_id;
        },
        onClose: function() {
            // When the user closes the payment window
            // Trigger AJAX request to insert booking data into the database
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'save_failed_booking.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle response if needed
                    console.log(xhr.responseText);
                }
            };
            xhr.send('cdate=' + encodeURIComponent(cdate) +
                     '&email=' + encodeURIComponent(email) +
                     '&location=' + encodeURIComponent(location) +
                     '&track_id=' + encodeURIComponent(track_id) +
                     '&price=' + encodeURIComponent(price) +
                     '&n_sit=' + encodeURIComponent(n_sit) +
                     '&total=' + encodeURIComponent(total));
            alert('Payment window closed.');
        }
    });
    handler.openIframe();
}
</script>

<!-- <script>
function payWithPaystack() {
    var location = document.getElementById("locate").value;
    var price = document.getElementById("price").value;
    var n_sit = document.getElementById("n_sit").value;
    var cdate = document.getElementById("cdate").value;
    var total = document.getElementById("total").value;
    var track_id = document.getElementById("track_id").value;

    var handler = PaystackPop.setup({
        key: 'pk_test_b04fbb7505efdf5918fcc2e3ff69c3614feb4503', // pk_live_7d28b77f409c1d36b942dd67b3f302ffe34772a9
        //   $use = $_SESSION['email'];
        email: '<?php //echo $_SESSION['email']; ?>',
        amount: document.getElementById("total").value * 100,
        currency: "NGN",
        ref: 'MY' + Math.floor((Math.random() * 1000000000) + 1
        ), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

        callback: function(response) {
            let message = 'Payment Completed! ref is ' + response.reference;
            // alert(message);
            window.location = 'verify_transaction.php?reference=' + response.reference + '&location=' + location + '&price=' + price + '&n_sit=' + n_sit + '&cdate=' + cdate + '&total=' + total + '&track_id=' + track_id;
            //document.write('<?php // include 'connect.php'; $conn->query("UPDATE student SET payment = 1 WHERE email='$email'") or die(mysqli_error($conn)); ?>');
        },
        onClose: function() {
            document.write('<?php  //include 'admin/connect.php'; $con->query("INSERT INTO booking_hist(cdate, email, location, track_id, price, no_sit, t_price, amount_p,) 
                        //VALUES('$cdate','$email','$n_locat','$track_id','$price','$n_sit','$total','$amount')") or die(mysqli_error($conn)); ?>');
            alert('window closed');
            
        }
    });
    handler.openIframe();
}
</script> -->