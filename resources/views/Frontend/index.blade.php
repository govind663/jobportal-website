<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome JobBoard Coding Thunder</title>
    <link rel="shortcut icon" href="assets/img/favicon_1.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.css" type="text/css">
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

    /*--------------------------------------------------------------
    # Clients
    --------------------------------------------------------------*/
    .clients .clients-wrap {
      border-top: 1px solid #f1eeed;
      border-left: 1px solid #f1eeed;
    }

    .clients .client-logo {
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-right: 1px solid #f1eeed;
      border-bottom: 1px solid #f1eeed;
      overflow: hidden;
      background: #fff;
      height: 100px;
    }

    .clients .client-logo img {
      transition: all 0.3s ease-in-out;
      height: 36px;
      filter: grayscale(100%);
    }

    .clients .client-logo:hover img {
      filter: none;
      transform: scale(1.1);
    }

</style>
<body>
    <div class="header">
        <section id="intro" class="section-intro">
            <!--- Start Navbar Here --->
            @include('Frontend.navbar')
            <!--- End Navbar Here --->

            <!--- Start Search section ---->
            <div class="search-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Find the job that fits your life</h1><br>
                            <h2>More than <strong>12,000</strong> jobs are waiting to Kickstart your career!</h2>
                            <div class="content">
                                <form method="" action="">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="job title / keywords / company name">
                                                <i class="ti-time"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" type="email" placeholder="city / province / zip code">
                                                <i class="ti-location-pin"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="search-category-container">
                                                <label class="styled-select">
                                                    <select class="dropdown-product selectpicker">
                                                        <option>All Categories</option>
                                                        <option>Finance</option>
                                                        <option>IT & Engineering</option>
                                                        <option>Education/Training</option>
                                                        <option>Art/Design</option>
                                                        <option>Sale/Markting</option>
                                                        <option>Healthcare</option>
                                                        <option>Science</option>
                                                        <option>Food Services</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-6">
                                            <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="popular-jobs">
                                <b>Popular Keywords: </b>
                                <a href="#">Web Design</a>
                                <a href="#">Manager</a>
                                <a href="#">Programming</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--- End Search section ---->

    <!--- Start Hot Jobs --->
    <section class="find-job section">
        <div class="container">
            <h2 class="medium-title">Hot Jobs</h2>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="row">
                <div class="col-md-12">
                    <div class="job-list">
                        <div class="thumb">
                            <a href="/job-details"><img src="assets/img/jobs/img-1.jpg" alt=""></a>
                        </div>
                        <div class="job-list-content">
                            <h4><a href="/job-details">Need a web designer</a><span class="full-time">Full-Time</span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                            <div class="job-tag">
                                <div class="pull-left">
                                    <div class="meta-tag">
                                        <span><a href="/browse-categories"><i class="ti-brush"></i>Art/Design</a></span>
                                        <span><i class="ti-location-pin"></i>Washington, USA</span>
                                        <span><i class="ti-time"></i>60/Hour</span>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="icon">
                                        <i class="ti-heart"></i>
                                    </div>
                                    <a href="/job-details" class="btn btn-common btn-rm">Apply Job</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="/job-details"><img src="assets/img/jobs/img-2.jpg" alt=""></a>
                        </div>
                        <div class="job-list-content">
                            <h4><a href="/job-details">Front-end developer needed</a><span class="full-time">Full-Time</span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                            <div class="job-tag">
                                <div class="pull-left">
                                    <div class="meta-tag">
                                        <span><a href="/browse-categories"><i class="ti-desktop"></i>Technologies</a></span>
                                        <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                                        <span><i class="ti-time"></i>60/Hour</span>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="icon">
                                        <i class="ti-heart"></i>
                                    </div>
                                    <a href="/job-details" class="btn btn-common btn-rm">Apply Job</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="/job-details"><img src="assets/img/jobs/img-3.jpg" alt=""></a>
                        </div>
                        <div class="job-list-content">
                            <h4><a href="/job-details">Senior Accountant</a><span class="part-time">Part-Time</span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                            <div class="job-tag">
                                <div class="pull-left">
                                    <div class="meta-tag">
                                        <span><a href="/browse-categories"><i class="ti-home"></i>Finance</a></span>
                                        <span><i class="ti-location-pin"></i>Delaware, USA</span>
                                        <span><i class="ti-time"></i>60/Hour</span>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="icon">
                                        <i class="ti-heart"></i>
                                    </div>
                                    <a href="/job-details" class="btn btn-common btn-rm">Apply Job</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-list">
                        <div class="thumb">
                            <a href="/job-details"><img src="assets/img/jobs/img-4.jpg" alt=""></a>
                        </div>
                        <div class="job-list-content">
                            <h4><a href="/job-details">Fullstack web developer needed</a><span class="full-time">Full-Time</span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                            <div class="job-tag">
                                <div class="pull-left">
                                    <div class="meta-tag">
                                        <span><a href="/browse-categories"><i class="ti-desktop"></i>Technologies</a></span>
                                        <span><i class="ti-location-pin"></i>New York, USA</span>
                                        <span><i class="ti-time"></i>60/Hour</span>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="icon">
                                        <i class="ti-heart"></i>
                                    </div>
                                    <a href="/job-details" class="btn btn-common btn-rm">Apply Job</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="showing pull-left">
                        <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>
                    </div>
                    <ul class="pagination pull-right">
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
    </section>
    <!--- End Hot Jobs --->

    <section class="section purchase" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="section-content text-center">
                    <h1 class="title-text">
                        Looking for a Job
                    </h1>
                    <p>Join thousand of employers and earn what you deserve!</p>
                    <a href="/my-account" class="btn btn-common">Get Started Now</a>
                </div>
            </div>
        </div>
    </section>

    <!--- Start Featured Jobs --->
    <section class="featured-jobs section">
        <div class="container">
            <h2 class="medium-title">
                Featured Jobs
            </h2>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="/job-page">
                                        <img src="assets/img/features/img-1.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="/job-page">Graphic Designer</a></h3>
                                    <div class="adderess"><i class="ti-location-pin"></i> Dallas, United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 4 months ago</span>
                            <span><i class="ti-time"></i> Full Time</span>
                            <div class="view-iocn">
                                <a href="/job-page"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="/job-page">
                                        <img src="assets/img/features/img-2.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="/job-page">Software Engineer</a></h3>
                                    <div class="adderess"><i class="ti-location-pin"></i> Delaware, United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 5 months ago</span>
                            <span><i class="ti-time"></i> Part Time</span>
                            <div class="view-iocn">
                                <a href="/job-page"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="/job-page">
                                        <img src="assets/img/features/img-3.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="/job-page">Managing Director</a></h3>
                                    <div class="adderess"><i class="ti-location-pin"></i> NY, United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 3 months ago</span>
                            <span><i class="ti-time"></i> Full Time</span>
                            <div class="view-iocn">
                                <a href="/job-page"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="/job-page">
                                        <img src="assets/img/features/img-3.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="/job-page">Graphic Designer</a></h3>
                                    <div class="adderess"><i class="ti-location-pin"></i> Washington, United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 1 months ago</span>
                            <span><i class="ti-time"></i> Part Time</span>
                            <div class="view-iocn">
                                <a href="/job-page"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="/job-page">
                                        <img src="assets/img/features/img-2.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="/job-page">Software Engineer</a></h3>
                                    <div class="adderess"><i class="ti-location-pin"></i> Dallas, United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 6 months ago</span>
                            <span><i class="ti-time"></i> Full Time</span>
                            <div class="view-iocn">
                                <a href="/job-page"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="featured-wrap">
                            <div class="featured-inner">
                                <figure class="item-thumb">
                                    <a class="hover-effect" href="job-page">
                                        <img src="assets/img/features/img-1.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="item-body">
                                    <h3 class="job-title"><a href="/job-page">Managing Director</a></h3>
                                    <div class="adderess"><i class="ti-location-pin"></i> NY, United States</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-foot">
                            <span><i class="ti-calendar"></i> 7 months ago</span>
                            <span><i class="ti-time"></i> Part Time</span>
                            <div class="view-iocn">
                                <a href="/job-page"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- End Featured Jobs --->


    <!-- Start Testimonial --->
    <section id="testimonial" class="section">
        <div class="container">
            <div class="row">
                <div class="touch-slider" class="owl-carousel owl-theme">
                    <div class="item active text-center">
                        <img class="img-member" src="assets/img/testimonial/img1.jpg" alt="">
                        <div class="client-info">
                            <h2 class="client-name">Jessica <span>(Senior Accountant)</span></h2>
                        </div>
                        <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                    </div>
                    <div class="item text-center">
                        <img class="img-member" src="assets/img/testimonial/img2.jpg" alt="">
                        <div class="client-info">
                            <h2 class="client-name">John Doe <span>(Project Menager)</span></h2>
                        </div>
                        <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                    </div>
                    <div class="item text-center">
                        <img class="img-member" src="assets/img/testimonial/img3.jpg" alt="">
                        <div class="client-info">
                            <h2 class="client-name">Helen <span>(Engineer)</span></h2>
                        </div>
                        <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- End testimonimal --->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients pb-5">
        <div class="container">
            <div class="section-title">
                <h2 class="medium-title">Clients and Partner</h2>
            </div>
            <div class="row no-gutters clients-wrap clearfix">
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img2.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img3.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img4.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img5.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img6.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img7.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img8.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img9.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img10.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img11 (2).png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="assets/img/banner/img12.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Clients Section -->



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
    <script type="text/javascript" src="assets/js/jasny-bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
</body>

</html>
