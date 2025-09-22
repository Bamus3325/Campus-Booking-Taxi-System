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
                                <h3 class="f_s_25 f_w_700 dark_text mr_30">Booking History</h3>
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
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30 pt-4">
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4>Booked Taxi List </h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                                <div class="search_inner">
                                                    <form Active="#">
                                                        <div class="search_field">
                                                            <input type="text" placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="add_button ms-2">
                                                <a href="#" data-toggle="modal" data-target="#addcategory"
                                                    class="btn_1">search</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S/N</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Seat</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Total Price</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                            include 'connect.php';
                            $query = mysqli_query($con, "SELECT * FROM booking_hist");
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                                <tr>
                                                    <th scope="row"> <?php echo $i; ?> </a></th>
                                                    <td><?php echo $row['cdate']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td>
                                                        <?php 
                                                        $loc = $row['location'];
                                                        $location = mysqli_query($con, "SELECT * FROM location WHERE id = '$loc'");
                    $rw = mysqli_fetch_array($location);
                    $r_loc = $rw['l_from']."-".$rw['l_to'];
                    echo $r_loc; 
                                                        ?>
                                                </td>
                                                    <td><?php echo $row['no_sit']; ?></td>
                                                    <td>&#x20A6; <?php echo $row['price']; ?></td>
                                                    <td>&#x20A6; <?php echo $row['t_price']; ?></td>
                                                    <td>
                                                        <div class="action_btns d-flex">
                                                            <!-- <a href="#" class="action_btn mr_10"> <i
                                                                    class="far fa-edit"></i> </a> -->
                                                            <a onclick="return confirm('Are You Sure You want to Delete this Record ❌❌');" href="del_booklist.php?id=<?php echo $row['id']; ?>" class="action_btn"> <i class="fas fa-trash"></i>
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

        <?php include '_include/footer.php'; ?>
    </section>

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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

<!-- Mirrored from demo.dashboardpack.com/user-management-html/admin_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 23:36:11 GMT -->

</html>