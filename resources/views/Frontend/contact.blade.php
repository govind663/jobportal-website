<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Contact</title>
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

<body>
    <div class="header">

        <!--- Start Navbar Here --->
        @include('Frontend.navbar_1')
        <!--- End Navbar Here --->

        <!--- Start Header --->
        <div class="page-header" style="background: url(assets/img/banner1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper">
                            <h2 class="product-title">Get In Touch</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Contact Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Header --->

        <!--- Start Google Map Section --->
        <div class="container p-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.787721173561!2d73.82736931489167!3d18.44794498745129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2953a76746033%3A0x4897768b8344c211!2sSpeed%20Techserve%20Pvt%20Ltd%20(OPC)!5e0!3m2!1sen!2sin!4v1625857860263!5m2!1sen!2sin" width="100%" height="600px;" style="border:0; padding-top: 100px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!--- End Google Map Section --->

        <!--- Start Contact Us Section --->
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box">
                            <h2 class="medium-title">
                                Contact Us
                            </h2>
                        </div>
                        <br>

                        <div class="box">
                            <div class="information">
                                <div class="contact-datails">
                                    <div class="icon">
                                        <i class="ti-location-pin"></i>
                                    </div>
                                    <div class="info">
                                        <h3>Address</h3>
                                        <span class="detail">1st & 2nd Floor, Opp. To Vrundavan Hall,</span>
                                        <span class="datail"> Vetalbuva Chowk, Narhe-katraj Road, </span>
                                        <span class="detail">Pune, Maharashtra 411041.</span>
                                    </div>
                                </div>
                                <div class="contact-datails">
                                    <div class="icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="info">
                                        <h3>Phone Numbers</h3>
                                        <span class="detail">Main Office: 99759 23975</span>
                                    </div>
                                </div>
                                <div class="contact-datails">
                                    <div class="icon">
                                        <i class="ti-location-arrow"></i>
                                    </div>
                                    <div class="info">
                                        <h3>Email Address</h3>
                                        <span class="detail">Customer
                                            Support: <span>job4skill@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="row box">
                            <div class="medium-title ">
                                <h6><i class="fa fa-send text-danger fa-2x" aria-hidden="true"></i>&nbsp; GET IN TOUCH....!!</h6>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                        </div>
                        <br>
                        <form method="post" class="row box" action="{{ route('contact.store') }}">
                            {{ csrf_field() }}
                            <div class="row">
                              <div class="col-md-6 ">
                                <div class="form-group">
                                  <strong style="color: rgb(44, 40, 40); font-size:18px; font-weight:800px;"> Name:</strong>
                                  <input type="text"  placeholder="Ex: James Potter" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">

                                  <!-- Error -->
                                  @if ($errors->has('name'))
                                    <div class="error">
                                        <strong class="text-justify text-danger">{{ $errors->first('name') }}</strong>
                                    </div>
                                  @endif
                                </div>
                              </div>

                              <div class="col-md-6 ">
                                <div class="form-group ">
                                  <strong style="color: #rgb(44, 40, 40);font-size:18px; font-weight:800px;">Email:</strong>
                                  <input type="email" placeholder="Ex: james.potter8452@gmail.com" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">

                                  <!-- Error -->
                                  @if ($errors->has('email'))
                                    <div class="error">
                                        <strong class="text-justify text-danger">{{ $errors->first('email') }}</strong>
                                    </div>
                                  @endif
                                </div>
                              </div>
                            </div>

                            <div class="row ">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <strong style="color: rgb(44, 40, 40); font-size:18px; font-weight:800px;"> Phone:</strong>
                                  <input type="text" placeholder="Ex: +91 000 000 000 00" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">

                                  <!-- Error -->
                                  @if ($errors->has('phone'))
                                    <div class="error">
                                        <strong class="text-justify text-danger">{{ $errors->first('phone') }}</strong>
                                    </div>
                                  @endif
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <strong style="color: rgb(44, 40, 40); font-size:18px; font-weight:800px;">Subject:</strong>
                                  <input type="text" placeholder="subject" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                    id="subject">

                                  <!-- Error -->
                                  @if ($errors->has('subject'))
                                    <div class="error">
                                        <strong class="text-justify text-danger">{{ $errors->first('subject') }}</strong>
                                    </div>
                                  @endif
                                </div>
                              </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <strong style="color: rgb(44, 40, 40); font-size:18px; font-weight:800px;">Message:</strong>
                                    <textarea placeholder="Here goes your comment" class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                                      rows="4"></textarea>

                                    <!-- Error -->
                                    @if ($errors->has('message'))
                                      <div class="error">
                                          <strong class="text-justify text-danger">{{ $errors->first('message') }}</strong>
                                      </div>
                                    @endif
                                  </div>
                                </div>
                            </div>

                            <div class="form-group text-center mt-5">
                                <button type="submit" name="send" value="Submit" class="btn btn-success btn-submit" style="background-color:#f14040;">Send Messages</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--- End Contact Us Section --->
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
    <script type="text/javascript" src="assets/js/jasny-bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>

</body>

</html>
