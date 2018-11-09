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
        <title>Forgot Password</title>
        <style>
            body{
                padding-top: 100px;
                padding-bottom: 100px;
                background-color: #081E2F;
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
                            <?php $attributes = array('class' => 'was-validated', 'id' => 'admin/send_link'); ?>
                            <?php echo form_open('admin/send_link', $attributes); ?>
                             <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label for="inputResetPasswordEmail">Username</label>
                                    <input name="username" type="text" class="form-control" id="username" required="">
                                    <?php echo form_error('username'); ?>
                                    <span id="helpResetPasswordEmail" class="form-text small text-muted">
                                            Password reset instructions will be sent to your email address.
                                        </span>
                                </div>
                                <div class="form-group">
                                    <button id="btnLogin" type="submit" class="btn btn-success btn-lg float-right">Reset</button>
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
            $("#btnLogin").click(function (event) {
            var textarea = document.getElementById('username');
                    var word = '@mandela.ac.za';
                    var textValue = textarea.value; //-> don't use .innerHTML since there is no HTML in a textarea element

                    if (textValue.indexOf(word) !== - 1)
                    {
                    alert('type your username without "@mandela.ac.za"');
                     event.preventDefault();
                }
                    });
        </script>
</html>






























