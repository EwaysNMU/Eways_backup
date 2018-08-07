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
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">e-WAYS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">

			</ul>
			<ul  class="navbar-nav">

			</ul>

		</div>
	</nav>
	<div class="container">
		<h2 class="text-center">STUDY STRATEGIES FEEDBACK</h2>

		<?php $attributes = array('class' => 'was-validated', 'id' => 'study_strategy_feedback');?>
		<?php echo form_open('study_strategy_feedback', $attributes);?>

		<input type="hidden" name="topic_id" value="2">
		<input type="hidden" name="student_id" value="1">

		<p class="font-weight-bold">1.Was the topic helpful ?</p>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation2" value="Yes" name="topic_helpful" required>
			<label class="custom-control-label" for="customControlValidation2">Yes</label>
		</div>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation3" value="No" name="topic_helpful" required>
			<label class="custom-control-label" for="customControlValidation3">No</label>
		</div>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation4" value="Somehow" name="topic_helpful" required>
			<label class="custom-control-label" for="customControlValidation4">Somehow</label>
			<div class="invalid-feedback">Please select one of the above answer.</div>
		</div>

		<p class="font-weight-bold">2.How would you rate the amount of material covered? i.e. 4/5</p>
		<div class="form-group">
			<select class="custom-select" name="rate_material" required>
				<option value="">Please select a number</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<div class="invalid-feedback">Please select one of the value in the drop down menu.</div>
		</div>

		<p class="font-weight-bold">3.How consistent was the course content with the objectives?</p>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation5" value="Consistent"name="objectives" required>
			<label class="custom-control-label" for="customControlValidation5">Consistent</label>
		</div>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation6" value="Inconsistent" name="objectives" required>
			<label class="custom-control-label" for="customControlValidation6">Inconsistent</label>
		</div>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation7" value="Very Consistent" name="objectives" required>
			<label class="custom-control-label" for="customControlValidation7">Very Consistent</label>
			<div class="invalid-feedback">Please select one of the above answer.</div>
		</div>


		<p class="font-weight-bold">4.Rate your confidence level for completing the knowledge or skill presented? i.e. 4/5</p>
		<div class="form-group">
			<select class="custom-select" name="rate_confidence"required>
				<option value="">Please select a number</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
			<div class="invalid-feedback">Please select one of the value in the drop down menu.</div>
		</div>

		<p class="font-weight-bold">5.Did any of the activities help you gain a clearer understanding of the subject?</p>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation8" value="Yes" name="activities" required>
			<label class="custom-control-label" for="customControlValidation8">Yes!</label>
		</div>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation9" value="Somehow" name="activities" required>
			<label class="custom-control-label" for="customControlValidation9">Somehow</label>
		</div>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation10" value="Not At All" name="activities" required>
			<label class="custom-control-label" for="customControlValidation10">Not at all</label>
			<div class="invalid-feedback">Please select one of the above answer.</div>
		</div>

		<p class="font-weight-bold">6.The course (or section) provided the opportunity to practice the skills required in the course.</p>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation11" value="Yes" name="opportunity" required>
			<label class="custom-control-label" for="customControlValidation11">Yes!</label>
		</div>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation12" value="Somehow" name="opportunity" required>
			<label class="custom-control-label" for="customControlValidation12">Somehow</label>
		</div>
		<div class="custom-control custom-radio">
			<input type="radio" class="custom-control-input" id="customControlValidation13" value="Not At All" name="opportunity" required>
			<label class="custom-control-label" for="customControlValidation13">Not at all</label>
			<div class="invalid-feedback">Please select one of the above answer.</div>
		</div>



		<p class="font-weight-bold">7.Any personal comment.</p>
		<div class="form-group">

			<textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3" required></textarea>
			<div class="invalid-feedback">Please enter comment in the space above.</div>
		</div>


		<div>
			<button type="submit" class="btn btn-primary  float-right">Submit</button>
		</div>
		<?php echo form_close(); ?>

	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
