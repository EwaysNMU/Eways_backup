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
            }
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
                            <form action="<?php echo site_url() ?>/password_reset" method="post" class="form" role="form" autocomplete="off">
                                <div class="form-group">
<!--                                    <label for="inputResetPasswordEmail">Student Number</label>-->
                                    <input hidden type="number" readonly class="form-control" value="<?php echo $seg1; ?>" id="inputResetPassword" name="studentno" required="">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="inputResetPasswordEmail">New Password</label>
                                    <input type="password" class="form-control" id="inputResetPassword" name="password" required="">
                                    <?php echo form_error('password'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputResetPasswordEmail">Confirm Password</label>
                                    <input type="password" class="form-control" id="inputResetPassword" name="confirm_password" required="">
                                <?php echo form_error('confirm_password'); ?>
                                </div>
                                <input hidden type="text" name="email" value="<?php echo $seg2; ?>"required><br>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card reset password -->

                </div>
    </body>
</html>











