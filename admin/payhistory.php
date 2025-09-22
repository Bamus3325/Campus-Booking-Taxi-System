<?php include '_include/head.php'; ?>

<body class="crm_body_bg">

    <?php include '_include/sidebar.php'; ?>

    <section class="main_content dashboard_part large_header_bg">

        <?php include '_include/topbar.php'; ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Payment History</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <h6 class="card-subtitle mb_20">Records of Payment Made by Users
                                </h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">S/N</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Channel</th>
                                                <th scope="col">iP Address</th>
                                                <th scope="col" style="text-align: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                            include 'connect.php';
                            $query = mysqli_query($con, "SELECT * FROM booking_hist ORDER BY id DESC");
                            $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                            <tr>
                                                <th scope="row"><?php echo $i; ?></th>
                                                <td><?php echo $row['cdate']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td>&#x20A6; <?php echo $row['t_price']; ?></td>
                                                <td><?php echo $row['channel']; ?></td>
                                                <td><?php echo $row['ip_address']; ?></td>
                                                <td>
                                                    <?php
                                                    
                                                    if ($row['status'] == 0) {
                                                      ?>
                                                    <a onclick="return confirm('Do you want to confirm this Payment?');" href="confirm_pay.php?user=<?php echo $row['id']; ?>" class="btn btn-primary">Confirm</a>
                                                    <a onclick="return confirm('Do you want to denied this Payment?');" href="denied_pay.php?user=<?php echo $row['id']; ?>" class="btn btn-danger">Denied</a>
                            
                                                      <?php
                                                    }elseif ($row['status'] == 1) {
                                                        ?>
                                                        <a class="btn btn-success">Success</a>
                                
                                                          <?php
                                                    }else {
                                                      ?>
                                                    <a class="btn btn-danger">Denied</a>
                            
                                                      <?php
                                                    }
                                                    
                                                    ?>
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

    <script src="js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/bootstrap_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jun 2024 23:36:13 GMT -->

</html>