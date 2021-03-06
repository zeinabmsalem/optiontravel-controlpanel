<?php
include("dbconn.php");

$userType_id;
session_start();
if (empty($_SESSION['userType_id'])) {
    header("Location:loginpage.php");
} else {
    $userType_id = $_SESSION['userType_id'];
    $refrence_id = $_SESSION['refrence_id'];
}
                            
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Option Travel - Datatables</title>
    <meta name="description" content="scs is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

 
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/css/base/scs.css">
    <link rel="stylesheet" href="assets/css/datatables/datatables.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>

<body id="page-top">
    <!-- Begin Preloader -->
    <div id="preloader">
        <div class="canvas">
            <img src="assets/img/option.png" alt="logo" class="loader-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <div class="page">
        <!-- Begin Header -->
<?php

include("header.php");

?>
        <!-- End Header -->
        <!-- Begin Page Content -->
        <div class="page-content d-flex align-items-stretch">

            <?php

            include("menu.php"); 

            ?>

            <!-- End Left Sidebar -->
            <div class="content-inner">
                <div class="container-fluid">
                    <!-- Begin Page Header-->
                    <div class="row">
                        <div class="page-header">
                            <div class="d-flex align-items-center">
                                <h2 class="page-header-title">Add Package</h2>
                                <div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php"><i class="ti ti-home"></i></a></li>
                                        <li class="breadcrumb-item active">Home</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <div class="row">
                        <div class="col-xl-12">
                            <!-- Export -->
                            <div class="widget has-shadow">
                               <!--  <div class="widget-header bordered no-actions d-flex align-items-center">
                                    <h4>Export</h4>
                                </div> -->
                                <div class="widget-body">
                                    <div class="table-responsive">
                                        <table id="export-table" class="table mb-0">
                                           
                                          
                                                          <!-- Begin Form -->
                <div class="authentication-form mx-auto">

                    <?php

                      $type_id = $_GET['type_id'];

                    ?>

        <form method="post" action="insert_package.php?type_id=<?php echo $type_id; ?>" enctype="multipart/form-data">

                        <div>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                          <label>Package Name English</label>
                        </div>

                        <div class="group material-input">
                           <input type="text" name="en_name" required>
                        </div>

                        <div>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                          <label>Package Name French</label>
                        </div>

                        <div class="group material-input">
                           <input type="text" name="fr_name" required>
                        </div>

                        <div>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                          <label>Package Name Arabic</label>
                        </div>

                        <div class="group material-input">
                           <input type="text" name="ar_name" required>
                        </div>

                        <div>
                               <span class="highlight"></span>
                               <span class="bar"></span>
                              <label>Location English</label>
                        </div>   
                        <div class="group material-input">
                           <input type="text" name="en_location" required>
                        </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Location French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_location" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Location Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_location" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Title English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_title" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Title French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_title" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Title Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_title" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Rating English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_rating" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Rating French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_rating" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Rating Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_rating" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Price English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_price" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Price French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_price" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Price Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_price" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Duration English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_duration" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Duration French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_duration" required>
                      </div>                                                                                                              
                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Duration Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_duration" required>
                      </div>
                                                                                                                                
                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>From Date English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_from_date" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>From Date French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_from_date" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>From Date Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_from_date" required>
                      </div>  

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>To Date English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_to_date" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>To Date French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_to_date" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>To Date Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_to_date" required>
                      </div>


                     <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Availability Link English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_availability_link" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Availability Link French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_availability_link" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Availability Link Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_availability_link" required>
                      </div>


                     <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Overview English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_overview" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Overview French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_overview" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Overview Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_overview" required>
                      </div>



                     <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>What Will We Do English</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="en_what_will_we_do" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>What Will We Do French</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="fr_what_will_we_do" required>
                      </div>

                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>What Will We Do Arabic</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="ar_what_will_we_do" required>
                      </div>


                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Video Link</label>
                      </div>   
                      <div class="group material-input">
                        <input type="text" name="video_link" required>
                      </div>


                      <div>
                          <span class="highlight"></span>
                          <span class="bar"></span>
                          <label>Card Image</label>
                      </div>   
                      <div class="group material-input">
                        <input type="file" name="card_img" required>
                      </div>


                        <button type="submit" class="btn btn-primary" name="add">Save Data</button>

                    </form>
                </div>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Export -->
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Container -->
                <!-- Begin Page Footer-->
                <footer class="main-footer">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                            <p class="text-gradient-02">Copyright©2018</p>
                        </div>
                    </div>
                </footer>
                <!-- End Page Footer -->
                <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
            </div>
        </div>
        <!-- End Page Content -->
    </div>
    <!-- Begin Vendor Js -->
    <script src="assets/vendors/js/base/jquery.min.js"></script>
    <script src="assets/vendors/js/base/core.min.js"></script>
    <!-- End Vendor Js -->
    <!-- Begin Page Vendor Js -->
    <script src="assets/vendors/js/datatables/datatables.min.js"></script>
    <script src="assets/vendors/js/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/vendors/js/datatables/jszip.min.js"></script>
    <script src="assets/vendors/js/datatables/buttons.html5.min.js"></script>
    <script src="assets/vendors/js/datatables/pdfmake.min.js"></script>
    <script src="assets/vendors/js/datatables/vfs_fonts.js"></script>
    <script src="assets/vendors/js/datatables/buttons.print.min.js"></script>
    <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
    <script src="assets/vendors/js/app/app.js"></script>
    <!-- End Page Vendor Js -->
    <!-- Begin Page Snippets -->
    <script src="assets/js/components/tables/tables.js"></script>
<!--     <script src="assets/js/components/datepicker/datepicker.js"></script>
 -->    <!-- End Page Snippets -->


</body>

</html>