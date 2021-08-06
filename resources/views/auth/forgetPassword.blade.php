<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome My Accounts</title>
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
<style>
    .img{
        height:120px;
        width:120px;
        border-radius:80px;
    }
</style>
<body>
    <div class="header">

        <!--- Start Navbar Here --->
        @include('Frontend.navbar_1')
        <!--- End Navbar Here --->

    </div>

    <!--- Start Header Section --->
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-wrapper">
                        <h2 class="product-title">My Account</h2>
                        <ol class="breadcrumb">
                            <li><a href="/"><i class="ti-home"></i> Home</a></li>
                            <li class="current"> Reset Password</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- End Header Section --->

    <!--- Start Forget Passward Section --->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="right-sideabr">
                        <div class="inner-box">
                            <h4><strong><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Manage Account</strong></h4>
                            <ul class="lest item">
                                <li><a href="/resume">My Resume</a></li>
                                <li><a href="/manage-resumes">Manage Resume</a></li>
                            </ul>
                            <h4><strong><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp; Manage Job</strong></h4>
                            <ul class="lest item">
                                <li><a href="/job-alerts">Manage Jobs</a></li>
                                <li><a href="/manage-applications">Manage Applications</a></li>
                                <li><a href="/bookmarked">Bookmarked Jobs</a></li>
                                <li><a href="/notifications">Notifications <span class="notinumber">2</span></a></li>
                            </ul>
                            <h4><strong><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; Other Settings</strong></h4>
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
                    <div class="col-sm-12">
                        <img src="assets/img/favicon_1.png" class=" col-sm-2"  alt="" class="img">
                        <h3 class="medium-title">
                            <strong>
                                Welcome  Reset Password
                            </strong>
                        </h3>
                    </div>
                    <div class="my-account-form">
                        <div id="cd-login" class="is-selected">
                            <div class="page-login-form">

                                <form action="{{ route('forget.password.post') }}" method="POST" class="cd-form">
                                    @csrf
                                    <div class="form-group row">
                                      <label for="email_address" class="col-md-4 col-form-label text-md-right"
                                        style="padding-top: 20px; padding-left: 50px;">E-Mail Address</label>
                                      <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                          <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                      </div>
                                    </div>
                                    <button type="submit" class="btn btn-common log-btn">
                                        <strong><i class="fa fa-plane" aria-hidden="true"></i>&nbsp; Send Password Reset Link</strong>
                                    </button>
                                    <br>
                                    <br>
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- End Forget Passward Section --->

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

