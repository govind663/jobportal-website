<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Consultancy</title>
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

<style>
.container {
  max-width: 1320px;
}
section {
  overflow: hidden;
}

.section-bg {
  background: #fdfdfd;
}

.section-header h3 {
  font-size: 36px;
  color: #f8392b;
  text-align: center;
  font-weight: 700;
  position: relative;
  font-family: "Montserrat", sans-serif;
}

.section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #000000;
  width: 50%;
}

@media (max-width: 767px) {
  .section-header p {
    width: 100%;
  }
}

#services {
  padding: 60px 0 40px 0;
}

#services .box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  margin: 0 10px 40px 10px;
  background: rgb(183, 236, 240);
  box-shadow: 0 10px 29px 0 rgba(68, 88, 144, 0.1);
  transition: all 0.3s ease-in-out;
  text-align: center;
}

#services .box:hover {
  transform: scale(1.1);
}

#services .icon {
  margin: 0 auto 15px auto;
  padding-top: 12px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 60px;
  height: 60px;
}

#services .icon .service-icon {
  font-size: 36px;
  line-height: 1;
}

#services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

#services .title a {
  color: rgb(0, 0, 0);
}

#services .box:hover .title a {
  color: #f13232;
}
#services .box:hover .title a:hover {
  text-decoration: none;
}
#services .description {
  font-size: 14px;
  line-height: 28px;
  margin-bottom: 0;
  text-align: left;
  color:#000000;
}


.logo {
  flex: 0 1 auto;
}
</style>

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
              <h2 class="product-title">Welcome To Job4Skill</h2>
              <ol class="breadcrumb">
                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                <li class="current">Companies</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- End Header --->    
    
    <!--- Start Compines Section --->    
    <section class="services section-bg animated fadeInUp" id="services" >
      <div class="container">
        <header class="section-header">
          <h3>OUR FEATURES</h3>
          <p class="text-justify ">
            With so many listed jobs, finding that perfect role can be a time consuming process. 
            And, there’s always a danger that you’ll miss the right one in the constant stream of 
            updates.
          </p>
        </header>

        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-user service-icon" style="color: white;"></i>
              </div>
              <h4 class="title"><a href="">Reputed Companies</a></h4>
              <p class="description">
                Having tie-up with the IT and Non It reputed companies, so you it will assist to find 
                out suitable dream job of yours. You can apply the posted job which is suitable for you.
              </p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-refresh service-icon" style="color: white;"></i>
              </div>
              <h4 class="title"><a href="">Regular Updates</a></h4>
              <p class="description">
                Job portals have a very convenient feature. Once you are registered with a 
                Job4Skill, you will be updated with the latest job openings via e-mails.
              </p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-shield-alt service-icon" style="color: white;"></i>
              </div>
              <h4 class="title"><a href="">Authenticity</a></h4>
              <p class="description">
                You can trust the Job4Skill job portal without any hesitation. 
                All the job listings on the Job4Skill are genuine and there isn’t 
                any unauthentic information.
              </p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-thumbs-up service-icon" style="color: white;"></i>
              </div>
              <h4 class="title"><a href="">
                A helping hand</a>
              </h4>
              <p class="description">
                We are here to help whether you’re looking for a change of career or are 
                looking to sharpen up your CV we can help and advise you.
              </p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-search service-icon" style="color:white;"></i>
              </div>

              <h4 class="title"><a href="">Wider search reach</a></h4>
          
              <p class="description">
                Different organizations from India can post job requirements on job portals. 
                You can search for any job according to your preferences from a large number 
                of job.
              </p>
            </div>
          </div>       
                
          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-check-circle service-icon" style="color:white;"></i>
              </div>
            
              <h4 class="title"><a href="">Confidentiality</a></h4>
            
              <p class="description">
                Whenever you register yourself with a Job4Skill, all your personal details and 
                information are kept confidential. No one can view your personal and organization 
                information.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- End Compines Section --->
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