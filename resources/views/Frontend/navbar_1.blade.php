<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type="text/css">

<div class="logo-menu ">
    <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
            <div class="navbar-header pb-2">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="/"><h3 class="medium-title text-capitalize text-justify" style="color: rgb(253, 88, 82);">Speed Techserve</h3></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar" style="font-size: 13px; font-weight:800;">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="/">Home</a></li>
                    <li><a href="/about">Pages <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="/about">About</a></li>
                            <li><a href="/job-page">Job Page</a></li>
                            <li><a href="/job-details">Job Details</a></li>
                            <li><a href="/resume">Resume Page</a></li>
                            <li><a href="/privacy-policy">Privacy Policy</a></li>
                            <li><a href="/faq">FAQ</a></li>
                            <li><a href="/pricing">Pricing Tables</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Candidates <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="/browse-jobs">Browse Jobs</a></li>
                            <li><a href="/browse-categories">Browse Categories</a></li>
                            <li><a href="/add-resume">Add Resume</a></li>
                            <li><a href="/manage-resumes">Manage Resumes</a></li>
                            <li><a href="/job-alerts">Job Alerts</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Employers <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="/post-jobs">Add Job</a></li>
                            <li><a href="/job-alerts">Manage Jobs</a></li>
                            <li><a href="/manage-applications">Manage Applications</a></li>
                            <li><a href="/browse-resumes">Browse Resumes</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Others <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="/Job-Fair">Job Fair&nbsp;&nbsp;&nbsp;<span class="label label-success">New</span></a></li>
                            <li><a href="/Institute">Institute</a></li>
                            <li><a href="/Consultancy">Consultancy</a></li>
                            <li><a href="/Companies">Companies</a></li>
                            <li><a href="/Job-Seeker">Job Seeker</a></li>
                            <li><a href="/Training">Training</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right float-right">
                    @guest
                        <li class="btn-m">
                            <a  href="{{ route('login') }}"><i class="ti-lock"></i> Log In</a>
                        </li>
                        <li class="btn-m">
                            <a  href="{{ route('register') }}"><i class="fas fa-sign-in-alt"></i> Register</a>
                        </li>
                    @else
                        <li class="btn-m">
                            <a href="/post-jobs"><i class="ti-pencil-alt"></i> Post Job</a>
                        </li>
                        <li class="btn-m">
                           <a  href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>

        <ul class="wpb-mobile-menu" style="font-size: 13px; font-weight:800;">
            <li><a class="active" href="/">Home</a></li>
            <li>
                <a href="/about">Pages</a>
                <ul>
                    <li><a href="/about">About</a></li>
                    <li><a href="/job-page">Job Page</a></li>
                    <li><a href="/job-details">Job Details</a></li>
                    <li><a href="/resume">Resume Page</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/pricing">Pricing Tables</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </li>
            <li>
                <a href="#">For Candidates</a>
                <ul>
                    <li><a href="/browse-jobs">Browse Jobs</a></li>
                    <li><a href="/browse-categories">Browse Categories</a></li>
                    <li><a href="/add-resume">Add Resume</a></li>
                    <li><a href="/manage-resumes">Manage Resumes</a></li>
                    <li><a href="/job-alerts">Job Alerts</a></li>
                </ul>
            </li>
            <li>
                <a href="#">For Employers</a>
                <ul>
                    <li><a href="/post-jobs">Add Job</a></li>
                    <li><a href="/job-alerts">Manage Jobs</a></li>
                    <li><a href="/manage-applications">Manage Applications</a></li>
                    <li><a href="/browse-resumes">Browse Resumes</a></li>
                </ul>
            </li>

            <li><a href="#">Others</a>
                <ul class="dropdown">
                    <li><a href="/Job-Fair">Job Fair&nbsp;&nbsp;&nbsp;<span class="label label-success">New</span></a></li>
                    <li><a href="/Institute">Institute</a></li>
                    <li><a href="/Consultancy">Consultancy</a></li>
                    <li><a href="/Companies">Companies</a></li>
                    <li><a href="/Job-Seeker">Job Seeker</a></li>
                    <li><a href="/Training">Training</a></li>
                </ul>
            </li>

            @guest
                <li class="btn-m">
                    <a  href="{{ route('login') }}"><i class="ti-lock"></i> Log In</a>
                </li>
                <li class="btn-m">
                    <a  href="{{ route('register') }}"><i class="fas fa-sign-in-alt"></i> Register</a>
                </li>
            @else
                <li class="btn-m">
                    <a href="/post-jobs"><i class="ti-pencil-alt"></i> Post Job</a>
                </li>
                <li class="btn-m">
                    <a  href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            @endguest
        </ul>
    </nav>
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas" style="font-size: 18px; font-weight:800;">
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <i class="ti-close"></i>
        </div>
        <h3 class="title-menu">All Pages</h3>
        <ul class="nav navmenu-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About us</a></li>
            <li><a href="/job-page">Job Page</a></li>
            <li><a href="/job-details">Job Details</a></li>
            <li><a href="/resume">Resume Page</a></li>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
            <li><a href="/pricing">Pricing Tables</a></li>
            <li><a href="/browse-jobs">Browse Jobs</a></li>
            <li><a href="/browse-categories">Browse Categories</a></li>
            <li><a href="/add-resume">Add Resume</a></li>
            <li><a href="/manage-resumes">Manage Resumes</a></li>
            <li><a href="/job-alerts">Job Alerts</a></li>
            <li><a href="/post-jobs">Add Job</a></li>
            <li><a href="/job-alerts">Manage Jobs</a></li>
            <li><a href="/manage-applications">Manage Applications</a></li>
            <li><a href="/browse-resumes">Browse Resumes</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/faq">Faq</a></li>
            <li><a href="/my-account">Login</a></li>
            <li><a href="/Job-Fair">Job Fair&nbsp;&nbsp;&nbsp;<span class="label label-success">New</span></a></li>
            <li><a href="/Institute">Institute</a></li>
            <li><a href="/Consultancy">Consultancy</a></li>
            <li><a href="/Companies">Companies</a></li>
            <li><a href="/Job-Seeker">Job Seeker</a></li>
            <li><a href="/Training">Training</a></li>
        </ul>
    </div>
    <div class="tbtn wow pulse" id="menu" data-wow-iteration="infinite" data-wow-duration="500ms" data-toggle="offcanvas" data-target=".navmenu">
        <p> <i class="fas fa-tachometer-alt fa-3x" ></i>&nbsp;&nbsp;&nbsp;JobBoard</p>
    </div>
</div>
