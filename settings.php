<?php include '_include/head.php';?>

<body class="loader-active">

    <?php include '_include/loader.php';?>


    <?php include '_include/header.php';?>


    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>SETTINGS</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Edit your Details here.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
$id = $_SESSION['email'];
include 'admin/connect.php';
$query = mysqli_query( $con, "SELECT * FROM users WHERE email = '$id'" );
$row = mysqli_fetch_array($query);

if(isset($_POST['submit'])){

	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
	$cur_pass = mysqli_real_escape_string($con, $_POST['cur_pass']);
	$new_pass = mysqli_real_escape_string($con, $_POST['new_pass']);
	
	$sql = "UPDATE users SET lname = '$lname', fname = '$fname', u_name = '$username', pass = '$new_pass' WHERE email = '$id'";
	$query = mysqli_query($con, $sql);

	if ($query == TRUE) {
		echo "<script>alert('Details Updated Successful ✔✔✔'); window.location='dashboard.php'; </script>";
	}else {
		echo "<script>alert('Details Not Updated'); </script>";

	}
}

?>
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text" value="<?php echo $row['lname']; ?>" name="lname" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text" value="<?php echo $row['fname']; ?>" name="fname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="website-input">
                                        <input type="text" value="<?php echo $row['u_name']; ?>" name="username" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="website-input">
                                        <input type="password" placeholder="Enter Current password" name="cur_pass">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="subject-input">
                                        <input type="password" placeholder="Enter New password" name="new_pass" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-submit">
                                <button type="submit" name="submit">Update Details</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
        data-cf-beacon='{"rayId":"8931c205bd020a4d","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cardoor/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:34:08 GMT -->

</html>