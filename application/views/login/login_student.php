<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - EWAYS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
<!--===============================================================================================-->


</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets/images/bg-01.jpg');">
            <?php $attributes = array('class' => 'was-validated', 'id' => 'login_student'); ?>
                <?php echo form_open('student_validation', $attributes); ?>
        
            <div class="wrap-login100">
                <form class="login100-form validate-form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Student Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" placeholder="Student No" name="studentno" id="email" required=""value="<?php if (isset($_POST['studentno'])) echo $_POST['studentno']; ?>">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="Password" id="password" required="" autocomplete="new-password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="btn btn-success login100-form-btn" id="btnLogin">
                            Login
                        </button>
                    </div>

                        <!-- DISPLAY ERROR MESSAGES -->
                        <?php if($this->session->flashdata('flashSuccess')):?>
                    <div class="alert alert-success alert-dismissible" style="">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="text-center"><?= $this->session->flashdata('flashSuccess') ?></div>
                    </div>
                    <?php endif?>
                    <?php if($this->session->flashdata('flashDanger')):?>
                    <div class="alert alert-danger alert-dismissible" style="">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="text-center"><?= $this->session->flashdata('flashDanger') ?></div>
                    </div>
                    <?php endif?>
                    <?php if($this->session->flashdata('verifySuccess')):?>
                    <div class="alert alert-success alert-dismissible" style="">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="text-center"><?= $this->session->flashdata('verifySuccess') ?></div>
                    </div>
                    <?php endif?>
                    <?php if($this->session->flashdata('verifyfailed')):?>
                    <div class="alert alert-warning alert-dismissible" style="">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="text-center"><?= $this->session->flashdata('verifyfailed') ?></div>
                    </div>
                    <?php endif?>
                    <!-- =========================================================================== -->

                    <div class="text-center p-t-90">
                        <a class="txt1" href="<?php echo site_url() ?>/reset_password">
                            Forgot Password?
                        </a>
                        <br>
                        <a class="txt1" href="<?php echo site_url() ?>/home">
                            Back to Home
                        </a>
                    </div>
                </form>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
            $("#btnLogin").click(function (event) {

                //Fetch form to apply custom Bootstrap validation
                var form = $("#formLogin");

                if (form[0].checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.addClass('was-validated');
            });
        </script>

</body>
</html>
