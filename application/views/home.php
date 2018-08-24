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
        

        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
        <!--===============================================================================================-->

        <title>EWAYS</title>
        <style>
            navbarSupportedContent {
                z-index: 999999;
            }
        </style>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/login_login">Collins Test</a>
                    </li>


                </ul>
            </div>

        </nav><br><br>

        <div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets/images/bg-01.jpg');">
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-8">  
                    <img class="img-fluid rounded" src="<?php echo base_url() ?>assets/images/home/e<?php echo mt_rand(1, 5); ?>.jpg" alt="e-learning pictures">
                </div>

                <div class="col-lg-4">
                    <h1><strong>EXCELLENT<br>WAYS OF<br>ACHIEVING<br>YOUR<br>SUCCESS</strong></h1>
                    <br>
                    <a class="btn btn-primary btn-lg" href="<?php echo site_url() ?>/test_view">Check out our courses -></a>
                </div>
            </div>

            <!-- Grey Strip -->
            <div class="card text-white bg-secondary my-4 text-center">
                <div class="card-body">
                    <h5 class="text-white m-0">Learning couldn't be much easier!</h5>
                </div>
            </div>

        <!-- About Us -->
            <section class="testimonials text-center bg-light">
                <h1>About us</h1><br>
                <div class="container">
        
                <div class="row">
                  <div class="col-lg-12">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-8">
                      <p class="font-weight-light mb-0">The Centre for Teaching, Learning & Media (CTLM) is a unit within Higher Education Access and Development Services (HEADS) at NMU. HEADS aims to uphold the broader NMU educational purpose and philosophy: to provide transformational leadership in the service of society through teaching development and related research, and to adopt a humanising pedagogical approach that embraces diverse knowledge traditions and engages them in critical dialogue in order to contribute to a multi-cultural society. HEADS aspires to provide institution-wide and research-led services and programmes that focus on optimising human potential and play a role in higher education transformation by enhancing teaching and learning at NMU.</p>
                    </div>
                  </div>
                </div>
              </div>
        </section><br>

        <!-- Contact Us -->
            <section class="testimonials text-center bg-light">
                <h1>Contact details</h1><br>
                <div class="container">
        
                <div class="row">
                  <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0" align="left">
                        <p class="font-weight-light mb-0">
                            Ms Karin Grobler<br/> 
                            M214<br/>
                            North Campus<br/>
                            Tel: +27 41 504 3207<br/>
                            Tel: 27 41 504 3627<br/>
                            karin.grobler@mandela.ac.za<br/>
                        </p>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0" align="left">
                        <p class="font-weight-light mb-0">
                            Ronelle Plaatjes<br/> 
                            R107<br/>
                            North Campus<br/>
                            Tel: +27 ?? ??? ????<br/>
                            Ronelle.plaatjes@mandela.ac.za<br/>
                        </p>
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0" align="left">
                        <p class="font-weight-light mb-0">
                            Ms Karin Grobler<br/> 
                            M214<br/>
                            North Campus<br/>
                            Tel: +27 41 504 3207<br/>
                            Tel: 27 41 504 3627<br/>
                            karin.grobler@mandela.ac.za<br/>
                        </p>
                    </div>
                  </div>

                </div>
              </div>
        </section>

        </div>
    </div>
    </body>

    <!-- Footer -->
    <footer class="bottom" >
        <section id="footer">
            <div class="container">
                
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
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
