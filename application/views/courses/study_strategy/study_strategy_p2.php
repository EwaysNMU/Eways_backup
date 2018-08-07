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

        <title>Hello, world!</title>
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
                    <li class="breadcrumb-item active" aria-current="page">Study Strategies</li>
                </ol>
            </nav>
            <div class="clearfix"></div>
            <h2 class="text-center border border-primary">STUDY STRATEGIES</h2>

            <p class="text-justify"><img src="<?php echo base_url() ?>/assets/images/goal1.jpg" class="rounded float-left"  alt="goal picture">Goal setting is the process of deciding what you want to accomplish and devising a
                plan to achieve the result you desire. For entrepreneurs, goal setting is an important part of business
                planning.This goal setting definition emphasizes that goal setting is a three part process.
                For effective goal setting, you need to do more than just decide what you want to do; you also
                have to work at accomplishing whatever goal you have set for yourself  - which means you have to create
                a plan so your work gets you where you want to go.</p>

            <P class="text-justify">For many people, it's the third part of the goal setting definition that's problematic. They know what
                they want to do and they're perfectly willing to work on it but they have trouble creating a plan to get there.
                The undirected effort might help you accomplish what you want to do if by some fluke you do the right thing at
                the right time. Usually, it doesn't. And then, because you're not getting any results, you quit working at
                whatever it is and give up on whatever goal you've set.</P>

            <p class="text-justify">So for successful goal setting, the first thing you have to do is close the gap between the end result you want
                and where you are now with a plan.What's the Difference Between a Personal Goal and a Business Goal? Business goals
                and personal goals have different purposes (business goals aim to improve your business rather than some aspect of your personal life)
                but there's no difference in the goal setting process. The same goal setting formula and strategies that works for business goals
                will also work for personal goals - with the one difference that applying the strategies that are often used to set business
                goals will give you greater success with achieving personal goals than is often the case.</p>

            <p class="text-justify">Goal setting is the process of deciding what you want to accomplish and devising a
                plan to achieve the result you desire. For entrepreneurs, goal setting is an important part of business
                planning.This goal setting definition emphasizes that goal setting is a three part process.
                For effective goal setting, you need to do more than just decide what you want to do; you also
                have to work at accomplishing whatever goal you have set for yourself  - which means you have to create
                a plan so your work gets you where you want to go.</p>

            <p class="text-center"><span class="badge badge-pill badge-info">Page 2 / 2</span></p>

            <div>
                <a class="btn btn-secondary float-left" href="<?php echo site_url() ?>/study_strategy" role="button">Previous</a>
                <a class="btn btn-secondary float-right" href="#!" role="button" data-toggle="modal" data-target="#exampleModalCenter">Next</a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            You are about to be taken to the feedback page.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a class="btn btn-primary" href="<?php echo site_url() ?>/study_strategy_feedback_form" role="button">Ok</a>
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
