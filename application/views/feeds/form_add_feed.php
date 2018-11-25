<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>EWAYS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
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
    .anyClass {
      height:700px;
      overflow-y: scroll;
      font-size: 12px;
  }
  .feeds{
    font-family: 'Inconsolata', monospace;
    font-weight: bold;
    text-decoration: underline;
}
.dates{
    font-family: 'Roboto', sans-serif;
    font-size: 12px;
    font-style: italic;
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
                <a class="nav-link" href="<?php echo site_url() ?>/event_form"><i class="fa fa-home" aria-hidden="true"></i> Event Registration <span class="sr-only">(current)</span></a>
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
  echo form_open('add_feed', $attributes); ?>

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
    <a class="badge badge-primary" data-toggle="modal" data-target="#UploadPicture" href="#" role="button">Upload Picture</a>
    </div>
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>   
    
    
    
</div>




<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>