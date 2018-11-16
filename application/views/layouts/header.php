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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<!--        <------------------------TEXT EDITOR SCRIPT AND CSS---------------------------->
        <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/jquery-te-1.4.0.css">
<script type="text/javascript" src="https://code.jquery.com/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/jquery-te-1.4.0.min.js"></script>
        <style>

            .mandelacolor {
                background-color: #103A5C;
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #15212A;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: whitesmoke;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #FEC000;
                color: black;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }
            #navhover:hover{
                text-decoration: none;
                color: #FEC000

            }
            #navhover{
                color: white
            }
        </style>
        <title>E-WAYS</title>
        <script>
setInterval(  
function()  
{  
$('#links').load('<?php echo site_url() ?>/chat/time_management/table');  
}, 3000);
</script>

            <nav class="navbar fixed-top navbar-expand-lg navbar-dark mandelacolor">
            <a class="navbar-brand" href="#">E-WAYS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">

                    </li>
                </ul>
                <ul  class="nav navbar-nav">
                    <li class="nav-item">
                        <a id="navhover" href="<?php echo site_url() ?>/all_courses"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <a id="navhover" href="<?php echo site_url() ?>/community"><i class="fa fa-comments" aria-hidden="true"></i> Community</a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <a id="navhover" href="<?php echo site_url() ?>/resources"><i class="fa fa-briefcase"></i> Resources</a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php foreach ($info2->result() as $value) { ?>
                        <?php if ($value->studentID == $this->session->userdata('studentID')): ?>
                            <li class="nav-item">
                                <img src="<?php echo base_url(); ?>uploads/user_profiles/<?php echo $value->photo ?>" alt="user picture" style="width:23px; height:23px;border-radius: 100%;" />
                            </li>&nbsp;&nbsp;&nbsp;
                            <li class="nav-item dropdown">

                                <a id="navhover"> <?php echo ucfirst($value->firstName." ".$value->lastName); ?>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-content">
                                    <a href="<?php echo site_url() ?>/user_profile_"><i class="fa fa-user" aria-hidden="true"></i> Profile</a>
        <!--                                    <a href=""><i class="fa fa-cog" aria-hidden="true"></i></i> Edit profile</a>-->
                                    <a  href="#"><i class="fa fa-align-left" aria-hidden="true"></i> My posts</a><hr style="background-color: white; margin-bottom: 0.2px;margin-top: 0.2px">
                                    <a  href="<?php echo site_url() ?>/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                                </div>
                            </li>

                        <?php endif ?>
                    <?php } ?> 
                </ul>

                </ul>

            </div>
        </nav>
    </head>
        

