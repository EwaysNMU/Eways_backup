<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/index.css">
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/home_footer.css">

        <title>EWAYS</title>
        <style>
            navbarSupportedContent {
                z-index: 999999;
            }
        </style>
    </head>
    <body style="background-color: white">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">e-WAYS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url() ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul  class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo site_url() ?>/login_admin_form">Admin</a>
                            <a class="dropdown-item" href="<?php echo site_url() ?>/login_student_form">Student</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo site_url() ?>/student_register_form">Student Registration</a>
                            <a class="dropdown-item" href="<?php echo site_url() ?>/student_profile">Student Profile</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/list_of_courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_dashboard">Admin</a>
                    </li>


                </ul>
            </div>

        </nav><br><br>
        <!--<ul class="nav" data-wall-section-nav>
    <li class="nav-link">First-Intro</li>
    <li class="nav-link">Second-Navs</li>
    <li class="nav-link">Third-Slides</li>
    <li class="nav-link">Forth-Duration</li>
    <li class="nav-link">Fifth-Class</li>
    <li class="nav-link">Sixth-Configs</li>
</ul>
        -->
        <div id="wall">
            <section class="section" id="section-1">
                <div class="wrapper">
                    <div class="sub-header">

                        <div>
                            <img src="https://i.imgur.com/hVITemN.jpg" id="content" width="90%" height="100%">
                        </div>
                    </div>

                </div>
            </section>
            <section class="section section-2">
                <div class="wrapper">
                    <div class="sub-header">

                        <div>
                            <img src="https://i.imgur.com/r4JNTr9.jpg" id="content" width="90%" height="100%">
                        </div>
                    </div>
                </div>
            </section>
            <section class="section section-3">
                <div class="slide" style="background-color: white" data-wall-slide>
                    <div class="wrapper">
                        <h1>Section Three</h1>
                    </div>
                </div>
                <div class="slide" style="background-color: white" data-wall-slide>
                    <div class="wrapper">
                        <h1>Section three</h1>
                    </div>
                </div>
                <div data-wall-slide-arrow class="prev-slide"></div>
                <div data-wall-slide-arrow class="next-slide"></div>
            </section>
            <section class="section section-4" data-wall-slide>
                <div class="wrapper">
                    <h1>Section Four</h1>
                </div>
            </section>
            <section class="section section-5">
                <div class="wrapper">
                    <h1>Section Five</h1>
                </div>
            </section>
            <section class="section section-6">
                <div class="wrapper">
                    <h1>Section Six</h1>
                </div>
            </section>
        </div>
        <div id="prev" class="btn btn-secondary">prev</div>
        <div id="next" class="btn btn-primary">next</div>
        <ul class="dot" data-wall-section-nav>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <script src="<?php echo base_url() ?>assets/js/wall.js"></script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-46156385-1', 'cssscript.com');
            ga('send', 'pageview');

        </script>
    </body>
</html>
