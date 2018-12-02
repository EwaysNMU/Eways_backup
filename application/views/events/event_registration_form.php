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
            <style>
        .mandelacolor {
    background-color: #103A5C;
}
            navbarSupportedContent {
                z-index: 999999;
            }
            
             #navhover:hover{
            text-decoration: none;
            color: #FDB819
            
        }
        #navhover{
            color: white
        }
        </style>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark mandelacolor">
            <a class="navbar-brand" href="#">E-WAYS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/event"><i class="fas fa-calendar-alt"></i>&nbsp;Events <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul  class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin/login">Help</a>
                    </li>
                </ul>
            </div>
        </nav><br><br><br><br>

<div class="container">
    
    <?php $attributes = array('class' => 'col s12', 'id' => 'myform');
    echo form_open_multipart('add_feed', $attributes); ?>

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" required name="title" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
    </div>
     <div class="form-group">
        <label for="sDescription">Short Description</label>
        <input type="text" class="form-control" required name="shortDescription" id="sDescription" aria-describedby="sDescriptionHelp" placeholder="Enter Short Description">
    </div>
     <div class="form-group">
        <label for="Description">Description</label>
        <textarea type="text-area" class="form-control" required  name="description" id="Description" aria-describedby="DescriptionHelp" placeholder="Enter Full Description"></textarea>
    </div>
    <div class="form-group">
        <label for="link">Link</label>
        <input type="email" class="form-control" required name="link" id="link" placeholder="i.e. www.google.com">
    </div>
    <div class="form-group">
      <input  name="userfile" type="file" size="80">
            <?php if(isset($say_something)){
   echo $error;
    } ?>

    </div>
    <a class="btn btn-danger" href="<?php echo site_url() ?>/allfeeds" role="button">Cancel</a>
    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>   
    
    
    
</div>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>