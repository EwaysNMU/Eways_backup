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
      <a class="badge badge-primary" data-toggle="modal" data-target="#exampleModalCenter" href="#" role="button">Add feed</a>
       <a class="badge badge-warning" href="#" role="button">View feeds</a>
      <hr>
      <div class="anyClass ">
        <div class="row"> 
            <div class="col-12">
               <?php foreach ($feeds_list as $row){?>
                <p><b>Date:</b>&nbsp;<?php echo date('d-M-Y', strtotime($row['created'])); ?><br>
                    <b>Title:</b>&nbsp;<mark><?php echo $row['title']; ?></mark><br>
                    <b>Link:</b>&nbsp;<a target="_blank" href="<?php echo $row['link']; ?>"><?php echo $row['link']; ?></a>
                </p>
                <hr>
            <?php } ?>
            
        </div> 
    </div>
</div>
</div> 
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create new feed</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
     <form>
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
    </div>
     <div class="form-group">
        <label for="sDescription">Short Description</label>
        <input type="text" class="form-control" id="sDescription" aria-describedby="sDescriptionHelp" placeholder="Enter Short Description">
    </div>
     <div class="form-group">
        <label for="Description">Description</label>
        <textarea type="text-area" class="form-control" id="Description" aria-describedby="DescriptionHelp" placeholder="Enter Full Description"></textarea>
    </div>
    <div class="form-group">
        <label for="link">Link</label>
        <input type="text" class="form-control" id="link" placeholder="i.e. www.google.com">
    </div>
    <div class="form-group">
    <a class="badge badge-primary" data-toggle="modal" data-target="#UploadPicture" href="#" role="button">Upload Picture</a>
    </div>
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>   
</div>

  
      <!-- Modal -->
<div class="modal fade" id="UploadPicture" tabindex="1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
     <form>
      <div class="form-group">
    <?php
    if (isset($error)) {
        echo "<div class='alert'>$error</div>";
    }
    ?>
  <?php  
  $attributes = array('class' => 'col s12', 'id' => 'myform');
    echo form_open_multipart('c_upload/do_upload', $attributes); ?>

  <div class="row">
    <div class="input-field col s4">
      <input  name="userfile" type="file" size="80">
    </div>
</div>
  <div class="modal-footer left">
  <a href="<?php echo base_url('c_search/s_patient_by'); ?>; ?>" class="waves-effect waves-light  red darken-4 btn"><i class="material-icons right">clear</i>Cancel</a>
        <button class="btn waves-effect waves-light green darken-4" type="submit" name="action">Submit
  <i class="material-icons right">send</i>
</button>
</div>
<?php echo form_close(); ?>

    </div>

     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
        
</div>
</div>
</div>







<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>