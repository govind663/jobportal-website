<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">
  <title>JobBoard - Bootstrap HTML5 Job Portal Template</title>
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

<style type="text/css">
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
                <li class="current">Consultancy</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--- End Header --->    
    
    <!--- Start Our Features --->    
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
                <i class="fa fa-refresh service-icon" style="color: white;"></i>
              </div>
          
              <h4 class="title"><a href="">Easy to Use</a></h4>
          
              <p class="description">
                Vacancies can be added to a site so your jobs are advertised quickly, and you can 
                start to receive applications as soon as possible.
              </p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-check service-icon" style="color: white;"></i>
              </div>
          
              <h4 class="title"><a href="">Skilled Data</a></h4>
          
              <p class="description">
                Job4Skill provides unlimited database of verified and skillful, knowledgeable 
                candidates. This will help for your job role requirement.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-users service-icon" style="color: white;"></i>
              </div>
          
              <h4 class="title"><a href="">Your Recruitment Partner</a></h4>
          
              <p class="description">
                Working with Job4Skill means you get access to the tools and skills of recruitment 
                experts while vastly reducing your time to hire and agency costs.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="box">
              <div class="icon" style="background: rgb(241, 57, 57);">
                <i class="fa fa-building service-icon" style="color: white;"></i>
              </div>
    
              <h4 class="title"><a href="">
                Faster Hiring</a>
              </h4>
          
              <p class="description">
                The time it takes you to hire a new candidate should be at the forefront of how you 
                analyze your recruitment processes. The more effective your online advertising.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- End Our Features --->
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