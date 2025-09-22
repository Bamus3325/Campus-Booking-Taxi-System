<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 23:36:09 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Management Admin</title>
    <link rel="icon" href="img/mini_logo.png" type="image/png">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body>
    <?php
                    if (isset($_POST['submit'])) {
                        include 'connect.php';

                      $username = mysqli_real_escape_string($con, $_POST['username']);
                      $password = mysqli_real_escape_string($con, $_POST['password']);
                      

                      $sql = "SELECT  * FROM users WHERE u_name='$username' and pass='$password'";
                      $query = mysqli_query($con, $sql);

                      $dd = mysqli_fetch_array($query);

                      if ($row = mysqli_num_rows($query) > 0) {
                        session_start();
                        
                        $_SESSION['email'] = $dd['email'];
                        $_SESSION['username'] = $username;

                        //header(location: dashboard.php);

                        echo "<script>alert('Login Successful ✔✔✔'); window.location='dashboard.php'; </script>";
                      } else{
                        echo "<script> alert('Username or Password not correct')</script>";
                      }
                     }
            ?>
    <div class="erroe_page_wrapper">
        <div class="errow_wrap">
            <div class="col-lg-4">
                <div class="modal-content cs_modal" style="margin-top: 100px;">
                    <div class="modal-header justify-content-center theme_bg_1">
                        <h5 class="modal-title text_white">Log in</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="">
                            <div class>
                                <input type="text" class="form-control" placeholder="Enter your Username"
                                    name="username">
                            </div>
                            <div class>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <button class="btn_1 full_width text-center" name="submit">Log in</button>
                            <!-- <p>Need an account? <a data-toggle="modal" data-target="#sing_up"
                    data-dismiss="modal" href="#"> Sign Up</a></p>
            <div class="text-center">
                <a href="#" data-toggle="modal" data-target="#forgot_password"
                    data-dismiss="modal" class="pass_forget_btn">Forget
                    Password?</a>
            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/error_400.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 23:36:10 GMT -->

</html>