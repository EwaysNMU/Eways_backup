
<!DOCTYPE html>
<html lang="en">


    <head>
        <title>Error</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!------------start head  scripts and link src------------>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
<!--
        <!---- Icon link local ----->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <!-------    font awesome online plug --------------->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            body {
/*                background-image: url("../images/.jpg");*/
                background-color: #081E2F;
                background-attachment:scroll;
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                line-height:5px; 
            }
            .display-1 {text-align:center;color:#e1b7b7;}
            .display-1 .fa {animation:fa-spin 5s infinite linear;}
            .display-3 {text-align:center;color:#df726a;}
            .lower-case {text-align:center;}
        </style>

    </head>
    <!-------------end head scripts and link src ------------->
    <!------------start content ------------>
    <body>
        <br><br><br><br><br><br><br><br>
        <div class="wrapper">
            <div class="container-fluid" id="top-container-fluid-nav">
                <div class="container">	
                    <!---- for nav container ----->	
                </div>
            </div> 


            <div class="container-fluid" id="body-container-fluid">
                <div class="container">
                    <!---- for body container ---->


                    <div class="jumbotron">
                        <h1 class="display-1">4<i class="fa  fa-spin fa-cog fa-3x"></i> 4</h1>
                        <h1 class="display-3">ERROR</h1>
<!--						<p class="lower-case">Aw !! webpage not found please try to refresh</p>-->
                        <p class="lower-case"><?php echo $message1; ?></p>
<!--						<p class="lower-case">Maybe the page is under maintenance</p>-->
                        <p class="lower-case"><?php echo $message2; ?></p>

                    </div>

                    <!-------mother container middle class------------------->


                </div>
            </div>

            <div class="container-fluid" id="footer-container-fluid">
                <div class="container">
                    <!---- for footer container ---->
                </div>
            </div>
        </div>
    </body>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</html>
