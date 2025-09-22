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
                                <h3 class="f_s_25 f_w_700 dark_text mr_30">Add Loaction</h3>
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
                                        <h3 class="m-0">Add New Location </h3>
                                    </div>
                                </div>
                            </div>
                            <?php
include 'connect.php';

if ( isset( $_POST[ 'submit' ] ) ) {
    $l_from = strtoupper(mysqli_real_escape_string( $con, $_POST[ 'l_from' ] ));
    $l_to = strtoupper(mysqli_real_escape_string( $con, $_POST[ 'l_to' ] ));
    $cdate = mysqli_real_escape_string( $con, $_POST[ 'cdate' ] );
    $amount = mysqli_real_escape_string( $con, $_POST[ 'amount' ] );

            $query = mysqli_query( $con, "INSERT INTO location(cdate, l_from, l_to, amount)
                  VALUES('$cdate','$l_from','$l_to','$amount')" );
            if ( $query == TRUE ) {
                echo "<script> alert('Location Added Successfully ✔️✔️✔️'); </script>";
            } else {
                echo "<script> alert('Location NOT Added');</script>";

            }
        }
        ?>
                            <div class="white_card_body">
                                <form method="POST" action="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="text" placeholder="FROM" name="l_from" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="text" placeholder="TO" name="l_to" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="date" placeholder="Date" name="cdate" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="common_input mb_15">
                                            <input type="text" placeholder="AMOUNT" name="amount" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="create_report_btn mt_30">
                                            <input type="submit" class="btn btn-primary mb-3" name="submit" value="Add Location">
                                            <!-- <a href="#" class="btn_1 radius_btn d-block text-center">Add Location</a> -->
                                        </div>
                                    </div>
                                    </form>
                                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_20 ">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Available Location </h3>
                                    </div>
                                    <!-- <div class="header_more_tool">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle" id="dropdownMenuButton"
                                                data-bs-toggle="dropdown">
                                                <i class="ti-more-alt"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                                <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                                <a class="dropdown-item" href="#"> <i class="fa fa-download"></i>
                                                    Download</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="white_card_body QA_section">
                                <div class="QA_table ">

                                    <table class="table lms_table_active2 p-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/N</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                            include 'connect.php';
                            $query = mysqli_query($con, "SELECT * FROM location");
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                            <td class="f_s_12 f_w_400 color_text_6"><?php echo $i; ?></td>
                                                <td class="f_s_12 f_w_400 color_text_6"><?php echo $row['cdate']; ?></td>
                                                <td class="f_s_12 f_w_400 color_text_6"><?php echo $row['l_from']." - ".$row['l_to']; ?></td>
                                                <td class="f_s_12 f_w_400 color_text_6">&#8358; <?php echo $row['amount']; ?></td>
                                                <td class="f_s_12 f_w_400 color_text_6">
                                                <div class="action_btns d-flex">
                                                            <a onclick="return confirm('Are You Sure You want to Delete this User ❌❌');" href="del_locat.php?id=<?php echo $row['id']; ?>" class="action_btn"> <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
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
                                </div>
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