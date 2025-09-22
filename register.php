<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/cardoor/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:34:07 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>Cardoor - Car Rental HTML Template</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">

    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">

    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">

    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">

    <link href="assets/css/font-awesome.css" rel="stylesheet">

    <link href="assets/css/reset.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

    <link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>


    <section id="page-title-areas" class="section-padding overlay">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>REGISTER NOW!</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Create Account now to get Started.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
    include 'admin/connect.php';
if(isset($_POST['submit'])){

	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);

    $query1= mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
    if ($row = mysqli_num_rows($query1) > 0) {

        echo "<script>alert('Email Already Exist ❌❌❌'); window.location='register.php'; </script>";

    }else {
        $sql = "INSERT INTO users(lname, fname, email, u_name, pass) VALUES('$lname','$fname','$email','$username','$pass')";
	$query = mysqli_query($con, $sql);

	if ($query == TRUE) {
		echo "<script>alert('Record Added Successful ✔✔✔'); window.location='index.php'; </script>";
	}else {
		echo "<script>alert('Record Not Added Successful'); </script>";

	}
    }
	
	
}

?>
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Sign Up</h3>
                            <form action="" method="POST">
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="First Name" name="lname">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last Name" name="fname">
                                        </div>
                                    </div>
                                </div>
                                <div class="username">
                                    <input type="email" placeholder="Email" name="email">
                                </div>
                                <div class="username">
                                    <input type="text" placeholder="Username" name="username">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password" name="pass">
                                </div>
                                <div class="log-btn">
                                    <button type="submit" name="submit"><i class="fa fa-check-square"></i> Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="login-other">
                            <span class="or">or</span>
                            <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With
                                Facebook</a>
                            <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With
                                Google</a>
                        </div> -->
                        <div class="create-ac">
                            <p>Have an account? <a href="index.php">Sign In</a></p>
                        </div>
                        <!-- <div class="login-menu">
                            <a href="about.html">About</a>
                            <span>|</span>
                            <a href="contact.html">Contact</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include '_include/footer.php'; ?>


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
        data-cf-beacon='{"rayId":"8931c1f9081c0a4d","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cardoor/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:34:07 GMT -->

</html>