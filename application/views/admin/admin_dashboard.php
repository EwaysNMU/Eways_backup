<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url()?>assets/images/favicon/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">e-WAYS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url()?>">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul  class="navbar-nav">
      				<li class="nav-item">
      					<a class="nav-link" href="#!">About</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url()?>/list_of_courses">Courses</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="#!">Contact</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url()?>/admin_dashboard">Admin</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url()?>/student_profile">Student Profile</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="<?php echo site_url()?>/login">Login</a>
      				</li>
      			</ul>

        </div>
    </nav>
    <div class="container-fluid">

    </div>

<div class="container">
    <h2 class="text-center">WELCOME TO ADMIN DASHBOARD</h2>


    <div class="row">
        <div class="col-sm-3">
                <div class="card bg-light mb-3" style="max-width: 100%;">
                    <div class="card-header">COURSE MANAGEMENT</div>
                    <div class="card-body">
                        <!-- <h5 class="card-title">GOALS SETTING</h5> -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                     <div class="card-footer bg-transparent border-success">
                         <a href="<?php echo site_url()?>/admin_course_management">Click here to manage courses...</a>
                     </div>
                </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-header">ADMIN MANAGEMENT</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">STRESS MANAGEMENT</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                 <div class="card-footer bg-transparent border-success">
                    <a href="#!">Click here to manage admin...</a>
                 </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-header">STUDENT MANAGEMENT</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">TIME MANAGEMENT</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                 <div class="card-footer bg-transparent border-success">
                     <a href="#!">Click here to manage students...</a>
                 </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-light mb-3" style="max-width: 100%;">
                <div class="card-header">MANAGE FEEDBACK</div>
                <div class="card-body">
                    <!-- <h5 class="card-title">TIME MANAGEMENT</h5> -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                 <div class="card-footer bg-transparent border-success">
                     <a href="<?php echo site_url()?>/feedback_management">Click here to manage feedbacks...</a>
                 </div>
            </div>
        </div>
    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
