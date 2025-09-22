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
                                <h3 class="f_s_25 f_w_700 dark_text mr_30">Dashboard</h3>
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
                <div class="row ">
                    <!-- <div class="col-xl-8 ">
                        <div class="white_card mb_30 card_height_100">
                            <div class="white_card_header">
                                <div class="row align-items-center justify-content-between flex-wrap">
                                    <div class="col-lg-4">
                                        <div class="main-title">
                                            <h3 class="m-0">Stoke Details</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-end d-flex justify-content-end">
                                        <select class="nice_Select2 max-width-220">
                                            <option value="1">Show by month</option>
                                            <option value="1">Show by year</option>
                                            <option value="1">Show by day</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div id="management_bar"></div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-xl-12 ">
                        <div class="white_card card_height_100 mb_30 user_crm_wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="single_crm">
                                        <div class="crm_head d-flex align-items-center justify-content-between">
                                            <div class="thumb">
                                                <img src="img/crm/businessman.svg" alt>
                                            </div>
                                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                        </div>
                                        <?php
                                        include 'connect.php';
                                        $query = mysqli_query($con, "SELECT * FROM users");
                                        $row = mysqli_num_rows($query);
                                        ?>
                                        <div class="crm_body">
                                            <h4><?php echo $row; ?></h4>
                                            <p>Total Users</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single_crm ">
                                        <div
                                            class="crm_head crm_bg_1 d-flex align-items-center justify-content-between">
                                            <div class="thumb">
                                                <img src="img/crm/customer.svg" alt>
                                            </div>
                                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                        </div>
                                        <?php
                                        include 'connect.php';
                                        $query = mysqli_query($con, "SELECT * FROM driver");
                                        $rowd = mysqli_num_rows($query);
                                        ?>
                                        <div class="crm_body">
                                            <h4><?php echo $rowd; ?></h4>
                                            <p>Total Drivers</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single_crm">
                                        <div
                                            class="crm_head crm_bg_2 d-flex align-items-center justify-content-between">
                                            <div class="thumb">
                                                <img src="img/crm/infographic.svg" alt>
                                            </div>
                                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                        </div>
                                        <?php
                                        include 'connect.php';
                                        $query = mysqli_query($con, "SELECT * FROM booking_hist");
                                        $rowh = mysqli_num_rows($query);
                                        ?>
                                        <div class="crm_body">
                                            <h4><?php echo $rowh; ?></h4>
                                            <p>Total Bookings</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="single_crm">
                                        <div
                                            class="crm_head crm_bg_4 d-flex align-items-center justify-content-between">
                                            <div class="thumb">
                                                <img src="img/crm/sqr.svg" alt>
                                            </div>
                                            <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                        </div>
                                        <div class="crm_body">
                                            <h4><?php echo $rowd; ?></h4>
                                            <p>Total Taxi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="crm_reports_bnner">
                                <div class="row justify-content-end ">
                                    <div class="col-lg-6">
                                        <h4>Create CRM Reports</h4>
                                        <p>Outlines keep you and honest
                                            indulging honest.</p>
                                        <a href="#">Read More <i class="fas fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_20 ">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Booking History</h3>
                                    </div>

                                </div>
                            </div>
                            <div class="white_card_body QA_section">
                                <div class="QA_table ">

                                    <table class="table lms_table_active2 p-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/N</th>
                                                <th scope="col">cdate</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                            include 'connect.php';
                            $query = mysqli_query($con, "SELECT * FROM booking_hist WHERE status = '1' ORDER BY id DESC");
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i++; ?>
                                                </td>
                                                <td class="f_s_12 f_w_400 color_text_6"><?php echo $row['cdate']; ?></td>
                                                <td class="f_s_12 f_w_400 color_text_6"><?php echo $row['email']; ?></td>
                                                <td class="f_s_12 f_w_400 text-center"><?php echo $row['location']; ?></td>
                                                <td class="f_s_12 f_w_400 text-center"><?php echo $row['t_price']; ?></td>
                                                <td class="f_s_12 f_w_400 text-center"><a class="btn btn-success">Success</a></td>
                                            </tr>
                                            <?php

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
    <script src="vendors/am_chart/amcharts.js"></script>

    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>

    <script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
    <script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>

    <script src="vendors/apex_chart/apex-chart2.js"></script>
    <script src="vendors/apex_chart/apex_dashboard.js"></script>

    <script src="vendors/chart_am/core.js"></script>
    <script src="vendors/chart_am/charts.js"></script>
    <script src="vendors/chart_am/animated.js"></script>
    <script src="vendors/chart_am/kelly.js"></script>
    <script src="vendors/chart_am/chart-custom.js"></script>

    <script src="js/dashboard_init.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 23:36:09 GMT -->

</html>