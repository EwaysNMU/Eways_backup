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

        <title>EWAY</title>
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


                </ul>
            </div>

        </nav><br><br>

        <!--        <div class="container">
                    <h2 class="text-center">WELCOME HOME!</h2>
                </div>
                <br><br>-->



<!--        <table style="height: 100px; width: 100%">
            <tbody>
                <tr>
                    <td width="60%"><img height="400px" class="card-img-top" src="http://materializecss.com/images/sample-1.jpg" alt="HOME"></td>
                    <td class="align-middle">
                        <h2 class="display-4">EXCELLENT WAYS<br>OF ACHIEVING<br>YOUR SUCCESS</h2>
                        <h6 class="lead">Opening up a world of education.</h6><br>
                        <button type="button" class="btn btn-secondary"><a style="color: white; text-decoration: none;" href="<?php echo site_url() ?>/list_of_courses">Check out our courses -></a></button>
                    </td>    
                </tr>
            </tbody>
        </table>
        <br><br>-->

        <!--http://placehold.it/900x400-->
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-8">  
                    <img class="img-fluid rounded" src="<?php echo base_url() ?>assets/images/home/e<?php echo mt_rand(1, 5); ?>.jpg" alt="e-learning pictures">
                </div>

                <div class="col-lg-4">
                    <h1>EXCELLENT<br>WAYS OF<br>ACHIEVING<br>YOUR<br>SUCCESS</h1>
                    <br>
                    <a class="btn btn-primary btn-lg" href="<?php echo site_url() ?>/list_of_courses">Check out our courses -></a>
                </div>
            </div>



<!-- Trigger the modal with a button 
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

-->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


            <!-- Grey Strip -->
            <div class="card text-white bg-secondary my-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0">Learning couldn't be much easier!</p>
                </div>
            </div>

            <!-- Content Row -->
                       <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title" >Card One</h2>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php echo site_url() ?>/test_view" class="btn btn-primary" >More Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Card Two</h2>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">More Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Card Three</h2>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">More Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--            <div align="center">
                <table style="width: 600px;">
                    <tr>
                        <td><div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/viHILXVY_eU" allowfullscreen></iframe>
                            </div></td>
                    </tr>
                </table>
            </div>
        </div><br>-->



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
    <script type="text/javascript">$
(document).ready(function () {

    $('#myModal').modal('show');

});
</script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
