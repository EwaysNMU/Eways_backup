<br><br><br>
<div class="container">
    <h2 class="text-center">TIPS FOR EXAMS AND TESTS</h2>

    <?php $attributes = array('class' => 'was-validated', 'id' => 'tips_for_exams_and_tests_feedback_answer'); ?>
    <?php echo form_open('tips_for_exams_and_tests_feedback_answer_', $attributes); ?>

    <input type="hidden" name="topic_id" value="6">
    <input type="hidden" name="student_id" value="<?php echo $this->session->userdata('studentID'); ?>">

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
<br>

















