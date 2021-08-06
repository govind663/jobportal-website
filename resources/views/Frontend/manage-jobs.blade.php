<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Manage Jobs</title>
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

        <!--- Start Footer --->
        @include('Frontend.footer')
        <!--- End Footer --->

        <!--- Start Header Section --->
        <div class="page-header" style="background: url(assets/img/banner1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper">
                            <h2 class="product-title">Manage Jobs</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Manage Jobs</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Header Section --->

        <!--- Start Manage Jobs Section --->
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
                        <div class="job-alerts-item candidates">
                            <h3 class="alerts-title">Manage Jobs</h3>
                            <div class="alerts-list">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Name</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Keywords</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Candidates</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p>Featured</p>
                                    </div>
                                </div>
                            </div>
                            <div class="alerts-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Web Designer</h3>
                                        <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span class="full-time">Full-Time</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p><i class="ti-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="alerts-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Web Designer</h3>
                                        <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span class="full-time">Full-Time</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p><i class="ti-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="alerts-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Web Designer</h3>
                                        <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span class="full-time">Full-Time</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p><i class="ti-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="alerts-content">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3>Web Designer</h3>
                                        <span class="location"><i class="ti-location-pin"></i> Manhattan, NYC</span>
                                    </div>
                                    <div class="col-md-3">
                                        <p><span class="full-time">Full-Time</span></p>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="can-img"><a href="#"><img src="assets/img/jobs/candidates.png" alt=""></a></div>
                                    </div>
                                    <div class="col-md-3">
                                        <p><i class="ti-star"></i></p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <ul class="pagination">
                                <li class="active"><a href="#" class="btn btn-common"><i class="ti-angle-left"></i> prev</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Manage Jobs Section --->
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
