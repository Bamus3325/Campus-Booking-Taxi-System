<?php include '_include/head.php';?>

<body class="loader-active">

    <?php include '_include/loader.php';?>


    <?php include '_include/header.php';?>


    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>PAYMENT HISTORY</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Your Payment History is shown below.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="lgoin-page-wrap" class="section-padding">
        <div class="table-responsive">
            <div class="col-lg-12 col-md-8 m-auto">
                <!-- <h2>Booking History </h2>
                <p>List History of Booked Taxi</p> -->
                <table class="table table-bordered">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Date</th>
            <th>Location</th>
            <th>Price</th>
            <th>Total Seat</th>
            <th>Total Amount</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'admin/connect.php';
            $email = $_SESSION['email'];
            // Fetch all bookings
            $query = mysqli_query($con, "SELECT * FROM booking_hist WHERE email = '$email' ORDER BY id DESC");
            $i = 1;
            while ($row = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['cdate']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td>&#x20A6; <?php echo $row['price']; ?></td>
            <td><?php echo $row['no_sit']; ?></td>
            <td>&#x20A6; <?php echo $row['t_price']; ?></td>
            <td>
                <?php
                if ($row['status'] == 0) {
                    ?>
                    <button style="padding: 5px 16px;
                   font-size: 14px;
                   font-weight: bold;
                   text-align: center;
                   text-decoration: none;
                   cursor: pointer;
                   border: none;
                   border-radius: 4px;
                   background-color: yellow;
                   color: #000; /* Text color */
                   transition: background-color 0.3s;"
    >⚠ pendind</button>

                    <?php
                }elseif ($row['status'] == 1) {
                    ?>
                    <button style="padding: 5px 16px;
                   font-size: 14px;
                   font-weight: bold;
                   text-align: center;
                   text-decoration: none;
                   cursor: pointer;
                   border: none;
                   border-radius: 4px;
                   background-color: green;
                   color: #fff; /* Text color */
                   transition: background-color 0.3s;"
    >✔ success</button>
                    <?php
                }else {
                    ?>
                    <button style="padding: 5px 16px;
                   font-size: 14px;
                   font-weight: bold;
                   text-align: center;
                   text-decoration: none;
                   cursor: pointer;
                   border: none;
                   border-radius: 4px;
                   background-color: #8B0000;
                   color: #fff; /* Text color */
                   transition: background-color 0.3s;"
    >❌ Denied </button>
                    <?php
                }
                ?>
                
                </td> 
        </tr>
        <?php
        $i++;
                }
                
        ?>
    </tbody>
</table>


            </div>

        </div>
        </div>
        </div>
    </section>


    <?php include '_include/footer.php';?>


    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>



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
        data-cf-beacon='{"rayId":"8931c1f68bf11c8f","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cardoor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:34:07 GMT -->

</html>