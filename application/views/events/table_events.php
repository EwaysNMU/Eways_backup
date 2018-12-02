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
<link href="<?php echo base_url() ?>assets/lightbox/css/lightbox.css" rel="stylesheet">

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

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Created</th>
                        <th>Topic Name</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Last Updated</th>
                    </tr>
                </thead>
                <tbody>
                 <?php foreach ($event_list as $row){?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td class="dates"><?php echo date('l, M j, Y', strtotime($row['created'])); ?></td>
                        <td><?php echo $row['topicName']; ?></td>
                        <td class="dates"><?php echo $row['startDate']; ?></td>
                        <td class="dates"><?php echo $row['endDate']; ?></td>
                        <td><?php echo $row['startTime']; ?></td>
                        <td><?php echo $row['endTime']; ?></td>
                        <td class="dates"><?php echo date('l, M j, Y', strtotime($row['updated'])); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Topic Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Last Updated</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div  class="col-sm-2">
      <p class="feeds">News feed</p>
      <a class="badge badge-primary" href="<?php echo site_url() ?>/nw_feed" role="button">Add feed</a>
       <a class="badge badge-warning" href="<?php echo site_url() ?>/allfeeds" role="button">View feeds</a>
      <hr>
      <div class="anyClass ">
        <div class="row"> 
            <div class="col-12">
               <?php foreach ($feeds_list as $row){?> 
                          <div class="row">
    <div class="col-xs-12 col-sm-3">
        <a class="example-image-link" href="<?php echo base_url() ?>uploads/feeds/<?php echo $row['picture_path']; ?>" data-lightbox="<?php echo $row['picture_path']; ?>" data-title="<?php echo $row['picture_path']; ?>"><img class="example-image" src="<?php echo base_url() ?>uploads/feeds/<?php echo $row['picture_path']; ?>" alt="" height="65" width="65"/></a>
    </div>
    <div class="col-xs-12 col-sm-8">
        <div class="row">
            <div class="col-sm-12">
                <p><b>Title:</b>&nbsp;<?php echo $row['title']; ?><br>
                    <b>Date:</b>&nbsp;<?php echo date('d-M-Y', strtotime($row['created'])); ?><br>
                 <b>Link:</b>&nbsp;<a target="_blank" href="<?php echo $row['link']; ?>"><?php echo $row['link']; ?></a></p>
            </div>
        </div> 
    </div>
    <div class="col-xs-12">
        <hr>
    </div>
</div>
            <?php } ?>
            
        </div> 
            

            
            
    </div>
</div>
</div> 
</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="<?php echo base_url() ?>assets/lightbox/js/lightbox.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
        <script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
        'alwaysShowNavOnTouchDevices':false,
        'disableScrolling':false
        
    })
</script>
</body>
</html>