<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url()?>assets/images/favicon/favicon.ico" type="image/x-icon">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Hello, world!</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

	<!-- Datatable -->
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

	  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->
	  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">e-WAYS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo site_url()?>">Home <span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<ul  class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#!">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url()?>/list_of_courses">Courses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#!">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url()?>/admin_dashboard">Admin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url()?>/student_profile">Login</a>
				</li>
			</ul>

		</div>
	</nav>

	<div class="container-fluid">
		<h2 class="text-center">FEEDBACK MANAGEMENT</h2>
		<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Feedback ID</th>
                <th>Student ID</th>
                <th>TOPIC ID</th>
                <th>Question 1</th>
								<th>Question 2</th>
								<th>Question 3</th>
								<th>Question 4</th>
								<th>Question 5</th>
								<th>Question 6</th>
                <th>Date</th>
                <th>Comment</th>
								<th>Action</th>
            </tr>
        </thead>
        <tbody>
					<?php foreach ($feedback_list as $row){?>
            <tr>
                <td><?php echo $row['feedbackID'];?></td>
                <td><?php echo $row['studentID'];?></td>
                <td><?php echo $row['topicID'];?></td>
                <td><?php echo $row['Q1'];?></td>
                <td><?php echo $row['Q2'];?></td>
                <td><?php echo $row['Q3'];?></td>
								<td><?php echo $row['Q4'];?></td>
                <td><?php echo $row['Q5'];?></td>
                <td><?php echo $row['Q6'];?></td>
                <td><?php echo $row['date'];?></td>
                <td><?php echo $row['comment'];?></td>
								<td></td>
            </tr>
						 <?php } ?>
        </tbody>
        <tfoot>
					<tr>
							<th>Feedback ID</th>
							<th>Student ID</th>
							<th>TOPIC ID</th>
							<th>Question 1</th>
							<th>Question 2</th>
							<th>Question 3</th>
							<th>Question 4</th>
							<th>Question 5</th>
							<th>Question 6</th>
							<th>Date</th>
							<th>Comment</th>
							<th>Action</th>
					</tr>
        </tfoot>
    </table>

	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<!-- Data table -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable( {
        "scrollX": true,
        "autoWidth": false,
        dom: 'Bfrtip',

         buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible'
                }
            },
            'copy', 'csv', 'excel', 'pdf','colvis'
        ],
        columnDefs: [ {
            targets: -1,
            visible: false
        } ]

      } );
    } );
  </script>


</body>
</html>
