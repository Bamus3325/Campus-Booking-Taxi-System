<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/cardoor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:34:07 GMT -->

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
                        <h2>Login!</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Enter your details now to book a Taxi.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php
                    if (isset($_POST['submit'])) {
                        include 'admin/connect.php';

                      $username = mysqli_real_escape_string($con, $_POST['username']);
                      $password = mysqli_real_escape_string($con, $_POST['password']);
                      $email = mysqli_real_escape_string($con, $_POST['username']);
                      

                      $sql = "SELECT  * FROM users WHERE u_name='$username' or email='$email' and pass='$password'";
                      $query = mysqli_query($con, $sql);

                      $dd = mysqli_fetch_array($query);

                      if ($row = mysqli_num_rows($query) > 0) {
                        session_start();
                        
                        $_SESSION['email'] = $dd['email'];
                        $_SESSION['username'] = $username;

                        //header(location: dashboard.php);

                        echo "<script> window.location='dashboard.php'; </script>";
                      } else{
                        echo "<script> alert('Username or Password not correct')</script>";
                      }
                     }
            ?>
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>Welcome Back!</h3>
                            <form action="" method="POST">
                                <div class="username">
                                    <input type="text" placeholder="Email or Username" name="username">
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password" name="password">
                                </div>
                                <div class="log-btn">
                                    <button type="submit" name="submit"><i class="fa fa-sign-in"></i> Log In</button>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="login-other">
                            <span class="or">or</span>
                            <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Login With
                                Facebook</a>
                            <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Login With Google</a>
                        </div> -->
                        <div class="create-ac">
                            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
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
        data-cf-beacon='{"rayId":"8931c1f68bf11c8f","b":1,"version":"2024.4.1","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/cardoor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 20:34:07 GMT -->

</html>