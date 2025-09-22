<?php include '_include/head.php';
?>

<body class='crm_body_bg'>

    <?php include '_include/sidebar.php';
?>

    <section class='main_content dashboard_part large_header_bg'>

        <?php include '_include/topbar.php';
?>

        <div class='main_content_iner overly_inner '>
            <div class='container-fluid p-0 '>

                <div class='row'>
                    <div class='col-12'>
                        <div class='page_title_box d-flex flex-wrap align-items-center justify-content-between'>
                            <div class='page_title_left d-flex align-items-center'>
                                <h3 class='f_s_25 f_w_700 dark_text mr_30'>Add Driver</h3>
                                <ol class='breadcrumb page_bradcam mb-0'>
                                    <li class='breadcrumb-item'><a href='javascript:void(0);'>Home</a></li>
                                    <li class='breadcrumb-item active'>Analytic</li>
                                </ol>
                            </div>
                            <div class='page_title_right'>
                                <div class='page_date_button d-flex align-items-center'>
                                    <img src='img/icon/calender_icon.svg' alt>
                                    <?php echo date('M d, Y'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
include 'connect.php';

if ( isset( $_POST[ 'submit' ] ) ) {
    $fname = mysqli_real_escape_string( $con, $_POST[ 'fname' ] );
    $phone = mysqli_real_escape_string( $con, $_POST[ 'phone' ] );
    $email = mysqli_real_escape_string( $con, $_POST[ 'email' ] );
    $car_name = mysqli_real_escape_string( $con, $_POST[ 'car_name' ] );
    $t_sit = mysqli_real_escape_string( $con, $_POST[ 't_sit' ] );
    $car_num = mysqli_real_escape_string( $con, $_POST[ 'car_num' ] );
    $ass_locat = mysqli_real_escape_string( $con, $_POST[ 'ass_locat' ] );

    $rand = rand( 1000000000, 9999999999 );
    $imagename = $_FILES[ 'image' ][ 'name' ];
    $imagesync = $_FILES[ 'image' ][ 'tmp_name' ];
    $imagetype = $_FILES[ 'image' ][ 'type' ];
    $targetdir = 'drivers/';
    $img = $rand.'_'.$imagename;
    $extension = pathinfo( $imagename, PATHINFO_EXTENSION );

    if ( !in_array( $extension, [ 'jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG' ] ) ) {
        ?>
                <div class='alert alert-danger alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;
                    </button>
                    The File Uploaded is Not jpg, jpeg, png Format
                </div>
                <?php
    } else {

        if ( move_uploaded_file( $imagesync, $targetdir.$img ) ) {

            $query = mysqli_query( $con, "INSERT INTO driver(fname, phone, email, car_name, t_sit, car_num, image, ass_locat) 
                  VALUES('$fname','$phone','$email','$car_name','$t_sit','$car_num','$img','$ass_locat')" );
            if ( $query == TRUE ) {
                echo "<script> alert('Driver Registered Successfully ✔️✔️✔️'); window.location='driver_list.php'; </script>";
            } else {
                echo "<script> alert('Driver NOT Registered');</script>";

            }
        }
    }
}

        ?>
                <div class='row'>
                    <div class='col-12'>
                        <div class='white_card card_height_100 mb_30'>
                            <div class='white_card_header'>
                                <div class='box_header m-0'>
                                    <div class='main-title'>
                                        <h3 class='m-0'>Add New Driver </h3>
                                    </div>
                                </div>
                            </div>
                            <form method='POST' action='' enctype="multipart/form-data">
                                <div class='white_card_body'>
                                    <div class='row'>
                                        <div class='col-lg-6'>
                                            <div class='common_input mb_15'>
                                                <input type='text' placeholder='FullName' name='fname' required>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='common_input mb_15'>
                                                <input type='number' placeholder='Mobile No' name='phone' required>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='common_input mb_15'>
                                                <input type='text' placeholder='Email' name='email' required>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='common_input mb_15'>
                                                <input type='text' placeholder='Name of Car' name='car_name' required>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='common_input mb_15'>
                                                <input type='number' placeholder='Total Sit' name='t_sit' required>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='common_input mb_15'>
                                                <input type='text' placeholder='Car Number' name='car_num' required>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <div class='common_input mb_15'>
                                                <label for=''>Car Image</label>
                                                <input type='file' id='fileinput' name='image' required>
                                                <img src='#' id='preview' alt='selected image'
                                                    style='display:none; width:200px; height:100px;'>
                                            </div>
                                        </div>
                                        <div class='col-lg-6'>
                                            <select class='nice_Select2 nice_Select_line wide' style='display: none;'
                                                name='ass_locat' required> 
                                                <option value=''>Select Assigned Location</option>                                            
                                        <?php
                                        include 'connect.php';
                                        $query = mysqli_query($con, "SELECT * FROM location");                                        
                                        while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <option><?php echo $row['l_from']." - ".$row['l_to']; ?></option>
                                            <?php
                                        }
                                        
                                        ?>
                                            </select>
                                        </div>
                                        <div class='col-lg-12'>
                                            <button class='btn btn-fill btn-primary' name='submit'>Add Driver</button>

                                            <!-- <div class = 'create_report_btn mt_30'>
        <a href = '#' class = 'btn_1 radius_btn d-block text-center'>Add Driver</a>
        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '_include/footer.php';
        ?>
    </section>

    <div id='back-top' style='display: none;'>
        <a title='Go to Top' href='#'>
            <i class='ti-angle-up'></i>
        </a>
    </div>
    <script type='text/javascript'>
    document.getElementById('fileinput').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(event) {
                document.getElementById('preview').setAttribute('src', event.target.result);
                document.getElementById('preview').style.display = 'block';

            };
            reader.readAsDataURL(file);
        }

    });
    </script>
    <script src='js/jquery1-3.4.1.min.js'></script>

    <script src='js/popper1.min.js'></script>

    <script src='js/bootstrap1.min.js'></script>

    <script src='js/metisMenu.js'></script>

    <script src='vendors/count_up/jquery.waypoints.min.js'></script>

    <script src='vendors/chartlist/Chart.min.js'></script>

    <script src='vendors/count_up/jquery.counterup.min.js'></script>

    <script src='vendors/niceselect/js/jquery.nice-select.min.js'></script>

    <script src='vendors/owl_carousel/js/owl.carousel.min.js'></script>

    <script src='vendors/datatable/js/jquery.dataTables.min.js'></script>
    <script src='vendors/datatable/js/dataTables.responsive.min.js'></script>
    <script src='vendors/datatable/js/dataTables.buttons.min.js'></script>
    <script src='vendors/datatable/js/buttons.flash.min.js'></script>
    <script src='vendors/datatable/js/jszip.min.js'></script>
    <script src='vendors/datatable/js/pdfmake.min.js'></script>
    <script src='vendors/datatable/js/vfs_fonts.js'></script>
    <script src='vendors/datatable/js/buttons.html5.min.js'></script>
    <script src='vendors/datatable/js/buttons.print.min.js'></script>

    <script src='vendors/datepicker/datepicker.js'></script>
    <script src='vendors/datepicker/datepicker.en.js'></script>
    <script src='vendors/datepicker/datepicker.custom.js'></script>
    <script src='js/chart.min.js'></script>
    <script src='vendors/chartjs/roundedBar.min.js'></script>

    <script src='vendors/progressbar/jquery.barfiller.js'></script>

    <script src='vendors/tagsinput/tagsinput.js'></script>

    <script src='vendors/text_editor/summernote-bs4.js'></script>
    <script src='js/custom.js'></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/add_new_user.html by HTTrack Website Copier/3.x [ XR&CO'2014 ], Thu, 13 Jun 2024 23:36:12 GMT -->

</html>