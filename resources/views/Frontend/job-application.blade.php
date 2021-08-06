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

    <link real="stylesheet" hreaf="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

</head>
<style>
    .form-control:focus {
        border-color: #000;
        box-shadow: none;
    }

    label {
        font-weight: 600;
    }

    .error {
        color: red;
        font-weight: 400;
        display: block;
        padding: 6px 0;
        font-size: 14px;
    }

    .form-control.error {
        border-color: red;
        padding: .375rem .75rem;
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
                            <h2 class="product-title">Welcome</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Apply Job </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Header --->

        <!--- Start Job Application Section --->
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-2">
                        <div class="page-ads">

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif


                            <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data"
                                novalidate>
                                @csrf

                                <div class="divider box row">
                                    <h3>
                                        Contact&nbsp;<span class="text-success">Information</span>
                                    </h3>
                                </div>

                                <div class="row box">

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>First Name <strong class="text-danger">*</strong></label>
                                                <input type="text"
                                                    class="form-control @error('fname') is-invalid @enderror" required
                                                    id="fname" name="fname" placeholder="Enter your first name">
                                                @error('fname')
                                                <span class="invalid-feedback error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Middle Name <strong class="text-danger">*</strong></label>
                                                <input type="text"
                                                    class="form-control @error('mname') is-invalid @enderror" required
                                                    id="mname" name="mname" placeholder="Enter your middle name">
                                                @error('mname')
                                                <span class="invalid-feedback error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-4">
                                                <label>Last Name <strong class="text-danger">*</strong></label>
                                                <input type="text"
                                                    class="form-control @error('lname') is-invalid @enderror" required
                                                    id="lname" name="lname" placeholder="Enter your last name">
                                                @error('lname')
                                                <span class="invalid-feedback error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Email <strong class="text-danger">*</strong></label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" id="email" placeholder="Enter your email-id here">
                                                @error('email')
                                                <span class="invalid-feedback error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Phone <strong class="text-danger">*</strong></label>
                                                <input type="text"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    name="phone" id="phone" placeholder="Enter your contact no.">
                                                @error('phone')
                                                <span class="invalid-feedback error" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class="divider box row">
                                    <h3>
                                        Employee&nbsp;<span class="text-success">Position</span>
                                    </h3>
                                </div>
                                <div class="row box">
                                    <div class="form-group">
                                        <label>Position you are applying for <strong
                                                class="text-danger">*</strong></label>
                                        <input type="text"
                                            class="form-control @error('position_applying') is-invalid @enderror"
                                            name="position_applying" id="position_applying"
                                            placeholder="Enter your contact no.">
                                        @error('position_applying')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Portfolio website</label>
                                        <input type="text"
                                            class="form-control @error('portfolio_website') is-invalid @enderror"
                                            name="portfolio_website" id="portfolio_website"
                                            placeholder="Ex:- https://Enter-your-domain.com">

                                        @error('portfolio_website')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Salary requirements</label>
                                        <input type="text"
                                            class="form-control @error('Salary_requirements') is-invalid @enderror"
                                            name="Salary_requirements" id="Salary_requirements"
                                            placeholder="Enter your salary requirements.">

                                        @error('Salary_requirements')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>When can you start?</label>
                                        <input type="date"
                                            class="form-control @error('job_starting_date') is-invalid @enderror"
                                            name="job_starting_date" id="job_starting_date"
                                            placeholder="When can you starting Job.">

                                        @error('job_starting_date')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-checkbox">
                                        <label>Are you willing to relocate?</label><br>
                                        <span><input type="radio" id="radio" name="radio" value="Yes" />
                                            Yes</span><br />
                                        <span><input type="radio" id="radio" name="radio" value="No" />
                                            No</span><br />
                                        <span><input type="radio" id="radio" name="radio" value="Not_sure" /> Not
                                            sure</span><br />
                                    </div>

                                    <div class="form-group">
                                        <label>Last company you worked for?</label>
                                        <input type="text"
                                            class="form-control @error('last_company_worked') is-invalid @enderror"
                                            name="last_company_worked" id="last_company_worked"
                                            placeholder="Enter here name which is worked for last company...">

                                        @error('last_company_worked')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="textarea">Message</label>
                                    </div>
                                    <section required id="editor" style="margin-bottom: 30px;">
                                        <textarea id="summernote" required name="message" class="summernote"></textarea>
                                    </section>

                                    <div class="field ">
                                        <strong>
                                            <h5><i class="fa fa-upload fa-2x text-info" aria-hidden="true"></i>&nbsp; Upload your resume file</h5>
                                        </strong><br>
                                        <div class="button-group">
                                            <div class="action-buttons">
                                                <div class="upload-button">
                                                    <strong>
                                                        <input id="cover_img_file" class="btn btn-common  @error('resume') is-invalid @enderror" type="file" name="resume">
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                        @error('resume')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-common pull-right">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--- End Add Resume --->
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 250,
                placeholder: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quia aut modi fugit, ratione saepe perferendis odio optio repellat dolorum voluptas excepturi possimus similique veritatis nobis. Provident cupiditate delectus, optio?',
                tabsize: 2,
                focus: true
            });
        });
    </script>
</body>

</html>
