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
        <style>
            
        .mandelacolor {
            background-color: #103A5C;
        }
        </style>

        <title>EWAYS</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark mandelacolor">
            <a class="navbar-brand" href="<?php echo site_url() ?>">E-WAYS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul  class="navbar-nav">

                </ul>

            </div>
        </nav><br>
        <div class="container">
            <h2 class="text-center">STUDENT REGISTRATION</h2>

            <?php $attributes = array('class' => 'needs-validation', 'id' => 'add_new_student'); ?>
            <?php echo form_open('add_new_student', $attributes); ?>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="studentno">Student Number</label>
                    <input type="number" class="form-control" name="studentno" placeholder="215369878"value="<?php if (isset($_POST['studentno'])) echo $_POST['studentno']; ?>">
                    <?php echo form_error('studentno'); ?>
                    <!--				<div class="valid-feedback">
                                                            Looks good!
                                                    </div>-->
                </div>
                <div class="col-md-4 mb-3">
                    <label for="firstname">First name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Michael" value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
                    <?php echo form_error('firstname'); ?>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lastname">Last name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Junior" value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname']; ?>">
                    <?php echo form_error('lastname'); ?>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="passowrd">Password</label>
                    <input type="password" class="form-control" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <?php echo form_error('password'); ?>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="confirm_password">Password Confirmation</label>
                    <input type="password" class="form-control" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <?php echo form_error('confirm_password'); ?>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="faculty">Faculty</label>
                    <select id="faculty" onchange='facultyChanged(this.value);' class="form-control" name="faculty" required value="<?php if (isset($_POST['faculty'])) echo $_POST['faculty']; ?>">
                        <option value='' selected>--Select--</option>
                        <option value="Arts">Arts</option>
                        <option value="Business and Economic Sciences">Business and Economic Sciences</option>
                        <option value="Education">Education</option>
                        <option value="Engineering, the Built Environment and Information Technology">Engineering, the Built Environment and Information Technology</option>
                        <option value="Health Sciences">Health Sciences</option>
                        <option value="Law">Law</option>
                        <option value="Science">Science</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="study_area">School</label>
                    <select id="department" onchange='departmentChanged(this.value);' class="form-control" name="study_area" required value="<?php if (isset($_POST['study_area'])) echo $_POST['study_area']; ?>">
                        <option value='' selected>--Select--</option>
                    </select>
                    <?php echo form_error('study_area'); ?>
                </div>

            </div>
             <div class="form-row">
            <div class="col-md-4 mb-3">
                    <label for="studyYear">Year of Study</label>
<!--                    <input type="number" class="form-control" name="studyYear" placeholder="1"value="<?php if (isset($_POST['studyYear'])) echo $_POST['studyYear']; ?>">-->
                    <select name="studyYear" class="form-control" id="sel1">
                        <option>--Select--</option>
                        <option value="1">1 Year</option>
                        <option value="2">2 Year</option>
                        <option value="3">3 Year</option>
                        <option value="4">4 Year</option>
                    </select>
                    <?php echo form_error('studyYear'); ?>
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary  float-right">Submit</button>
            </div>
            <?php echo form_close(); ?>
            &emsp;&emsp;&emsp;&emsp;<a href="<?php echo site_url() ?>/home" class="btn float-right" role="button">Cancel</a>
        </div>
        <script type="text/javascript">
            var depArt = ["Architecture", "Governmental and Social Sciences", "Language, Media & Communication", "Music, Art & Design"];
            var depBusiness = ["Business School", "Industrial Psychology and Human Resources", "Accounting", "Economics, Development and Tourism", "Management Sciences"];
            var depEducation = ["Initial Teacher Education", "Continuing Professional Development", "Education Research & Engagement"];
            var depEngineering = ["Engineering", "Information and Communication Technology", "Built Environment"];
            var depHealthSc = ["Clinical Care Sciences and Medicinal Sciences", "Behavioural Sciences and Lifestyle Sciences"];
            var depLaw = ["Law"];
            var deptscience = ["Biomolecular & Chemical Sciences", "Computer Science, Mathematics, Physics and Statistics", "Environmental Sciences", "Natural Resource Management"];

            function facultyChanged(faculty)
            {
                var selectFaculty = document.getElementById('department');
                var ln = selectFaculty.length - 1;
                while (ln > 0)
                {
                    selectFaculty.remove(1);  //Remove all but "Select State"
                    ln--;
                }
                var depArray;
                switch (faculty)
                {
                    case "Arts":
                        depArray = depArt;
                        break;
                    case "Business and Economic Sciences":
                        depArray = depBusiness;
                        break;
                    case "Education":
                        depArray = depEducation;
                        break;
                    case "Engineering, the Built Environment and Information Technology":
                        depArray = depEngineering;
                        break;
                    case "Health Sciences":
                        depArray = depHealthSc;
                        break;
                    case "Law":
                        depArray = depLaw;
                        break;
                    case "Science":
                        depArray = deptscience;
                        break;
                    default:
                }
                for (i = 0; i < depArray.length; i++)
                {
                    var option = document.createElement('option');
                    option.text = depArray[i];
                    option.value = depArray[i];
                    selectFaculty.add(option);
                }
            }

        </script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
























































