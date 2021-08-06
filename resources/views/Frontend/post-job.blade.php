<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Post Jobs</title>
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
    <link rel="stylesheet" href="assets/extras/summernote.css" type="text/css">
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
                            <h2 class="product-title">Post A Job</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Post A Job</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Header Section --->

        <!--- Start Post Jobs Section --->
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9 col-md-offset-2">
                        <div class="row box">
                            <div class="divider text-success text-capitalize">
                                <h1 class="text-center">Hello, Post your job Champ...!!</h1>
                            </div>
                            <br>

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <br>
                        <div class="page-ads box">
                            <form class="form-ad" action="{{ route('posts.store') }}" novalidate method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label">Your Email</label>
                                    <input type="text" class="form-control" placeholder="mail@example.com" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Job Title</label>
                                    <input type="text" class="form-control" name="job_title" id="job_title" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Location <span>(optional)</span></label>
                                    <input type="text" class="form-control" placeholder="e.g.London" name="location" id="location" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Category</label>
                                    <div class="search-category-container" >
                                        <label class="styled-select" >
                                            <select class="dropdown-product selectpicker"  name="category" id="category">
                                                <option value="selected">Please Selected your Job role.</option>
                                                    <option value="Software developer">Software developer</option>
                                                    <option value="Systems analyst">Systems analyst</option>
                                                    <option value="Business analyst">Business analyst</option>
                                                    <option value="Network engineer">Network engineer</option>
                                                    <option value="Technical sales representative">Technical sales representative</option>
                                                    <option value="Project manager">Project manager</option>
                                                    <option value="Web designer">Web designer</option>
                                                    <option value="QA analyst">QA analyst</option>
                                                    <option value="Support specialist">Support specialist</option>
                                                    <option value="Computer programmer">Computer programmer</option>
                                                    <option value="Quality assurance tester"> Quality assurance tester</option>
                                                    <option value="IT technician">IT technician</option>
                                                    <option value="User experience designer">User experience designer</option>
                                                    <option value="Database administrator">Database administrator</option>
                                                    <option value="Computer scientist">Computer scientist</option>
                                                    <option value="IT security specialist">IT security specialist</option>
                                                    <option value="Data scientist">Data scientist</option>
                                                    <option value="Cloud system engineer">Cloud system engineer</option>
                                                    <option value="Applications engineer">Applications engineer</option>
                                                    <option value="Part-Time">Part-Time</option>
                                                    <option value="Full-Time">Full-Time</option>
                                                    <option value="Self-Employed">Self-Employed</option>
                                                    <option value="Internship">Internship</option>
                                                    <option value="Finance">Finance</option>
                                                    <option value="IT & Engineering">IT & Engineering</option>
                                                    <option value="Education/Training">Education/Training</option>
                                                    <option value="Art/Design">Art/Design</option>
                                                    <option value="Sale/Markting">Sale/Markting</option>
                                                    <option value="Healthcare">Healthcare</option>
                                                    <option value="Science">Science</option>
                                                    <option value="Food Services">Food Services</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Job Tags <span>(optional)</span></label>
                                    <input type="text" class="form-control" placeholder="e.g.PHP,Social Media,Management" name="job_tags" id="job_tags" required>
                                    <p class="note">Comma separate tags, such as required skills or technologies, for this job.</p>
                                </div>

                                <div id=""editor>
                                    <label><strong>Description :</strong></label>
                                    <textarea class="summernote" name="description"></textarea>
                                </div>


                                <div class="form-group">
                                    <label class="control-label">Application email / URL</label>
                                    <input type="text" class="form-control" name="application_url" id="application_url" required placeholder="Enter an email address or website URL">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Closing Date <span>(optional)</span></label>
                                    <input type="date" class="form-control" placeholder="yyyy-mm-dd" name="closing_date" id="closing_date" required>
                                    <p class="note">Deadline for new applicants.</p>
                                </div>
                                <div class="divider">
                                    <h3>Company Details</h3>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Company Name</label>
                                    <input type="text" class="form-control" placeholder="Enter the name of the company" name="company_name" id="company_name" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Website <span>(optional)</span></label>
                                    <input type="text" class="form-control" placeholder="http://" name="web" id="web" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Tagline <span>(optional)</span></label>
                                    <input type="text" class="form-control" placeholder="Briefly describe your company" name="tagline" id="tagline" required>
                                </div>

                                <div class="field ">
                                    <strong>
                                        <h5><i class="fa fa-upload fa-2x text-info" aria-hidden="true"></i>&nbsp; Upload your company logo <strong class="text-bold text-danger">*</strong></h5>
                                    </strong><br>
                                    <div class="button-group">
                                        <div class="action-buttons">
                                            <div class="upload-button">
                                                <strong>
                                                    <input type="file" id="image3" name="image3" class="btn btn-common  @error('image3') is-invalid @enderror">
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                    @error('image3')
                                    <span class="invalid-feedback error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <br>

                                <button type="sumbit" class="btn btn-common">Submit your job</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--- End Post Jobs Section --->
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
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 250, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: true // set focus to editable area after initializing summernote
            });
        });
    </script>
</body>

</html>
