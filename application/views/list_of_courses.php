<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/home_footer.css">

        <title>Hello, world!</title>
    </head>
    <body>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/student_profile">Student Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/login">Login</a>
                    </li>
                </ul>

                </ul>

            </div>
        </nav>
        <br><br><br><br>

        <div class="container">
            <div align="center">
                <h2>LIST OF COURSES</h2>
            </div>
            <br><br>

            <div class="row">
                <div class="col s12 m4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="http://materializecss.com/images/office.jpg" alt="GOALS SETTING">
                        <div class="card-body">
                            <h5 class="card-title">GOALS SETTING</h5>
                            <p class="card-text">The definition of goal setting is the process of identifying something that you want to accomplish and establishing measurable goals and timeframes. When you decide on a financial change to save more money and then set a certain amount to save each month, this is an example of goal setting.</p>
                            <a href="<?php echo site_url() ?>/goals_settings" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="http://materializecss.com/images/sample-1.jpg" alt="STRESS MANAGEMENT">
                        <div class="card-body">
                            <h5 class="card-title">STRESS MANAGEMENT</h5>
                            <p class="card-text">Stress management is a wide spectrum of techniques and psychotherapies aimed at controlling a person's level of stress, especially chronic stress, usually for the purpose of improving everyday functioning.</p>
                            <a href="<?php echo site_url() ?>/stress_management" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="http://materializecss.com/images/office.jpg" alt="TIME MANAGEMENT">
                        <div class="card-body">
                            <h5 class="card-title">TIME MANAGEMENT</h5>
                            <p class="card-text">“Time management” is the process of organizing and planning how to divide your time between specific activities. Good time management enables you to work smarter – not harder – so that you get more done in less time, even when time is tight and pressures are high. Failing to manage your time damages your effectiveness and causes stress.</p>
                            <a href="<?php echo site_url() ?>/time_management" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="http://materializecss.com/images/sample-1.jpg" alt="Motivation">
                        <div class="card-body">
                            <h5 class="card-title">Motivation</h5>
                            <p class="card-text">This course aims at keeping you motivated...</p>
                            <a href="<?php echo site_url() ?>/motivation" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="http://materializecss.com/images/office.jpg" alt="Study Strategy">
                        <div class="card-body">
                            <h5 class="card-title">Study Strategy</h5>
                            <p class="card-text">Here you will learn...</p>
                            <a href="<?php echo site_url() ?>/study_strategy" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="http://materializecss.com/images/sample-1.jpg" alt="Tips For Exams And Tests">
                        <div class="card-body">
                            <h5 class="card-title">Tips For Exams And Tests</h5>
                            <p class="card-text">Tips For Exams And Tests</p>
                            <a href="<?php echo site_url() ?>/exam_tips" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>


    <!-- Footer -->
    <footer class="bottom" >
        <section id="footer">
            <div class="container">
                <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <!--                                    <h5>Quick links</h5>-->
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Tel: +27 (0) 41 504 1111</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Fax: +27 (0) 41 504 2574 / 2731</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Email: info@mandela.ac.za</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>PO Box 77000, Nelson Mandela University</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Port Elizabeth, 6031, South Africa</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <!--					<h5>Quick links</h5>-->
                        <ul class="list-unstyled quick-links">
                            <li><a href="http://library.mandela.ac.za/"><i class="fa fa-angle-double-right"></i>Libraries</a></li>
                            <li><a href="http://ict.mandela.ac.za/ICT-Helpdesk"><i class="fa fa-angle-double-right"></i>ICT Helpdesk</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="http://ctlm.mandela.ac.za/A-Z-Index"><i class="fa fa-angle-double-right"></i>A - Z Index</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <!--					<h5>Quick links</h5>-->
                        <ul class="list-unstyled quick-links">
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Student portal</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Student mail</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Staff portal</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Staff mail</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>	
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p>Nelson Mandela University</p>
                        <p class="h6">&copy <?php echo date("Y"); ?> All right Reversed.<a class="text-green ml-2" href="https://www.mandela.ac.za" target="_blank">Peer-Colaboration</a></p>

                    </div>
                </div>	
            </div>
        </section>
    </footer>
    <!-- ./Footer -->
</html>
