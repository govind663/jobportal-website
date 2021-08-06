<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Notifications</title>
    <link rel="shortcut icon" href="assets/img/favicon_1.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/themify-icons.css">
    <link rel="stylesheet" href="assets/css/color-switcher.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />
</head>

<body>
    <div class="header">

        <!--- Start Navbar Here --->
        @include('Frontend.navbar_1')
        <!--- End Navbar Here --->

        <!--- Start Header Section --->
        <div class="page-header" style="background: url(assets/img/banner1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper">
                            <h2 class="product-title">Job Alerts</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Job Alerts</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Header Section --->

        <!--- Start Notification Section --->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="right-sideabr">
                            <div class="inner-box">
                                <h4><strong><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Manage Account</strong>
                                </h4>
                                <ul class="lest item">
                                    <li><a href="/resume">My Resume</a></li>
                                    <li><a href="/manage-resumes">Manage Resume</a></li>
                                </ul>
                                <h4><strong><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp; Manage Job</strong>
                                </h4>
                                <ul class="lest item">
                                    <li><a href="/job-alerts">Manage Jobs</a></li>
                                    <li><a href="/manage-applications">Manage Applications</a></li>
                                    <li><a href="/bookmarked">Bookmarked Jobs</a></li>
                                    <li><a href="/notifications">Notifications <span class="notinumber">2</span></a>
                                    </li>
                                </ul>
                                <h4><strong><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; Other Settings</strong>
                                </h4>
                                <ul class="lest item">
                                    <li><a href="/login">User login</a></li>
                                    <li><a href="/registration">User Registration</a></li>
                                    <li><a href="/forget-password">Change Password</a></li>
                                    <li><a href="/index">Sing Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="job-alerts-item notification">
                            <h3 class="alerts-title">Your Notifications</h3>
                            <div class="notification-item">
                                <div class="thums">
                                    <img src="assets/img/jobs/img-1.jpg" alt="">
                                </div>
                                <div class="text-left">
                                    <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                                    <span class="time"><i class="ti-time"></i>3 Hours ago</span>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="thums">
                                    <img src="assets/img/jobs/img-2.jpg" alt="">
                                </div>
                                <div class="text-left">
                                    <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                                    <span class="time"><i class="ti-time"></i>3 Hours ago</span>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="thums">
                                    <img src="assets/img/jobs/img-3.jpg" alt="">
                                </div>
                                <div class="text-left">
                                    <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                                    <span class="time"><i class="ti-time"></i>3 Hours ago</span>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="thums">
                                    <img src="assets/img/jobs/img-4.jpg" alt="">
                                </div>
                                <div class="text-left">
                                    <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                                    <span class="time"><i class="ti-time"></i>3 Hours ago</span>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="thums">
                                    <img src="assets/img/jobs/img-5.jpg" alt="">
                                </div>
                                <div class="text-left">
                                    <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                                    <span class="time"><i class="ti-time"></i>3 Hours ago</span>
                                </div>
                            </div>
                            <div class="notification-item">
                                <div class="thums">
                                    <img src="assets/img/jobs/img-4.jpg" alt="">
                                </div>
                                <div class="text-left">
                                    <p>Your Bookmarked job "Web designer needed" from Banana Inc, has expired.</p>
                                    <span class="time"><i class="ti-time"></i>3 Hours ago</span>
                                </div>
                            </div>
                            <ul class="pagination">
                                <li class="active"><a href="#" class="btn btn-common"><i class="ti-angle-left"></i>
                                        prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="active"><a href="#" class="btn btn-common">Next <i
                                            class="ti-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Notification Section --->
    </div>

    <!--- Start Footer --->
    @include('Frontend.footer')
    <!--- End Footer --->

    <script type="text/javascript" src="assets/js/jquery-min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/color-switcher.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
</body>

</html>
