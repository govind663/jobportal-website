<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>Speed Techserve | Welcome Resume_maker</title>

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

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

</head>
<style>
    label {
        font-weight: 500px;
        color: rgb(7, 7, 7);
        font-size: 16px;
    }

    /* bootstrap-tagsinput.css file - add in local */
    .bootstrap-tagsinput {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        display: inline-block;
        padding: 4px 6px;
        color: #555;
        vertical-align: middle;
        border-radius: 4px;
        width: 100%;
        line-height: 42px;
        cursor: text;
    }

    .bootstrap-tagsinput input {
        border: none;
        box-shadow: none;
        outline: none;
        background-color: transparent;
        padding: 0 6px;
        margin: 0;
        width: auto;
        max-width: inherit;
    }

    .bootstrap-tagsinput.form-control input::-moz-placeholder {
        color: #777;
        opacity: 1;
    }

    .bootstrap-tagsinput.form-control input:-ms-input-placeholder {
        color: #777;
    }

    .bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
        color: #777;
    }

    .bootstrap-tagsinput input:focus {
        border: none;
        box-shadow: none;
    }

    .bootstrap-tagsinput .badge {
        margin: 2px 0;
        padding: 5px 8px;
    }

    .bootstrap-tagsinput .badge [data-role="remove"] {
        margin-left: 8px;
        cursor: pointer;
    }

    .bootstrap-tagsinput .badge [data-role="remove"]:after {
        content: "×";
        padding: 0px 4px;
        background-color: rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        font-size: 13px
    }

    .bootstrap-tagsinput .badge [data-role="remove"]:hover:after {

        background-color: rgb(255, 8, 8);
    }

    .bootstrap-tagsinput .badge [data-role="remove"]:hover:active {
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    }

    .tt-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        list-style: none;
        font-size: 14px;
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        background-clip: padding-box;
        cursor: pointer;
    }

    .tt-suggestion {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: normal;
        line-height: 1.428571429;
        color: #333333;
        white-space: nowrap;
    }

    .tt-suggestion:hover,
    .tt-suggestion:focus {
        color: #ffffff;
        text-decoration: none;
        outline: 0;
        background-color: #428bca;
    }
    input[type="file"] {
  display: block;
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
                            <h2 class="product-title">Create Resume</h2>
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="ti-home"></i> Home</a></li>
                                <li class="current">Edit Resume</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- End Header --->

        <!--- Start Add Resume --->
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-2">
                        <div class="page-ads">
                            <div class="row box">
                                <div class="divider text-success text-capitalize">
                                    <h1 class="text-center">Hello, Edit your Resume Champ...!!</h1>
                                </div>
                                <br>

                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                            </div>
                            <br>

                            @foreach($petani as $key => $data)
                            <form action="{{ route('products.update',$data->id) }}" method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PUT')
                                <div class="row box">
                                    <div class="divider">
                                        <h3><i class="fa fa-user text-success" aria-hidden="true"></i>&nbsp; Basic <span
                                                class="text-success">Information</span>
                                        </h3>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Name</label>
                                            <input type="text" required id="age" name="fname" value="{{ $data->fname }}"
                                                placeholder="Enter First Name Here.." class="form-control">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name</label>
                                            <input type="text" required id="lname" name="lname" value="{{ $data->lname }}"
                                                placeholder="Enter Last Name Here.." class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Age</label>
                                            <input type="text" required id="age" name="age" placeholder="Enter your age Here.."
                                            value="{{ $data->age }}" class="form-control">
                                        </div>

                                        <div class="col-sm-6 form-group">
                                            <label>Gender</label>
                                            <input type="text" required id="gender" name="gender" value="{{ $data->gender }}"
                                                placeholder="Enter your gender Here.." class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>City</label>
                                            <input type="text" required id="city" name="city" value="{{ $data->city }}"
                                                placeholder="Enter City Name Here.." class="form-control">
                                        </div>

                                        <div class="col-sm-4 form-group">
                                            <label>State</label>
                                            <input type="text" required id="state" name="state" value="{{ $data->state }}"
                                                placeholder="Enter State Name Here.." class="form-control">
                                        </div>

                                        <div class="col-sm-4 form-group">
                                            <label>Zip</label>
                                            <input type="text" required id="zip" name="zip" placeholder="Enter Zip Code Here.."
                                            value="{{ $data->zip }}" class="form-control">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Phone Number</label>
                                            <input type="text" required id="phone" name="phone" value="{{ $data->phone }}"
                                                placeholder="Enter Phone Number Here.." class="form-control">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Email Address</label>
                                            <input type="text" required id="email" name="email" value="{{ $data->email }}"
                                                placeholder="Enter Email Address Here.." class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Website</label>
                                            <input type="text" required id="web" name="web" value="{{ $data->web }}"
                                                placeholder="Enter Website Name Here.." class="form-control">
                                        </div>

                                        <div class="col-sm-6 form-group">
                                            <label>Address</label>
                                            <input type="text" required id="address" name="address" value="{{ $data->address }}"
                                                placeholder="Enter your current address Here.." class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>About Your Self</label>
                                        <textarea required id="about" name="about" placeholder="Describe your self" rows="3"
                                        value="" class="form-control">{{ $data->about }}</textarea>
                                    </div>

                                    <div class="field ">
                                        <strong>
                                            <h5><i class="fa fa-upload fa-2x text-info" aria-hidden="true"></i>&nbsp; Upload your profile image <strong class="text-bold text-danger">*</strong></h5>
                                        </strong><br>
                                        <div class="button-group">
                                            <div class="action-buttons">
                                                <div class="upload-button">
                                                    <strong>
                                                        <input type="file" id="image" name="image" class="btn btn-common  @error('image') is-invalid @enderror">
                                                        <br>
                                                        <img src="/image/{{ $data->image }}" style="width: 200px; height:200px;">
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                        @error('image')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <br>
                                <br>
                                <div class="row box">
                                    <div class="divider">
                                        <h3><i class="fa fa-university text-success" aria-hidden="true"></i>&nbsp;
                                            Employee <span class="text-success">Education</span></h3>
                                    </div>
                                    <fieldset>
                                        <!-- ************ Start of SSC and HSC************** -->
                                        <div class="row">
                                            <!-- ************ Start of SSC ************** -->
                                            <div class="col-lg-6">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center" style="color:white;">SSC or
                                                            Equivalent Level*</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label for="board">Examination</label>
                                                            <input type="text" required id="ssc_board" name="ssc_board"
                                                                placeholder="Enter your examination board name..!!"
                                                                class="form-control" value="{{ $data->ssc_board }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="roll-no">Examination seat no</label>
                                                            <input type="number" name="ssc_roll_no" required id="ssc_roll_no"
                                                                class="form-control" value="{{ $data->ssc_roll_no }}"
                                                                placeholder="Enter your seat no..!!">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="result">Result (percentage\CGPA)</label>
                                                            <input type="number" class="form-control" name="ssc_result" value="{{ $data->ssc_result }}"
                                                                required id="ssc_result" placeholder="Enter your result in number">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="passing-year">Passing Year :</label>
                                                            <input type="month" class="form-control" name="ssc_passing_year" value="{{ $data->ssc_passing_year }}"
                                                                required id="ssc_passing_year" placeholder="Enter your Passing year">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ************ End of SSC ************** -->

                                            <!-- ************ Start of HSC ************** -->
                                            <div class="col-lg-6">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center" style="color:white;">HSC or
                                                            Equivalent Level*</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label for="board">Examination</label>
                                                            <input type="text" required id="hsc_board" name="hsc_board"
                                                                placeholder="Enter your examination board name..!!" value="{{ $data->hsc_board }}"
                                                                class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="roll-no">Examination seat no</label>
                                                            <input type="number" name="hsc_roll_no" required id="hsc_roll_no"
                                                                class="form-control" value="{{ $data->hsc_roll_no }}"
                                                                placeholder="Enter your seat no..!!">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="result">Result (percentage\CGPA)</label>
                                                            <input type="number" class="form-control" name="hsc_result" value="{{ $data->hsc_result }}"
                                                                required id="hsc_result" placeholder="Enter your result in number">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="passing-year">Passing Year :</label>
                                                            <input type="month" class="form-control" name="hsc_passing_year" value="{{ $data->hsc_passing_year }}"
                                                                required id="hsc_passing_year" placeholder="Enter your Passing year">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ************ End of HSC ************** -->
                                        </div>
                                        <!-- ************ End of SSC and HSC************** -->

                                        <!-- ************ Start of Graduation Level************** -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center" style="color:white;">
                                                            Graduation Level*</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <label for="grad_exam_type">Examination</label>
                                                                <input type="text" name="grad_exam_type" required id="grad_exam_type" value="{{ $data->grad_exam_type }}"
                                                                 class="form-control">
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="grad_result">Result</label>
                                                                <input type="number" name="grad_result" value="{{ $data->grad_result }}"
                                                                    class="form-control" required id="grad_result">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <label  for="grad_field">Graduation field</label>
                                                                <div class="search-category-container">
                                                                    <label class="styled-select">
                                                                        <select class="dropdown-product selectpicker" name="grad_field" required id="grad_field" value="{{ $data->grad_field }}">
                                                                            <option value="selected">Select One </option>
                                                                            <option value="COMPUTER SCIENCE (CS)">COMPUTER SCIENCE (CS)</option>
                                                                            <option value="COMPUTER ENGINEERING (CE)">COMPUTER ENGINEERING (CE)</option>
                                                                            <option value="COMPUTER SCIENCE AND ENGINEERING (CSE)">COMPUTER SCIENCE AND ENGINEERING (CSE)</option>
                                                                            <option value="ELECTRONICS AND COMPUTER SCIENCE (ECS)">ELECTRONICS AND COMPUTER SCIENCE (ECS)</option>
                                                                            <option value="COMPUTER AND INFORMATION TECHNOLOGY (CIT)">COMPUTER AND INFORMATION TECHNOLOGY (CIT)</option>
                                                                            <option value="INFORMATION AND COMMUNICATION TECHNOLOGY (ICT)">INFORMATION AND COMMUNICATION TECHNOLOGY (ICT)</option>
                                                                            <option value="INFORMATION TECHNOLOGY (IT)">INFORMATION TECHNOLOGY (IT)</option>
                                                                            <option value="SOFTWARE ENGINEERING (SE)">SOFTWARE ENGINEERING (SE)</option>
                                                                            <option value="Textile Engineering">Textile Engineering</option>
                                                                            <option value="ELECTRICAL AND ELECTRONICS ENGINEERING (EEE)">ELECTRICAL AND ELECTRONICS ENGINEERING (EEE)</option>
                                                                            <option value="ELECTRONICS AND TELECOMMUNICATION ENGINEERING (ETE)">ELECTRONICS AND TELECOMMUNICATION ENGINEERING (ETE)</option>
                                                                            <option value="ELECTRONICS AND COMMUNICATION ENGINEERING (ECE)">ELECTRONICS AND COMMUNICATION ENGINEERING (ECE)</option>
                                                                            <option value="CIVIL ENGINEERING (CE)">CIVIL ENGINEERING (CE)</option>
                                                                            <option value="MECHANICAL ENGINEERING (ME)">MECHANICAL ENGINEERING (ME)</option>
                                                                            <option value="INDUSTRIAL AND PRODUCTION ENGINEERING (IPE)">INDUSTRIAL AND PRODUCTION ENGINEERING (IPE)</option>
                                                                            <option value="ARCHITECTURE">ARCHITECTURE</option>
                                                                            <option value="MATHEMATICS">MATHEMATICS</option>
                                                                            <option value="PHYSICS">PHYSICS</option>
                                                                            <option value="CHEMISTRY">CHEMISTRY</option>
                                                                            <option value="STATISTICS">STATISTICS</option>
                                                                            <option value="GEOLOGICAL SCIENCES">GEOLOGICAL SCIENCES</option>
                                                                            <option value="ENVIRONMENTAL SCIENCES">ENVIRONMENTAL SCIENCES</option>
                                                                            <option value="PGD IN COMPUTER SCIENCE (CS)">PGD IN COMPUTER SCIENCE (CS)</option>
                                                                            <option value="PGD IN COMPUTER ENGINEERING (CE)">PGD IN COMPUTER ENGINEERING (CE)</option>
                                                                            <option value="PGD IN COMPUTER SCIENCE AND ENGINEERING (CSE)">PGD IN COMPUTER SCIENCE AND ENGINEERING (CSE)</option>
                                                                            <option value="PGD IN ELECTRONICS AND COMPUTER SCIENCE (ECS)">PGD IN ELECTRONICS AND COMPUTER SCIENCE (ECS)</option>
                                                                            <option value="PGD IN COMPUTER AND INFORMATION TECHNOLOGY (CIT)">PGD IN COMPUTER AND INFORMATION TECHNOLOGY (CIT)</option>
                                                                            <option value="PGD IN INFORMATION AND COMMUNICATION TECHNOLOGY (ICT)">PGD IN INFORMATION AND COMMUNICATION TECHNOLOGY (ICT)</option>
                                                                            <option value="PGD IN INFORMATION TECHNOLOGY (IT)">PGD IN INFORMATION TECHNOLOGY (IT)</option>
                                                                            <option value="PGD IN SOFTWARE ENGINEERING (SE)">PGD IN SOFTWARE ENGINEERING (SE)</option>
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="grad_pass_year">Passing Year</label>
                                                                <input type="month" name="grad_pass_year" value="{{ $data->grad_pass_year }}"
                                                                    required id="grad_pass_year" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <label for="grad_university">University</label>
                                                                <input type="text" name="grad_university" value="{{ $data->grad_university }}"
                                                                    required id="grad_university" class="form-control">
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="grad_duration">Course Duration</label>
                                                                <div class="search-category-container">
                                                                    <label class="styled-select">
                                                                        <select name="grad_duration" required id="grad_duration" class="dropdown-product selectpicker" value="{{ $data->grad_duration }}">
                                                                            <option value="selected">Select your cource duration of Under Graduation Degree.</option>
                                                                            <option value="1">1 Year</option>
                                                                            <option value="2">2 Years</option>
                                                                            <option value="3">3 Years</option>
                                                                            <option value="4">4 Years</option>
                                                                            <option value="5">5 Years</option>
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ************ End of Graduation Level************** -->

                                        <!-- ************ Start of Masters Level (if any)************** -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center" style="color:white;">Masters
                                                            Level (if any)</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <label for="ms_exam_type">Examination</label>
                                                                <input type="text" class="form-control" required id="ms_exam_type" name="ms_exam_type" value="{{ $data->ms_exam_type }}">
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="ms_result">Result</label>
                                                                <input type="number" name="ms_result" value="{{ $data->ms_result }}"
                                                                    class="form-control" required id="ms_result">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <label for="ms_subject">Subject</label>
                                                                <input type="text" name="ms_subject" required id="ms_subject"
                                                                value="{{ $data->ms_subject }}" class="form-control">
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="ms_pass_year">Passing Year</label>
                                                                <input type="month" name="ms_pass_year" value="{{ $data->ms_pass_year }}"
                                                                    required id="ms_pass_year" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <label for="ms_university">University</label>
                                                                <input type="text" name="ms_university" value="{{ $data->ms_university }}"
                                                                    required id="ms_university" class="form-control">
                                                            </div>

                                                            <div class="form-group col-sm-6">
                                                                <label for="ms_duration">Course Duration</label>
                                                                <div class="search-category-container">
                                                                    <label class="styled-select">
                                                                        <select name="ms_duration" required id="ms_duration" class="dropdown-product selectpicker" value="{{ $data->ms_duration }}">
                                                                            <option value="selected">Select your cource duration of  Master Degree.</option>
                                                                            <option value="1">1 Year</option>
                                                                            <option value="2">2 Years</option>
                                                                            <option value="3">3 Years</option>
                                                                            <option value="4">4 Years</option>
                                                                            <option value="5">5 Years</option>
                                                                        </select>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ************ End of Masters Level (if any)************** -->
                                    </fieldset>
                                </div>

                                <br>
                                <br>
                                <div class="row box mt-3">
                                    <div class="divider">
                                        <h3><i class="fa fa-briefcase text-success" aria-hidden="true"></i>
                                            Employee<span class="text-success"> Work Experience</span></h3>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="textarea">Company Name</label>
                                            <input type="text" class="form-control" required id="cname" name="cname"
                                            value="{{ $data->cname }}" placeholder="Company name">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="grad_subject">Job Position</label>
                                            <div class="search-category-container">
                                                <label class="styled-select">
                                                    <select class="dropdown-product selectpicker" name="jposition" required id="jposition"  value="{{ $data->jposition }}">
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
                                                        <option value="Internship"></option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="textarea">Date Form</label>
                                                <input type="date" class="form-control" required id="cfrom" name="cfrom" value="{{ $data->cfrom }}"
                                                    placeholder="e.g 2014">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="textarea">Date To</label>
                                                <input type="date" class="form-control" required id="cto" name="cto" value="{{ $data->cto }}"
                                                    placeholder="e.g 2018">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="textarea">Job Experience</label>
                                    </div>
                                    <section required id="editor" style="margin-bottom: 30px;">
                                        <textarea id="summernote" required name="job_experience" class="summernote">
                                            {!! $data->job_experience !!}
                                        </textarea>
                                    </section>

                                    <div class="field ">
                                        <strong>
                                            <h5><i class="fa fa-upload fa-2x text-info" aria-hidden="true"></i>&nbsp; Upload your company logo <strong class="text-bold text-danger">*</strong></h5>
                                        </strong><br>
                                        <div class="button-group">
                                            <div class="action-buttons">
                                                <div class="upload-button">
                                                    <strong>
                                                        <input type="file" id="image1" name="image1" class="btn btn-common  @error('image1') is-invalid @enderror">
                                                        <br>
                                                        <img src="/image1/{{ $data->image1 }}" style="width: 200px; height:200px;">
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                        @error('image1')
                                        <span class="invalid-feedback error" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                                <br>
                                <br>
                                <div class="row box mt-3 rounded">
                                    <div class="divider">
                                        <h3><i class="fa fa-trophy text-success" aria-hidden="true"></i>&nbsp;
                                            Employee&nbsp;<span class="text-success">Skills</span>
                                        </h3>
                                    </div>

                                    <div class="form-group">
                                        <label for="tagPlaces" class="col-sm-12">Skills</label>
                                        <div class="col-sm-12">
                                            <input type="text" data-role="tagsinput" placeholder="Add Skills" value="{{ $data->skill }}"
                                                class="form-control" required name="skill" id="skill">
                                        </div>
                                    </div>
                                </div>
                                <br><br>

                                <div class="row box mt-3 rounded">
                                    <button type="submit" class="btn btn-common">Save</button>
                                </div>

                            </form>
                            @endforeach
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

    <!-- Main JS  -->
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script>
        // bootstrap-tagsinput.js file - add in local

        (function ($) {
            "use strict";

            var defaultOptions = {
                tagClass: function (item) {
                    return 'badge badge-info';
                },
                focusClass: 'focus',
                itemValue: function (item) {
                    return item ? item.toString() : item;
                },
                itemText: function (item) {
                    return this.itemValue(item);
                },
                itemTitle: function (item) {
                    return null;
                },
                freeInput: true,
                addOnBlur: true,
                maxTags: undefined,
                maxChars: undefined,
                confirmKeys: [13, 44],
                delimiter: ',',
                delimiterRegex: null,
                cancelConfirmKeysOnEmpty: false,
                onTagExists: function (item, $tag) {
                    $tag.hide().fadeIn();
                },
                trimValue: false,
                allowDuplicates: false,
                triggerChange: true,
                editOnBackspace: false
            };

            /**
             * Constructor function
             */
            function TagsInput(element, options) {
                this.isInit = true;
                this.itemsArray = [];

                this.$element = $(element);
                this.$element.addClass('sr-only');

                this.isSelect = (element.tagName === 'SELECT');
                this.multiple = (this.isSelect && element.hasAttribute('multiple'));
                this.objectItems = options && options.itemValue;
                this.placeholderText = element.hasAttribute('placeholder') ? this.$element.attr('placeholder') : '';
                this.name = element.hasAttribute('name') ? this.$element.attr('name') : '';
                this.type = element.hasAttribute('type') ? this.$element.attr('type') : 'text';
                this.inputSize = Math.max(1, this.placeholderText.length);

                this.$container = $('<div class="bootstrap-tagsinput"></div>');
                this.$input = $('<input type="' + this.type + '" name="' + this.name + '" placeholder="' + this
                    .placeholderText + '"/>').appendTo(this.$container);

                this.$element.before(this.$container);

                this.build(options);
                this.isInit = false;
            }

            TagsInput.prototype = {
                constructor: TagsInput,

                /**
                 * Adds the given item as a new tag. Pass true to dontPushVal to prevent
                 * updating the elements val()
                 */
                add: function (item, dontPushVal, options) {
                    var self = this;

                    if (self.options.maxTags && self.itemsArray.length >= self.options.maxTags)
                        return;

                    // Ignore falsey values, except false
                    if (item !== false && !item)
                        return;

                    // Trim value
                    if (typeof item === "string" && self.options.trimValue) {
                        item = $.trim(item);
                    }

                    // Throw an error when trying to add an object while the itemValue option was not set
                    if (typeof item === "object" && !self.objectItems)
                        throw ("Can't add objects when itemValue option is not set");

                    // Ignore strings only containg whitespace
                    if (item.toString().match(/^\s*$/))
                        return;

                    // If SELECT but not multiple, remove current tag
                    if (self.isSelect && !self.multiple && self.itemsArray.length > 0)
                        self.remove(self.itemsArray[0]);

                    if (typeof item === "string" && this.$element[0].tagName === 'INPUT') {
                        var delimiter = (self.options.delimiterRegex) ? self.options.delimiterRegex : self
                            .options.delimiter;
                        var items = item.split(delimiter);
                        if (items.length > 1) {
                            for (var i = 0; i < items.length; i++) {
                                this.add(items[i], true);
                            }

                            if (!dontPushVal)
                                self.pushVal(self.options.triggerChange);
                            return;
                        }
                    }

                    var itemValue = self.options.itemValue(item),
                        itemText = self.options.itemText(item),
                        tagClass = self.options.tagClass(item),
                        itemTitle = self.options.itemTitle(item);

                    // Ignore items allready added
                    var existing = $.grep(self.itemsArray, function (item) {
                        return self.options.itemValue(item) === itemValue;
                    })[0];
                    if (existing && !self.options.allowDuplicates) {
                        // Invoke onTagExists
                        if (self.options.onTagExists) {
                            var $existingTag = $(".badge", self.$container).filter(function () {
                                return $(this).data("item") === existing;
                            });
                            self.options.onTagExists(item, $existingTag);
                        }
                        return;
                    }

                    // if length greater than limit
                    if (self.items().toString().length + item.length + 1 > self.options.maxInputLength)
                        return;

                    // raise beforeItemAdd arg
                    var beforeItemAddEvent = $.Event('beforeItemAdd', {
                        item: item,
                        cancel: false,
                        options: options
                    });
                    self.$element.trigger(beforeItemAddEvent);
                    if (beforeItemAddEvent.cancel)
                        return;

                    // register item in internal array and map
                    self.itemsArray.push(item);

                    // add a tag element

                    var $tag = $('<span class="' + htmlEncode(tagClass) + (itemTitle !== null ? (
                            '" title="' + itemTitle) : '') + '">' + htmlEncode(itemText) +
                        '<span data-role="remove"></span></span>');
                    $tag.data('item', item);
                    self.findInputWrapper().before($tag);

                    // Check to see if the tag exists in its raw or uri-encoded form
                    var optionExists = (
                        $('option[value="' + encodeURIComponent(itemValue).replace(/"/g, '\\"') + '"]',
                            self.$element).length ||
                        $('option[value="' + htmlEncode(itemValue).replace(/"/g, '\\"') + '"]', self
                            .$element).length
                    );

                    // add <option /> if item represents a value not present in one of the <select />'s options
                    if (self.isSelect && !optionExists) {
                        var $option = $('<option selected>' + htmlEncode(itemText) + '</option>');
                        $option.data('item', item);
                        $option.attr('value', itemValue);
                        self.$element.append($option);
                    }

                    if (!dontPushVal)
                        self.pushVal(self.options.triggerChange);

                    // Add class when reached maxTags
                    if (self.options.maxTags === self.itemsArray.length || self.items().toString()
                        .length === self.options.maxInputLength)
                        self.$container.addClass('bootstrap-tagsinput-max');

                    // If using typeahead, once the tag has been added, clear the typeahead value so it does not stick around in the input.
                    if ($('.typeahead, .twitter-typeahead', self.$container).length) {
                        self.$input.typeahead('val', '');
                    }

                    if (this.isInit) {
                        self.$element.trigger($.Event('itemAddedOnInit', {
                            item: item,
                            options: options
                        }));
                    } else {
                        self.$element.trigger($.Event('itemAdded', {
                            item: item,
                            options: options
                        }));
                    }
                },

                /**
                 * Removes the given item. Pass true to dontPushVal to prevent updating the
                 * elements val()
                 */
                remove: function (item, dontPushVal, options) {
                    var self = this;

                    if (self.objectItems) {
                        if (typeof item === "object")
                            item = $.grep(self.itemsArray, function (other) {
                                return self.options.itemValue(other) == self.options.itemValue(item);
                            });
                        else
                            item = $.grep(self.itemsArray, function (other) {
                                return self.options.itemValue(other) == item;
                            });

                        item = item[item.length - 1];
                    }

                    if (item) {
                        var beforeItemRemoveEvent = $.Event('beforeItemRemove', {
                            item: item,
                            cancel: false,
                            options: options
                        });
                        self.$element.trigger(beforeItemRemoveEvent);
                        if (beforeItemRemoveEvent.cancel)
                            return;

                        $('.badge', self.$container).filter(function () {
                            return $(this).data('item') === item;
                        }).remove();
                        $('option', self.$element).filter(function () {
                            return $(this).data('item') === item;
                        }).remove();
                        if ($.inArray(item, self.itemsArray) !== -1)
                            self.itemsArray.splice($.inArray(item, self.itemsArray), 1);
                    }

                    if (!dontPushVal)
                        self.pushVal(self.options.triggerChange);

                    // Remove class when reached maxTags
                    if (self.options.maxTags > self.itemsArray.length)
                        self.$container.removeClass('bootstrap-tagsinput-max');

                    self.$element.trigger($.Event('itemRemoved', {
                        item: item,
                        options: options
                    }));
                },

                /**
                 * Removes all items
                 */
                removeAll: function () {
                    var self = this;

                    $('.badge', self.$container).remove();
                    $('option', self.$element).remove();

                    while (self.itemsArray.length > 0)
                        self.itemsArray.pop();

                    self.pushVal(self.options.triggerChange);
                },

                /**
                 * Refreshes the tags so they match the text/value of their corresponding
                 * item.
                 */
                refresh: function () {
                    var self = this;
                    $('.badge', self.$container).each(function () {
                        var $tag = $(this),
                            item = $tag.data('item'),
                            itemValue = self.options.itemValue(item),
                            itemText = self.options.itemText(item),
                            tagClass = self.options.tagClass(item);

                        // Update tag's class and inner text
                        $tag.attr('class', null);
                        $tag.addClass('badge ' + htmlEncode(tagClass));
                        $tag.contents().filter(function () {
                            return this.nodeType == 3;
                        })[0].nodeValue = htmlEncode(itemText);

                        if (self.isSelect) {
                            var option = $('option', self.$element).filter(function () {
                                return $(this).data('item') === item;
                            });
                            option.attr('value', itemValue);
                        }
                    });
                },

                /**
                 * Returns the items added as tags
                 */
                items: function () {
                    return this.itemsArray;
                },

                /**
                 * Assembly value by retrieving the value of each item, and set it on the
                 * element.
                 */
                pushVal: function () {
                    var self = this,
                        val = $.map(self.items(), function (item) {
                            return self.options.itemValue(item).toString();
                        });

                    self.$element.val(val.join(self.options.delimiter));

                    if (self.options.triggerChange)
                        self.$element.trigger('change');
                },

                /**
                 * Initializes the tags input behaviour on the element
                 */
                build: function (options) {
                    var self = this;

                    self.options = $.extend({}, defaultOptions, options);
                    // When itemValue is set, freeInput should always be false
                    if (self.objectItems)
                        self.options.freeInput = false;

                    makeOptionItemFunction(self.options, 'itemValue');
                    makeOptionItemFunction(self.options, 'itemText');
                    makeOptionFunction(self.options, 'tagClass');

                    // Typeahead Bootstrap version 2.3.2
                    if (self.options.typeahead) {
                        var typeahead = self.options.typeahead || {};

                        makeOptionFunction(typeahead, 'source');

                        self.$input.typeahead($.extend({}, typeahead, {
                            source: function (query, process) {
                                function processItems(items) {
                                    var texts = [];

                                    for (var i = 0; i < items.length; i++) {
                                        var text = self.options.itemText(items[i]);
                                        map[text] = items[i];
                                        texts.push(text);
                                    }
                                    process(texts);
                                }

                                this.map = {};
                                var map = this.map,
                                    data = typeahead.source(query);

                                if ($.isFunction(data.success)) {
                                    // support for Angular callbacks
                                    data.success(processItems);
                                } else if ($.isFunction(data.then)) {
                                    // support for Angular promises
                                    data.then(processItems);
                                } else {
                                    // support for functions and jquery promises
                                    $.when(data)
                                        .then(processItems);
                                }
                            },
                            updater: function (text) {
                                self.add(this.map[text]);
                                return this.map[text];
                            },
                            matcher: function (text) {
                                return (text.toLowerCase().indexOf(this.query.trim()
                                    .toLowerCase()) !== -1);
                            },
                            sorter: function (texts) {
                                return texts.sort();
                            },
                            highlighter: function (text) {
                                var regex = new RegExp('(' + this.query + ')', 'gi');
                                return text.replace(regex, "<strong>$1</strong>");
                            }
                        }));
                    }

                    // typeahead.js
                    if (self.options.typeaheadjs) {
                        // Determine if main configurations were passed or simply a dataset
                        var typeaheadjs = self.options.typeaheadjs;
                        if (!$.isArray(typeaheadjs)) {
                            typeaheadjs = [null, typeaheadjs];
                        }

                        $.fn.typeahead.apply(self.$input, typeaheadjs).on('typeahead:selected', $.proxy(
                            function (obj, datum, name) {
                                var index = 0;
                                typeaheadjs.some(function (dataset, _index) {
                                    if (dataset.name === name) {
                                        index = _index;
                                        return true;
                                    }
                                    return false;
                                });

                                // @TODO Dep: https://github.com/corejavascript/typeahead.js/issues/89
                                if (typeaheadjs[index].valueKey) {
                                    self.add(datum[typeaheadjs[index].valueKey]);
                                } else {
                                    self.add(datum);
                                }

                                self.$input.typeahead('val', '');
                            }, self));
                    }

                    self.$container.on('click', $.proxy(function (event) {
                        if (!self.$element.attr('disabled')) {
                            self.$input.removeAttr('disabled');
                        }
                        self.$input.focus();
                    }, self));

                    if (self.options.addOnBlur && self.options.freeInput) {
                        self.$input.on('focusout', $.proxy(function (event) {
                            // HACK: only process on focusout when no typeahead opened, to
                            //       avoid adding the typeahead text as tag
                            if ($('.typeahead, .twitter-typeahead', self.$container).length ===
                                0) {
                                self.add(self.$input.val());
                                self.$input.val('');
                            }
                        }, self));
                    }

                    // Toggle the 'focus' css class on the container when it has focus
                    self.$container.on({
                        focusin: function () {
                            self.$container.addClass(self.options.focusClass);
                        },
                        focusout: function () {
                            self.$container.removeClass(self.options.focusClass);
                        },
                    });

                    self.$container.on('keydown', 'input', $.proxy(function (event) {
                        var $input = $(event.target),
                            $inputWrapper = self.findInputWrapper();

                        if (self.$element.attr('disabled')) {
                            self.$input.attr('disabled', 'disabled');
                            return;
                        }

                        switch (event.which) {
                            // BACKSPACE
                            case 8:
                                if (doGetCaretPosition($input[0]) === 0) {
                                    var prev = $inputWrapper.prev();
                                    if (prev.length) {
                                        if (self.options.editOnBackspace === true) {
                                            $input.val(prev.data('item'));
                                        }
                                        self.remove(prev.data('item'));
                                    }
                                }
                                break;

                                // DELETE
                            case 46:
                                if (doGetCaretPosition($input[0]) === 0) {
                                    var next = $inputWrapper.next();
                                    if (next.length) {
                                        self.remove(next.data('item'));
                                    }
                                }
                                break;

                                // LEFT ARROW
                            case 37:
                                // Try to move the input before the previous tag
                                var $prevTag = $inputWrapper.prev();
                                if ($input.val().length === 0 && $prevTag[0]) {
                                    $prevTag.before($inputWrapper);
                                    $input.focus();
                                }
                                break;
                                // RIGHT ARROW
                            case 39:
                                // Try to move the input after the next tag
                                var $nextTag = $inputWrapper.next();
                                if ($input.val().length === 0 && $nextTag[0]) {
                                    $nextTag.after($inputWrapper);
                                    $input.focus();
                                }
                                break;
                            default:
                                // ignore
                        }

                        // Reset internal input's size
                        var textLength = $input.val().length,
                            wordSpace = Math.ceil(textLength / 5),
                            size = textLength + wordSpace + 1;
                        $input.attr('size', Math.max(this.inputSize, size));
                    }, self));

                    self.$container.on('keypress', 'input', $.proxy(function (event) {
                        var $input = $(event.target);

                        if (self.$element.attr('disabled')) {
                            self.$input.attr('disabled', 'disabled');
                            return;
                        }

                        var text = $input.val(),
                            maxLengthReached = self.options.maxChars && text.length >= self
                            .options.maxChars;
                        if (self.options.freeInput && (keyCombinationInList(event, self.options
                                .confirmKeys) || maxLengthReached)) {
                            // Only attempt to add a tag if there is data in the field
                            if (text.length !== 0) {
                                self.add(maxLengthReached ? text.substr(0, self.options
                                    .maxChars) : text);
                                $input.val('');
                            }

                            // If the field is empty, let the event triggered fire as usual
                            if (self.options.cancelConfirmKeysOnEmpty === false) {
                                event.preventDefault();
                            }
                        }

                        // Reset internal input's size
                        var textLength = $input.val().length,
                            wordSpace = Math.ceil(textLength / 5),
                            size = textLength + wordSpace + 1;
                        $input.attr('size', Math.max(this.inputSize, size));
                    }, self));

                    // Remove icon clicked
                    self.$container.on('click', '[data-role=remove]', $.proxy(function (event) {
                        if (self.$element.attr('disabled')) {
                            return;
                        }
                        self.remove($(event.target).closest('.badge').data('item'));
                    }, self));

                    // Only add existing value as tags when using strings as tags
                    if (self.options.itemValue === defaultOptions.itemValue) {
                        if (self.$element[0].tagName === 'INPUT') {
                            self.add(self.$element.val());
                        } else {
                            $('option', self.$element).each(function () {
                                self.add($(this).attr('value'), true);
                            });
                        }
                    }
                },

                /**
                 * Removes all tagsinput behaviour and unregsiter all event handlers
                 */
                destroy: function () {
                    var self = this;

                    // Unbind events
                    self.$container.off('keypress', 'input');
                    self.$container.off('click', '[role=remove]');

                    self.$container.remove();
                    self.$element.removeData('tagsinput');
                    self.$element.show();
                },

                /**
                 * Sets focus on the tagsinput
                 */
                focus: function () {
                    this.$input.focus();
                },

                /**
                 * Returns the internal input element
                 */
                input: function () {
                    return this.$input;
                },

                /**
                 * Returns the element which is wrapped around the internal input. This
                 * is normally the $container, but typeahead.js moves the $input element.
                 */
                findInputWrapper: function () {
                    var elt = this.$input[0],
                        container = this.$container[0];
                    while (elt && elt.parentNode !== container)
                        elt = elt.parentNode;

                    return $(elt);
                }
            };

            /**
             * Register JQuery plugin
             */
            $.fn.tagsinput = function (arg1, arg2, arg3) {
                var results = [];

                this.each(function () {
                    var tagsinput = $(this).data('tagsinput');
                    // Initialize a new tags input
                    if (!tagsinput) {
                        tagsinput = new TagsInput(this, arg1);
                        $(this).data('tagsinput', tagsinput);
                        results.push(tagsinput);

                        if (this.tagName === 'SELECT') {
                            $('option', $(this)).attr('selected', 'selected');
                        }

                        // Init tags from $(this).val()
                        $(this).val($(this).val());
                    } else if (!arg1 && !arg2) {
                        // tagsinput already exists
                        // no function, trying to init
                        results.push(tagsinput);
                    } else if (tagsinput[arg1] !== undefined) {
                        // Invoke function on existing tags input
                        if (tagsinput[arg1].length === 3 && arg3 !== undefined) {
                            var retVal = tagsinput[arg1](arg2, null, arg3);
                        } else {
                            var retVal = tagsinput[arg1](arg2);
                        }
                        if (retVal !== undefined)
                            results.push(retVal);
                    }
                });

                if (typeof arg1 == 'string') {
                    // Return the results from the invoked function calls
                    return results.length > 1 ? results : results[0];
                } else {
                    return results;
                }
            };

            $.fn.tagsinput.Constructor = TagsInput;

            /**
             * Most options support both a string or number as well as a function as
             * option value. This function makes sure that the option with the given
             * key in the given options is wrapped in a function
             */
            function makeOptionItemFunction(options, key) {
                if (typeof options[key] !== 'function') {
                    var propertyName = options[key];
                    options[key] = function (item) {
                        return item[propertyName];
                    };
                }
            }

            function makeOptionFunction(options, key) {
                if (typeof options[key] !== 'function') {
                    var value = options[key];
                    options[key] = function () {
                        return value;
                    };
                }
            }
            /**
             * HtmlEncodes the given value
             */
            var htmlEncodeContainer = $('<div />');

            function htmlEncode(value) {
                if (value) {
                    return htmlEncodeContainer.text(value).html();
                } else {
                    return '';
                }
            }

            /**
             * Returns the position of the caret in the given input field
             * http://flightschool.acylt.com/devnotes/caret-position-woes/
             */
            function doGetCaretPosition(oField) {
                var iCaretPos = 0;
                if (document.selection) {
                    oField.focus();
                    var oSel = document.selection.createRange();
                    oSel.moveStart('character', -oField.value.length);
                    iCaretPos = oSel.text.length;
                } else if (oField.selectionStart || oField.selectionStart == '0') {
                    iCaretPos = oField.selectionStart;
                }
                return (iCaretPos);
            }

            /**
             * Returns boolean indicates whether user has pressed an expected key combination.
             * @param object keyPressEvent: JavaScript event object, refer
             *     http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
             * @param object lookupList: expected key combinations, as in:
             *     [13, {which: 188, shiftKey: true}]
             */
            function keyCombinationInList(keyPressEvent, lookupList) {
                var found = false;
                $.each(lookupList, function (index, keyCombination) {
                    if (typeof (keyCombination) === 'number' && keyPressEvent.which === keyCombination) {
                        found = true;
                        return false;
                    }

                    if (keyPressEvent.which === keyCombination.which) {
                        var alt = !keyCombination.hasOwnProperty('altKey') || keyPressEvent.altKey ===
                            keyCombination.altKey,
                            shift = !keyCombination.hasOwnProperty('shiftKey') || keyPressEvent.shiftKey ===
                            keyCombination.shiftKey,
                            ctrl = !keyCombination.hasOwnProperty('ctrlKey') || keyPressEvent.ctrlKey ===
                            keyCombination.ctrlKey;
                        if (alt && shift && ctrl) {
                            found = true;
                            return false;
                        }
                    }
                });

                return found;
            }

            /**
             * Initialize tagsinput behaviour on inputs and selects which have
             * data-role=tagsinput
             */
            $(function () {
                $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
            });
        })(window.jQuery);
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
