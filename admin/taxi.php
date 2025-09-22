<?php include '_include/head.php'; ?>

<body class="crm_body_bg">


<?php include '_include/sidebar.php'; ?>
    <section class="main_content dashboard_part large_header_bg">

    <?php include '_include/topbar.php'; ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row justify-content-center">
                <?php
                            include 'connect.php';
                            $query = mysqli_query($con, "SELECT * FROM driver");
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <div class="col-lg-6">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                    <h3 class="m-0"><?php echo $row['car_name']; ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div>
                                <img class="img-fluid img-thumbnail js-tilt" src="drivers/<?php echo $row['image']; ?>" style="width: 400px;"
                                        data-tilt-glare="true" data-tilt-maxglare=".5" data-tilt-perspective="200"
                                        data-tilt-speed="300" data-tilt-max="10" alt>
                                </div>
                                <div>

                                <div class="row">
                                        <div class="col-12">
                                        <h5 class="SubTitle f-15 f-w-500 mt_20 ">
                                        <font color="red">Driver's Name:</font> <?php echo $row['fname']; ?>
                                    </h5>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="SubTitle f-15 f-w-500 mt_20 ">
                                        <font color="red">Cab No:</font> <?php echo $row['car_num']; ?>
                                    </h5>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="SubTitle f-15 f-w-500 mt_20 ">
                                        <font color="red">Total Seat:</font> <?php echo $row['t_sit']; ?>
                                    </h5>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="SubTitle f-15 f-w-500 mt_20 ">
                                        <font color="red">Assigned Location:</font> <?php echo $row['ass_locat']; ?>
                                    </h5>
                                    </div>

                            </div>


                                </div>
                            </div>
                        </div>
                    </div>

                                <?php

                            }
                                ?>
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


    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>

    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>


    <script src="vendors/animation/tilt/tilt.jquery.js"></script>
    <script src="vendors/animation/tilt/tilt-custom.js"></script>

    <script src="js/custom.js"></script>
    <script src="vendors/apex_chart/bar_active_1.js"></script>
    <script src="vendors/apex_chart/apex_chart_list.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/tilt.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 23:36:13 GMT -->

</html>