<?php

include("dbconn.php");

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fyonka - Login</title>
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
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/css/base/scs.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body class="bg-white">
    <!-- Begin Preloader -->
    <div id="preloader">
        <div class="canvas">
            <img src="assets/img/option.png" alt="logo" class="loader-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- Begin Container -->
    <div class="container-fluid no-padding h-100">
        <div class="row flex-row h-100 bg-white">
            <!-- Begin Left Content -->
            <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                <div class="background-01">
                    <div class="scs-overlay overlay-01"></div>
                    <div class="authentication-col-content mx-auto">
                        <h1 class="gradient-text-01">
                            Welcome To Fyonka CPanel!
                        </h1>
                        <span class="description">
                            Developed by ICOSOL
                        </span>
                    </div>
                </div>
            </div>
            <!-- End Left Content -->
            <!-- Begin Right Content -->
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                <!-- Begin Form -->
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="db-default.html">
                            <img src="assets/img/option.png" alt="logo">
                        </a>
                    </div>


                    <?php if (!empty($_GET['message'])) { ?>   
                     <div class="row" style="margin-top: 5%;text-align:left;margin-left: 19%;margin-bottom: -4%;">
                         <span id="Invalid" style="color:#fff;font-size: medium;font-weight: bold;">Invalid Username Or Password</span> 
                     </div>
                        <?php
                    }
                    ?>

                    
                    <h3>Sign-in to Fyonka</h3>
                    <form method="POST" action="login_check.php">
                        <div class="group material-input">
                            <input type="text" name="username" id="username" placeholder="Username">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Username</label>
                        </div>
                        <div class="group material-input">
                            <input type="password" name="password" id="password" placeholder="password">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Password</label>
                        </div>

                        <div class="sign-btn text-center">
                            <button type="submit" class="btn btn-lg btn-gradient-01" onclick="ValidateForm()">Sign in</button>
                        </div>
                    </form>
                    

                </div>
                <!-- End Form -->
            </div>
            <!-- End Right Content -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
    <!-- Begin Vendor Js -->
    <script src="assets/vendors/js/base/jquery.min.js"></script>
    <script src="assets/vendors/js/base/core.min.js"></script>
    <!-- End Vendor Js -->
    <!-- Begin Page Vendor Js -->
    <script src="assets/vendors/js/app/app.js"></script>
    <!-- End Page Vendor Js -->

    <script type="text/javascript">

                                $('#mainCaptcha').bind("cut copy paste", function (e) {
                                    e.preventDefault();
                                });
                                function ValidateForm() {
                                    $(function () {
                                        $("form[name='GenerateGDA']").validate({
                                            rules: {
                                                username: "required",
                                                password: "required",
                                            },
                                            messages: {
                                                username: "Please enter your username",
                                                password: "Please enter your password",
                                            },
                                            submitHandler: function (form) {
                                                var schoolName = $("#username").val();
                                                var schoolpassword = $("#password").val();
                                                var errormessage = $("#errormessage").val();
                                                form.submit();
                                            }
                                        });
                                    });


                                }


        </script>
</body>

</html>