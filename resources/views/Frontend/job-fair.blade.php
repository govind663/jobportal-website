<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Job Fair</title>
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
/* something different*/
/* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: rgba(255, 255, 255, 0.973) !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #ec3629;
    border-color: #ec3629;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #ec3629;
    border-color: #ec3629;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #ec3629;
    margin-bottom: 50px;
    text-transform: capitalize;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #ec3629 !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #ec3629 !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 5%;
}
</style>
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
                            <h2 class="product-title">Training & Live Projects</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Job Fair</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Header Section --->

        <!-- Start Job Fair Section -->
        <section id="team" class="pb-5">
            <div class="container">
                <h1 class="section-title h1">Job Fair Information</h1>
                <div class="row">
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip">
                            <div class="mainflip flip-0">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="assets/img/job-fair/jobFair_pic1.jpg" alt="card image"></p>
                                            <br>
                                            <h4 class="card-title">About Job Fair</h4>
                                            <p class="card-text">The job fair will offer employers with an excellent opportunity to </p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">About Job Fair</h4>
                                            <p class="card-text text-justify">
                                                <i class="fa fa-quote-left text-danger" aria-hidden="true"></i>
                                                The job fair will offer employers with an excellent opportunity to 
                                                deal with their active as well as future staffing requirements by 
                                                using modern recruiting methods. Quality candidates, low cost per 
                                                hire, face-to-face interviews, and other some benefits that will 
                                                be offered at the event.
                                                The job fair which will bring together employers, experienced, 
                                                professionals and entry level talented individuals under one roof. 
                                               
                                                <i class="fa fa-quote-right text-danger" aria-hidden="true"></i>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://facebook.com/">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://www.skype.com/en/">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://google.com/">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="assets/img/job-fair/jobFair_pic2.jpg" alt="card image"></p>
                                            <br>
                                            <h4 class="card-title">About Companies</h4>
                                            <p class="card-text">The job Fair offers excellent opportunity from Companies to job seeker.</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">About Companies</h4>
                                            <p class="card-text text-justify">
                                                <i class="fa fa-quote-left text-danger" aria-hidden="true"></i>
                                                The job Fair offers excellent opportunity from Companies to job seeker. 
                                                Companies from different sectors will be together to searching a right 
                                                candidate for the right position. Companies having N numbers of Job 
                                                opening to fresher’s as well as experienced candidates. A job fair 
                                                event is conducted by inviting a large number of Companies and allowing 
                                                them to have their own booths or stalls.
                                                <i class="fa fa-quote-right text-danger" aria-hidden="true"></i>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://facebook.com/">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://skype.com/">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://google.com/">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="assets/img/job-fair/jobFair_pic3.jpg" alt="card image"></p>
                                            <br>
                                            <h4 class="card-title">Requirements</h4>
                                            <p class="card-text"> Within interview candidates should note that below things</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Requirements</h4>
                                            <p class="card-text text-justify">
                                                <i class="fa fa-quote-left text-danger" aria-hidden="true"></i>
                                                Within interview candidates should note that below things:
 
                                                <br>
                                                <strong>•</strong> Carry 5+ Copies of resume<br>
                                                <strong>•</strong> Photo.<br>
                                                <strong>•</strong> Certificate Copies.<br>
                                                <strong>•</strong> ID proof.<br>
                                                <i class="fa fa-quote-right text-danger" aria-hidden="true"></i>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="hhttps://facebook.com/">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="hhttps://twitter.com/">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="hhttps://skype.com/">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="hhttps://google.com/">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                    <!-- Team member -->
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class=" img-fluid" src="assets/img/job-fair/jobFair_pic4.jpg" alt="card image"></p>
                                            <br>
                                            <h4 class="card-title">Candidates</h4>
                                            <p class="card-text"> Job fairs are usually one-day events that attempt to connect several employers with 
                                                prospective employees.</p>
                                            <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Candidates</h4>
                                            <p class="card-text text-justify">
                                                <i class="fa fa-quote-left text-danger" aria-hidden="true"></i>
                                                Job fairs are usually one-day events that attempt to connect several employers with 
                                                prospective employees. Attending a job fair and meeting with several employees will 
                                                give students an idea of how to act and behave around professionals. They can practice 
                                                introducing themselves to employers and hiring managers. The discussions and interviews 
                                                will also prepare them for possible interviews in future. 
                                                <i class="fa fa-quote-right text-danger" aria-hidden="true"></i>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://facebook.com/">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://skype.com/">
                                                        <i class="fa fa-skype"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="social-icon text-xs-center" target="_blank" href="https://google.com/">
                                                        <i class="fa fa-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->    
                </div>
            </div>
        </section>
        <!-- End Job Fair Section -->
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