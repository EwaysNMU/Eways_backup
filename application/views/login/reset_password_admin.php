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

        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <title>Reset Password</title>
        <style>
            body{
                padding-top: 100px;
                padding-bottom: 100px;
                background-color: #081E2F;
            }
        </style>

  <style>
    #form label{float:left; width:140px;}
    #error_msg{color:red; font-weight:bold;}
 </style>

    </head>
    <body>


        <div class="col-md-6 offset-md-3">
            <span class="anchor" id="formResetPassword"></span>
            <!-- form card reset password -->
            <div class="card card-outline-secondary">
                <div class="card-header">
                    <h3 class="mb-0">Password Reset</h3>
                </div>
                <div class="card-body">
                    <?php $attributes = array('class' => 'was-validated', 'id' => 'admin/password_reset'); ?>
                    <?php echo form_open('admin/password_reset', $attributes); ?>
                             <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                 <div class="form-group">
                            <input oncontextmenu="return false" hidden type="text" readonly class="form-control" value="<?php echo $seg1; ?>" name="username">

                        </div>
                        <div class="form-group">
                            <label for="inputResetPasswordEmail">New Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                   required onchange='check_pass();'>
                        </div>
                        <div class="form-group">
                            <label for="inputResetPasswordEmail">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                                   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                   required onchange='check_pass();'>
                            <span id='message'></span>
                        </div>
                        <input hidden type="text" name="reset_token" id="reset_token" value="<?php echo $seg2; ?>"required><br>
                        <div class="form-group">
                            <button disabled id="btnLogin" type="submit" class="btn btn-success btn-lg float-right">Reset</button>
                        </div>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- /form card reset password -->

        </div>
    </body>
     <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
       function check_pass() {
    if (document.getElementById('password').value === document.getElementById('confirm_password').value) {
        $('#message').html('Matching').css('color', 'green');
        document.getElementById('btnLogin').disabled = false;
    } else {
         $('#message').html('Not Matching').css('color', 'red');
        document.getElementById('btnLogin').disabled = true;
    }
}
        </script>  
</html>











