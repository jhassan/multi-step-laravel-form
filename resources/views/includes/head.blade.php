<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    {{-- <link rel="stylesheet" href="intlTelInput/css/intlTelInput.css">
    <link rel="stylesheet" href="intlTelInput/css/demo.css"> --}}
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
        /* Mark input boxeFooters that gets an error on validation: */
        #jobForm input.invalid, select.invalid {
            background-color: #f1e4e4;
        }
    </style>
</head>