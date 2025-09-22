<?php include '_include/head.php'; ?>
<body class="crm_body_bg">


    <?php include '_include/sidebar.php'; ?>

    <section class="main_content dashboard_part large_header_bg">

        <?php include '_include/topbar.php'; ?>

        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">

                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                            <div class="page_title_left d-flex align-items-center">
                                <h3 class="f_s_25 f_w_700 dark_text mr_30">Settings</h3>
                                <ol class="breadcrumb page_bradcam mb-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Analytic</li>
                                </ol>
                            </div>
                            <div class="page_title_right">
                                <div class="page_date_button d-flex align-items-center">
                                    <img src="img/icon/calender_icon.svg" alt>
                                    <?php echo date('M d, Y'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Edit Settings </h3>
                                    </div>
                                </div>
                            </div>
                            <?php

    include 'connect.php';
    $id = $_SESSION['email'];
    $row1 = mysqli_query($con, "SELECT * FROM users WHERE email ='$id'");
    $result = mysqli_fetch_array($row1);
    
if(isset($_POST['submit'])){

	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	$fname = mysqli_real_escape_string($con, $_POST['fname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);

        $sql = "UPDATE users SET lname = '$lname', fname = '$fname', email = '$email', u_name = '$username', pass = '$pass' WHERE id = '$id'";
	$query = mysqli_query($con, $sql);

	if ($query == TRUE) {
		echo "<script>alert('Record Updated Successful ✔✔✔'); window.location='user_list.php'; </script>";
	}else {
		echo "<script>alert('Record Not Updated Successful'); </script>";

	}
    }


?>
                            <div class="white_card_body">
                                <form method="POST" action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="text" value="<?php echo $result['lname']; ?>" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="text" value="<?php echo $result['fname']; ?>" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="text" value="<?php echo $result['email']; ?>"  name="email">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="text" value="<?php echo $result['u_name']; ?>" name="username">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="password" value="<?php echo $result['pass']; ?>" name="pass">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="create_report_btn mt_30">
                                        <input type="submit" class="btn btn-primary mb-3" name="submit" value="Update User Details">
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '_include/footer.php'; ?>
    </section>


    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>

    <script src="js/bootstrap1.min.js"></script>

    <script src="js/metisMenu.js"></script>

    <script src="vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="vendors/chartlist/Chart.min.js"></script>

    <script src="vendors/count_up/jquery.counterup.min.js"></script>

    <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>

    <script src="vendors/datepicker/datepicker.js"></script>
    <script src="vendors/datepicker/datepicker.en.js"></script>
    <script src="vendors/datepicker/datepicker.custom.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="vendors/chartjs/roundedBar.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/add_new_user.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 23:36:12 GMT -->

</html>