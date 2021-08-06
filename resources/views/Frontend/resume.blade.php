<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Resume</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type="text/css">
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
                            <h2 class="product-title">Resume</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Resume</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Header Section --->

        <!--- Start Resume Section --->
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
                    @foreach($petani as $key => $data)
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="inner-box my-resume">
                            <div class="author-resume">
                                <div class="thumb" style="width: 120px; height:120px;">
                                    <img src="/image/{{ $data->image }}" alt="" >
                                </div>

                                <div class="author-info">
                                    <h3>{{ $data->fname }}{{ $data->lname }}</h3>
                                    <p class="sub-title">{{ $data->jposition }}</p>
                                    <p><span class="address"><i class="ti-location-pin"></i>{{ $data->address }}</span> <span><i class="ti-phone"></i>(+01) 211-123-5678</span></p>
                                    <div class="social-link">
                                        <a class="twitter" target="_blank" data-original-title="twitter" href="#" data-toggle="tooltip" data-placement="top"><i class="fab fa-twitter"></i></a>
                                        <a class="facebook" target="_blank" data-original-title="facebook" href="#" data-toggle="tooltip" data-placement="top"><i class="fab fa-facebook"></i></a>
                                        <a class="google" target="_blank" data-original-title="google-plus" href="#" data-toggle="tooltip" data-placement="top"><i class="fab fa-google"></i></a>
                                        <a class="linkedin" target="_blank" data-original-title="linkedin" href="#" data-toggle="tooltip" data-placement="top"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="about-me item">
                                <h3>About Me <i class="ti-pencil"></i></h3>
                                <p>{{ $data->about }}</p>
                            </div>
                            <div class="work-experence item">
                                <h3>Work Experience <i class="ti-pencil"></i></h3>
                                <h4><strong>Job Title : </strong>{{ $data->jposition }}</h4>
                                <h5><strong>Company Name : </strong>{{ $data->cname }}</h5>
                                <span class="date"><strong></strong>{{ $data->cfrom }}{{ $data->cto }}</span>
                                <p><strong>Project image or File : </strong><br><a href="#"><img src="/image/{{ $data->image }}" alt="" style="width: 80px; height:80px;"></a></p>
                                <p><strong>Employee Job Experience : </strong>{!! $data->job_experience !!}</p>
                                <br>

                            </div>
                            <div class="education item">

                                <h3>Education <i class="ti-pencil"></i></h3>
                                <h4><strong>Examination : </strong>{{ $data->ssc_board }}</h4>
                                <p><strong>Result (percentage\CGPA) : </strong>{{ $data->ssc_result }}</p>
                                <span class="date"><strong>Passing Year : </strong>{{ $data->ssc_passing_year }}</span>
                                <br>
                                <br>
                                <h4><strong>Examination : </strong>{{ $data->hsc_board }}</h4>
                                <p><strong>Result (percentage\CGPA) : </strong>{{ $data->hsc_result }}</p>
                                <span class="date"><strong>Passing Year : </strong>{{ $data->hsc_passing_year }}</span>
                                <br>
                                <br>
                                <h4><strong>Examination : </strong>{{ $data->grad_exam_type }}</h4>
                                <h5><strong>Graduation field : </strong>{{ $data->grad_field }}</h5>
                                <h5><strong>University : </strong>{{ $data->grad_university }}</h5>
                                <h5><strong>Course Duration : </strong>{{ $data->grad_duration }}</h5>
                                <p><strong>Result (percentage\CGPA) : </strong>{{ $data->grad_result }}</p>
                                <span class="date"><strong>Passing Year : </strong>{{ $data->grad_pass_year }}</span>
                                <br>
                                <br>
                                <h4><strong>Examination : </strong>{{ $data->ms_exam_type }}</h4>
                                <h5><strong>Subject : </strong>{{ $data->ms_subject }}</h5>
                                <h5><strong>University : </strong>{{ $data->ms_university }}</h5>
                                <h5><strong>Course Duration : </strong>{{ $data->ms_duration }}</h5>
                                <p><strong>Result (percentage\CGPA) : </strong>{{ $data->ms_result }}</p>
                                <span class="date"><strong>Passing Year : </strong>{{ $data->ms_pass_year }}</span>

                            </div>

                            <div class="about-me item">
                                <h3>Employee Skills <i class="ti-pencil"></i></h3>
                                <p>{{ $data->skill }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--- Start Resume Section --->
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
