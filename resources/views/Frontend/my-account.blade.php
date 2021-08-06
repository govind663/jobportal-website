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
                            <li class="current">My Account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- End Header Section --->

    <!--- Start My Accounts Section --->
    <div id="content" class="my-account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-6 cd-user-modal">
                    <div class="my-account-form">
                        <ul class="cd-switcher">
                            <li><a class="selected" href="#0">LOGIN</a></li>
                            <li><a href="#0">REGITER</a></li>
                        </ul>
                        <div id="cd-login" class="is-selected">
                            <div class="page-login-form">
                                <form role="form" class="login-form">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-user"></i>
                                            <input type="text" id="sender-email" class="form-control" name="email" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <button class="btn btn-common log-btn">Login</button>
                                    <div class="checkbox-item">
                                        <div class="checkbox">
                                            <label for="rememberme" class="rememberme">
                                                <input name="rememberme" id="rememberme" value="forever" type="checkbox"> Remember Me</label>
                                        </div>
                                        <p class="cd-form-bottom-message"><a href="#0">Lost your password?</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="cd-signup">
                            <div class="page-login-form register">
                                <form role="form" class="login-form">
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-user"></i>
                                            <input type="text" id="sender-email" class="form-control" name="name" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-email"></i>
                                            <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-icon">
                                            <i class="ti-lock"></i>
                                            <input type="password" class="form-control" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <button class="btn btn-common log-btn">Register</button>
                                </form>
                            </div>
                        </div>
                        <div class="page-login-form" id="cd-reset-password">
                            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
                            <form class="cd-form">
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="ti-email"></i>
                                        <input type="text" id="sender-email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <p class="fieldset">
                                    <button class="btn btn-common log-btn" type="submit">Reset password</button>
                                </p>
                            </form>
                            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- End My Accounts Section --->


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
