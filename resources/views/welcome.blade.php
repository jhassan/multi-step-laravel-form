<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="HTML form  all different form design which you can use in your any website. different layouts for your common website use like subscriber form, Email template, contact us Login, Registration, email verification,  payment Multi-step, Forget Password. Questionnaire, Survey, and chat-box are available here. checkout, subscribe and reset form. Easy integration to any Web Projects.">
    <meta name="keywords" content="login from, chat-box, Multi-step, quiz form, registration, survey form, contact, forms, register,
    bootstrap forms, forgot password, login forms, payment forms,  subscribe forms, css forms, html5 forms">
    <meta name="author" content="initTheme">
    <title> AccBrains </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/img/icon/favicon.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-5.0.2.min.css">
    <!-- fonts & icon -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts-icon.css">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css">
    <link rel="stylesheet" href="intlTelInput/css/intlTelInput.css">
    <link rel="stylesheet" href="intlTelInput/css/demo.css">
    <style>
        .check-wrap {
            border: 1px solid #80808069;
            padding: 6px;
            border-radius: 5px;
            margin: 5px;
        }

        select {
            height: 50px;
        }
        /* Make circles that indicate the steps of the form: */
        #jobForm .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;  
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }
        #jobForm .step.active {
            opacity: 1;
        }
        /* Mark the steps that are finished and valid: */
        #jobForm .step.finish {
            background-color: #04AA6D;
        }
        /* Mark input boxes that gets an error on validation: */
        #jobForm input.invalid, select.invalid {
            background-color: #f1e4e4;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-area">
            <div class="main-header">
                <div class="header-bottom">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html" style="color: #0dcaf0;
    border: 2px solid #ba895d;
    padding: 10px 40px;
    border-radius: 8px;
    font-size: 20px;">AccBrains</a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block" style="display:none;">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="index.html#contact">Reach to us</a></li>


                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <!-- Form with multiStep S t a r t-->
        <section class="form-with-multistep section-padding section-bg-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="jobForm" action="">
                            <div class="account-area">
                                <div class="multiStep-wrapper multiStep-top-border multiStep-bottom-border">
                                    <div class="multiStep-wrapper-flex">
                                        <div class="multiStep-wrapper-left h-calc radius-8">
                                            <!-- <div class="single-multiStep"> -->
                                            <ul class="step-list-wrapper list-style-none">
                                                <li class="single-step-list-step current-items">
                                                    <span class="single-multiStep-request-list-item-number"> 1 </span>
                                                    <div class="single-step-list-contents">
                                                        <h5 class="title"> Expertise </h5>
                                                    </div>
                                                </li>
                                                <li class="single-step-list-step">
                                                    <span class="single-multiStep-request-list-item-number"> 2 </span>
                                                    <div class="single-step-list-contents">
                                                        <h5 class="title"> Job Prefrences </h5>
                                                    </div>
                                                </li>
                                                <li class="single-step-list-step">
                                                    <span class="single-multiStep-request-list-item-number"> 3 </span>
                                                    <div class="single-step-list-contents">
                                                        <h5 class="title"> Relocation </h5>
                                                    </div>
                                                </li>
                                                <li class="single-step-list-step">
                                                    <span class="single-multiStep-request-list-item-number"> 4 </span>
                                                    <div class="single-step-list-contents">
                                                        <h5 class="title"> Insights </h5>
                                                    </div>
                                                </li>
                                                <li class="single-step-list-step">
                                                    <span class="single-multiStep-request-list-item-number"> 5 </span>
                                                    <div class="single-step-list-contents">
                                                        <h5 class="title"> Account </h5>
                                                    </div>
                                                </li>
                                                <li class="single-step-list-step">
                                                    <span class="single-multiStep-request-list-item-number"> 6 </span>
                                                    <div class="single-step-list-contents">
                                                        <h5 class="title"> Submission </h5>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- </div> -->
                                        </div>
                                        <!-- Experience Start -->
                                        <div class="multiStep-wrapper-contents active">
                                            <!-- Form -->
                                            <div class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8">
                                            <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="section-tittle-one mb-25">
                                                                <h3 class="title font-size-25 heading-color-two"> Expertise
                                                                </h3>
                                                                <p>Please provide details about your professional expertise
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Linkedin Profile URL</label>
                                                        <div class="input-form">
                                                            <input name="url" type="url" placeholder="i.e https://www.linkedin.com/jhon">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Role </label>
                                                        <div class="input-form">
                                                            <select class="form-control" name="role">
                                                            <option value="">Select Role</option>
                                                                <option>Audit Controller </option>
                                                                <option>CFA</option>
                                                                <option>Tax Controller </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Total years of work experience <a href="#"
                                                                data-toggle="tooltip"
                                                                title="Please tell us how many years of experience do you have in the finance industry"><i
                                                                    class="fa fa-info-circle"></i></a></label>
                                                        <div class="input-form">
                                                            <select class="form-control" name="years">
                                                                <option value="">Select years</option>
                                                                <option id="1" name="1 year" value="1">1 year</option>
                                                                <option id="2" name="2 years" value="2">2 years</option>
                                                                <option id="3" name="3 years" value="3">3 years</option>
                                                                <option id="4" name="4 years" value="4">4 years</option>
                                                                <option id="5" name="5 years" value="5">5 years</option>
                                                                <option id="6" name="6 years" value="6">6 years</option>
                                                                <option id="7" name="7 years" value="7">7 years</option>
                                                                <option id="8" name="8 years" value="8">8 years</option>
                                                                <option id="9" name="9 years" value="9">9 years</option>
                                                                <option id="10" name="10 years" value="10">10 years</option>
                                                                <option id="11" name="11 years" value="11">11 years</option>
                                                                <option id="12" name="12 years" value="12">12 years</option>
                                                                <option id="13" name="13 years" value="13">13 years</option>
                                                                <option id="14" name="14 years" value="14">14 years</option>
                                                                <option id="15" name="15+ years" value="15">15+ years
                                                                </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">

                                                        <label class="label-title">Primary Skill</label>
                                                        <div class="input-form">
                                                            <select class="form-control" name="primary_skill">
                                                                <option value="">Select Primary Skill</option>
                                                                <option>Finance</option>
                                                                <option>Marketing</option>
                                                                <option>Banking</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <br>
                                                        <label class="label-title">Years of experience with primary skill <a href="#"
                                                                data-toggle="tooltip" title="Hooray!"><i class="fa fa-info-circle"></i></a>
                                                        </label>
                                                        <div class="input-form">
                                                            <select class="form-control" name="years_of_experience">
                                                                <option value="">Select years</option>
                                                                <option id="1" name="1 year" value="1">1 year</option>
                                                                <option id="2" name="2 years" value="2">2 years</option>
                                                                <option id="3" name="3 years" value="3">3 years</option>
                                                                <option id="4" name="4 years" value="4">4 years</option>
                                                                <option id="5" name="5 years" value="5">5 years</option>
                                                                <option id="6" name="6 years" value="6">6 years</option>
                                                                <option id="7" name="7 years" value="7">7 years</option>
                                                                <option id="8" name="8 years" value="8">8 years</option>
                                                                <option id="9" name="9 years" value="9">9 years</option>
                                                                <option id="10" name="10 years" value="10">10 years</option>
                                                                <option id="11" name="11 years" value="11">11 years</option>
                                                                <option id="12" name="12 years" value="12">12 years</option>
                                                                <option id="13" name="13 years" value="13">13 years</option>
                                                                <option id="14" name="14 years" value="14">14 years</option>
                                                                <option id="15" name="15+ years" value="15">15+ years
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-12">
                                                        <br>
                                                        <label class="label-title">English proficiency</label>
                                                        <div class="input-form">
                                                            <select class="form-control" name="english_proficiency">

                                                                <option value="">Select your english level
                                                                </option>
                                                                <option id="BEGINNER" name="Beginner A1/A2" order="1" value="BEGINNER">
                                                                    Beginner A1/A2</option>
                                                                <option id="INTERMEDIATE" name="Intermediate B1/B2" order="2"
                                                                    value="INTERMEDIATE">Intermediate B1/B2
                                                                </option>
                                                                <option id="ADVANCED" name="Advanced C1/C2" order="3" value="ADVANCED">
                                                                    Advanced C1/C2</option>
                                                                <option id="NATIVE" name="Native" order="4" value="NATIVE">
                                                                    Native</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Form -->
                                        </div>
                                        <!-- multiStep Experience Ends -->
                                        <!-- multiStep Education Start -->
                                        <div class="multiStep-wrapper-contents">
                                            <!-- Form -->
                                            <div class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="section-tittle-one mb-25">
                                                                <h3 class="title font-size-25 heading-color-two"> Job
                                                                    Prefrences
                                                                </h3>
                                                                <p> Let us better understand your expectation in terms of
                                                                    your job</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <h5 style="margin-bottom:1%;">Which type of job do you prefer ?</h5>
                                                    <div class="row mb-30">
                                                        <div class="col-lg-12 col-sm-12">

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="15" type="radio" name="job_type" checked="radio" value="1">
                                                                <label for="15">Remote</label>
                                                            </div>

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="16" type="radio" name="job_type" value="2">
                                                                <label for="16">On-site</label>
                                                            </div>

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="10" type="radio" name="job_type" value="3">
                                                                <label for="10">Hybrid (Flexible to Remote or
                                                                    on-site)</label>
                                                            </div>
                                                        </div>

                                                        <h5 style="margin-top:4%;margin-bottom:1%;">Are you actively looking
                                                            for a remote
                                                            job?</h5>

                                                        <div class="col-lg-12 col-sm-12">

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="15" type="radio" name="remote_job" checked="radio" value="1">
                                                                <label for="15">I am actively
                                                                    looking for a new
                                                                    job.
                                                                </label>
                                                            </div>

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="16" type="radio" name="remote_job" value="2">
                                                                <label for="16">I am not actively looking for a new
                                                                    job, but open to good offers &
                                                                    opportunities.</label>
                                                            </div>

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="10" type="radio" name="remote_job" value="3">
                                                                <label for="10">I am not looking for a new job at
                                                                    the moment.</label>
                                                            </div>
                                                        </div>

                                                        <h5 style="margin-top:4%;margin-bottom:1%;">Are you interested in
                                                            full-time work (8hrs/day, 40hrs/week)? </h5>

                                                        <div class="col-lg-12 col-sm-12">

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="15" type="radio" name="full_time" checked="radio" value="1">
                                                                <label for="15">Yes
                                                                </label>
                                                            </div>

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="16" type="radio" name="full_time" value="2">
                                                                <label for="16">No, only part-time.</label>
                                                            </div>

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="10" type="radio" name="full_time" value="3">
                                                                <label for="10">I can start part-time immediately and then
                                                                    switch to full-time within a month.</label>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- /Form -->
                                        </div>

                                        <div class="multiStep-wrapper-contents">
                                            <!-- Form -->
                                            <div class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="section-tittle-one mb-25">
                                                                <h3 class="title font-size-25 heading-color-two"> Relocation
                                                                </h3>
                                                                <p>Please share details about your relocation plans</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Check Box -->
                                                    <div class="row mb-30">
                                                        <h6 style="margin-bottom:1%;">Would you like to relocate ?</h6>
                                                        <div class="col-lg-12 col-sm-12">

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="2" type="radio" name="like_to_relocate" checked="radio" value="1">
                                                                <label for="2">Yes, I am interested to relocate</label>
                                                            </div>
                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="1" type="radio" name="like_to_relocate" value="2">
                                                                <label for="1">No, but would consider
                                                                    remote & onsite opportunities in my Residence country
                                                                </label>
                                                            </div>


                                                        </div>

                                                        <h6 style="margin-bottom:1%;margin-top:3%;">Please choose the
                                                            countries , you would like to relocate</h6>
                                                        <div class="col-lg-4 col-sm-12">

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="2" type="radio" name="relocate_countries" checked="radio" value="1">
                                                                <label for="2">United States</label>
                                                            </div>
                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="1" type="radio" name="relocate_countries" value="2">
                                                                <label for="1">United Arab Emirates
                                                                </label>
                                                            </div>


                                                        </div>
                                                        <div class="col-lg-4 col-sm-12">

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="2" type="radio" name="relocate_countries" value="3">
                                                                <label for="2">United Kingdom</label>
                                                            </div>
                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="1" type="radio" name="relocate_countries" value="4">
                                                                <label for="1">Germany
                                                                </label>
                                                            </div>


                                                        </div>
                                                        <div class="col-lg-4 col-sm-12">

                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="2" type="radio" name="relocate_countries" value="5">
                                                                <label for="2">Canada</label>
                                                            </div>
                                                            <div class="check-wrap style-eight mb-10">
                                                                <input id="1" type="radio" name="relocate_countries" value="6">
                                                                <label for="1">China
                                                                </label>
                                                            </div>


                                                        </div>
                                                        <div style="margin-top:5%;"></div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <label class="label-title">Country of Residence</label>
                                                            <div class="input-form">
                                                                <select class="form-control" name="country_of_residence">
                                                                    <option value="">Country of Residence</option>
                                                                    <option>United Arab Emirates</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12">
                                                            <label class="label-title">Country of Citizenship</label>
                                                            <div class="input-form">
                                                                <select class="form-control" name="country_of_citizenship">
                                                                <option value="">Country of Citizenship</option>
                                                                    <option>United Arab Emirates</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- /Form -->
                                        </div>


                                        <!-- Introduction Start -->
                                        <div class="multiStep-wrapper-contents">
                                            <!-- Form -->
                                            <div class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="section-tittle-one mb-25">
                                                                <h3 class="title font-size-25 heading-color-two">
                                                                    Insights </h3>
                                                                <p>Please provide some more insights about your </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Check Box -->

                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Current Salary (IN USD)</label>
                                                        <div class="input-form">
                                                            <input type="number" name="current_salary" placeholder="Current Salary">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Expected Salary (IN USD)</label>
                                                        <div class="input-form">
                                                            <input type="number" name="expected_salary" placeholder="Expected Salary">
                                                        </div>
                                                    </div>


                                                    <h5 style="margin-top:2%;margin-bottom:2%;">Please select whats
                                                        applicable to you</h5>
                                                    <br>
                                                    <div class="col-lg-4 col-sm-12">
                                                        <div class="check-wrap style-eight mb-10">
                                                            <input id="2" type="radio" value="1" checked="radio" >
                                                            <label for="2">Worked as a freelancer</label>
                                                        </div>

                                                        <div class="check-wrap style-eight mb-10">
                                                            <input id="1" type="radio" value="2">
                                                            <label for="1">Worked in a Startup
                                                            </label>
                                                        </div>




                                                    </div>

                                                    <div class="col-lg-4 col-sm-12">
                                                        <div class="check-wrap style-eight mb-10">
                                                            <input id="2" type="radio" value="3">
                                                            <label for="2">I love Audits</label>
                                                        </div>

                                                        <div class="check-wrap style-eight mb-10">
                                                            <input id="1" type="radio" value="4">
                                                            <label for="1">I mostly worked in a Team
                                                            </label>
                                                        </div>


                                                    </div>


                                                    <div class="col-lg-4 col-sm-12">
                                                        <div class="check-wrap style-eight mb-10">
                                                            <input id="2" type="radio" value="5">
                                                            <label for="2">I mostly worked Individually</label>
                                                        </div>

                                                        <div class="check-wrap style-eight mb-10">
                                                            <input id="1" type="radio" value="6">
                                                            <label for="1">I do freelance Projects
                                                            </label>
                                                        </div>


                                                    </div>






                                                </div>
                                            </div>
                                            <!-- /Form -->
                                        </div>


                                        <div class="multiStep-wrapper-contents">
                                            <!-- Form -->
                                            <div class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="section-tittle-one mb-25">
                                                                <h3 class="title font-size-25 heading-color-two">
                                                                    Account </h3>
                                                                <p>Please provide your personal details</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Check Box -->

                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Full Name</label>
                                                        <div class="input-form">
                                                            <input type="text" name="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Email</label>
                                                        <div class="input-form">
                                                            <input type="email" name="email" id="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Phone </label>
                                                        <div class="input-form">
                                                            <input type="number" id="mobile-number" name="phone"
                                                                placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <label class="label-title">Highest Education</label>
                                                        <div class="input-form">
                                                            <select class="form-control">
                                                                <option value="">Select Highest Education</option>
                                                                <option>PHD</option>
                                                                <option>Masters</option>
                                                                <option>Bachelors</option>
                                                                <option>High School</option>
                                                            </select>
                                                        </div>
                                                    </div>




                                                </div>
                                            </div>
                                            <!-- /Form -->
                                        </div>
                                        <!-- multiStep Education Ends -->

                                        <!-- multiStep Skills Starts -->

                                        <!-- multiStep Skills Ends -->
                                        <!-- multiStep Setting Starts -->
                                        <div class="multiStep-wrapper-contents">
                                            <!-- Form -->
                                            <div action="javascript:void(0)"
                                                class="multiStep-form style-one simplePresentCart-two h-calc radius-0  white-bg radius-8">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="section-tittle-one text-center mb-25">
                                                                <!-- Check Mark icon -->
                                                                <div class="success-checkmarkStyle">
                                                                    <div class="check-icon">
                                                                        <span class="icon-line line-tip"></span>
                                                                        <span class="icon-line line-long"></span>
                                                                        <div class="icon-circle"></div>
                                                                        <div class="icon-fix"></div>
                                                                    </div>
                                                                </div>

                                                                <h3 class="title font-size-25 heading-color-two">
                                                                    Congratulations </h3>
                                                                <p class="mb-25">Lorem ipsum dolor sit, amet consectetur
                                                                    adipisicing elit. Voluptatibus
                                                                    debitis error atque minus, voluptatem veniam
                                                                    consequatur, saepe eos
                                                                    natus repellat obcaecati aperiam sit qui laborum ad
                                                                    suscipit sed aut
                                                                    necessitatibus.Lorem ipsum dolor sit,amet consectetur
                                                                    adipisicing elit. Voluptatibus debitis error atque
                                                                    minus, voluptatem veniam consequatur, amet consectetur
                                                                    adipisicing elit. Voluptatibus debitis error atque
                                                                    minus, voluptatem veniam consequatur, saepe eos natus
                                                                    repellat obcaecati aperiam sit qui laborum ad suscipit
                                                                    sed aut necessitatibus.</p>

                                                                <p class="mb-10">Lorem ipsum dolor sit, amet consectetur
                                                                    adipisicing elit. Voluptatibus debitis
                                                                    error atque minus, voluptatem veniam consequatur, saepe
                                                                    eos natus
                                                                    repellat obcaecati aperiam sit qui laborum ad suscipit
                                                                    sed aut
                                                                    necessitatibus.Lorem ipsum dolor sit, amet consectetur
                                                                    adipisicing elit.
                                                                    Voluptatibus debitis error atque minus. Lorem ipsum
                                                                    dolor sit, amet consectetur adipisicing elit.
                                                                    Voluptatibus debitis
                                                                    error atque minus</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Form -->
                                        </div>
                                        <!-- multiStep Setting Ends -->
                                    </div>
                                </div>
                                <div class="multiStep-footer">
                                    <div class="multiStep-footer-flex">
                                        <div class="multiStep-footer-left">
                                        </div>
                                        <div class="multiStep-footer-right">

                                            <a href="javascript:void(0)" class="multiStep-footer-back previous"
                                                id="prevBtn" style="margin-right:20px;" onclick="nextPrev(-1)"> Back </a>

                                            <a href="javascript:void(0)" class="multiStep-footer-next next" id="nextBtn" onclick="nextPrev(1)">Next
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px; display: none;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                        </form>    
                    </div>
                </div>
            </div>
        </section>
        <!-- Eorm-with-multiStep End -->
    </main>
    <!-- Footer -->
    <footer class="footer section-bg-two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <p>Accbrains @ 2023 All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.0.2.min.js"></script>
    <script src="intlTelInput/js/intlTelInput-jquery.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    
    <script>
        $("#mobile-number").intlTelInput();
    </script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("multiStep-form");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 2)) { // x.length - 1
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }
        function nextPrev(n) {
            setTimeout(() => {
                // This function will figure out which tab to display
                var x = document.getElementsByClassName("multiStep-form");
                // Exit the function if any field in the current tab is invalid:
                if (n == 1 && validateForm() == false) return false;
                // Hide the current tab:
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                console.log("currentTab", currentTab);
                console.log("x.length", x.length);
                
                // if you have reached the end of the form...
                if (currentTab >= (x.length - 1)) {
                    // ... the form gets submitted:
                    // Check Email
                    var email = document.getElementById("email");    
                    var email_status = checkEmail(email);  
                    console.log("email_status", email_status); 
                    if(!email_status){
                        document.getElementById("jobForm").submit();
                        return false;
                    } else {
                        alert("Email Already");
                        return false;
                    }
                    
                }
                
                // Otherwise, display the correct tab:
                showTab(currentTab);

                // Hide Next and Prev button when form submit
                if(currentTab == 5){
                    document.getElementById("nextBtn").style.display = "none";
                    document.getElementById("prevBtn").style.display = "none";
                }
            }, 200);
        }
        function checkEmail(email){
            if(email){
                return true;
            } else {
                return false;
            }

        }
        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("multiStep-form");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
                }
            }
            z = x[currentTab].getElementsByTagName("select");
            // A loop that checks every input field in the current tab:
            if(z.length > 0){
                for (i = 0; i < z.length; i++) {
                    // If a field is empty...
                    if (z[i].value == "") {
                    // add an "invalid" class to the field:
                    z[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                    }
                }
            }
            
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }
        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

    <!-- Main js-->
    <script src="assets/js/mian.js"></script>
</body>

</html>