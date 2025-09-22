<?php include '_include/head.php';?>

<body class="loader-active">

<?php include '_include/loader.php';?>


<?php include '_include/header.php';?>


    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Our Taxi</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>We offers best, fast and reliable movement within the Campus.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                        <?php
                            include 'admin/connect.php';
                            $query = mysqli_query($con, "SELECT * FROM driver");
                            while ($row = mysqli_fetch_array($query)) {
                              ?>
                              

                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div>
                                      <img src="admin/drivers/<?php echo $row['image']; ?>">
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#"><?php echo $row['car_name']; ?></a></h2>
                                        <h5><?php echo $row['ass_locat']; ?></h5>
                                        <p>Contact us now for fast and reliance movement within the Campus.</p>
                                        <ul class="car-info-list">
                                            <li>AC</li>
                                            <li>Diesel</li>
                                            <li>Auto</li>
                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
                                        <a href="home.php" class="rent-btn">Book It</a>
                                    </div>
                                </div>
                            </div>

                              <?php
                            }
                                ?>

                        </div>
                    </div>

                    <!-- <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div> -->

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
        data-cf-beacon='{"rayId":"8931c1e63bce0a4d","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cardoor/car-without-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:34:04 GMT -->

</html>