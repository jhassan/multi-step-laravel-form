<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
											@yield('content')
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
    <!-- Main js-->
    <script src="assets/js/mian.js"></script>
    <script>
        $("#mobile-number").intlTelInput();
    </script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>
