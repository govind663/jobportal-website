<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Manage Resume</title>
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

        <!--- Start Header Section --->
        <div class="page-header" style="background: url(assets/img/banner1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-wrapper">
                            <h2 class="product-title">Manage Resumes</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Manage Resumes</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End header Section --->

        <!--- Start Manage Resumes Section --->
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

                    {{-- <div class="container col-sm-8">
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                    placeholder="Search users"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-common">
                                        <strong><i class="fa fa-search fa-2x fa-spin" aria-hidden="true"></i></strong>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div> --}}

                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="job-alerts-item candidates">

                            <h3 class="medium-title">Manage Resume
                                <a class="btn btn-common btn-sm pull-right" href="{{ route('/add-resume') }}"><strong><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add new resume</strong></a>
                            </h3><br>
                            @foreach($petani as $key => $data)
                            <div class="manager-resumes-item">
                                <div class="manager-content">
                                    <div class="row box col-sm-3" >
                                        <a href="/resume"><img class="resume-thumb" src="/image/{{ $data->image }}" alt=""></a>
                                    </div>
                                    <div class="manager-info">
                                        <div class="manager-name">
                                            <h4><a href="#">{{ $data->fname }}{{ $data->lname }}</a></h4>
                                            <h5>{{ $data->jposition }}</h5>
                                        </div>
                                        <div class="manager-meta col-sm-6 text-justify">
                                            <span class="location"><i class="ti-location-pin"></i>&nbsp; {{ $data->address }}</span>
                                            <span class="rate"><i class="fa fa-envelope-open" aria-hidden="true"></i>&nbsp; {{ $data->email }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="update-date">
                                    <p class="status">
                                        <strong>Updated on : </strong>{{ $data->updated_at }}
                                    </p>

                                    <div class="action-btn">
                                        <form action="{{ route('products.destroy',$data->id) }}" method="POST">
                                            <a class="btn btn-xs btn-gray" href="{{ route('/resume',$data->id) }}"><strong><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View</strong></a>
                                            <a class="btn btn-xs btn-gray" href="{{ route('/edit-resume',$data->id) }}"><strong><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Edit</strong></a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-xs btn-danger"><strong><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</strong></butt>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            {{-- Pagination --}}
                            <div class="d-flex justify-content-center pagination">
                                {!! $products->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Manage Resume Section --->
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
