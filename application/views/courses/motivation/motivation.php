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

        <title>EWAYS</title>
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

            </div>
        </nav>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo site_url() ?>/list_of_courses">Courses</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Motivation</li>
                </ol>
            </nav>
            <div class="clearfix"></div>
            <h2 class="text-center border border-primary">MOTIVATION</h2><br>



            <p class="text-justify"><img src="<?php echo base_url() ?>/assets/images/goal.jpg" class="rounded float-left"  alt="goal picture"><h4>What is Stress?</h4>Stress is a physiological reaction that is activated when a person perceives a physical or psychological threat
        </p>

        <h4>Why does it occur?</h4>

        <P class="text-justify">For many people, it's the third part of the goal setting definition that's problematic. They know what
            they want to do and they're perfectly willing to work on it but they have trouble creating a plan to get there.
            The undirected effort might help you accomplish what you want to do if by some fluke you do the right thing at
            the right time. Usually, it doesn't. And then, because you're not getting any results, you quit working at
            whatever it is and give up on whatever goal you've set.</P>

        <h4>What's are the symptoms?</h4>

        <p class="text-justify">So for successful goal setting, the first thing you have to do is close the gap between the end result you want
            and where you are now with a plan. Business goals
            and personal goals have different purposes (business goals aim to improve your business rather than some aspect of your personal life)
            but there's no difference in the goal setting process. The same goal setting formula and strategies that works for business goals
            will also work for personal goals - with the one difference that applying the strategies that are often used to set business
            goals will give you greater success with achieving personal goals than is often the case.</p>




        <p class="text-center"><span class="badge badge-pill badge-info">Page 1 / 2</span></p>

        <div>
            <a class="btn btn-secondary float-right" href="<?php echo site_url() ?>/motivation_p2">Next</a>
        </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
