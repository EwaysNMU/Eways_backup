
<br><br><br><br>
<style>
    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: #F2F2F2;
    }

    #card1:hover .overlay, #card2:hover .overlay, #card3:hover .overlay, #card4:hover .overlay, 
    #card5:hover .overlay, #card6:hover .overlay
    {
        opacity: 1;
    }
    #card1, #card2, #card3, #card4, #card5, #card6
    {
        background-color: #F2F2F2
    }

    .text {
        color: Black;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .button {
        background-color: #103A5C; /* Mandela Blue */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    .button:hover {
        text-decoration: none;
        background-color:#FDB819 /*Mandela yellow */;
    }
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #EEAE2C;
        color: white;
        cursor: pointer;
        width:50px;
        height: 50px;
        padding: 15px;
        border-radius: 10px;
    }

    #myBtn:hover {
        background-color: #555;
    }
</style>


<?php if ($this->session->flashdata('flash_Success')): ?>
    <script>
        swal({
            title: "Success!",
            text: "Your feedback was submitted",
            icon: "success"
        });
    </script>
<?php endif ?>
<div class="container">
    <div align="center">
        <h2>LIST OF COURSES</h2>
    </div>
    <br><br>

    <div class="row">
        <div class="col s12 m4">
            <div id="card1" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/goals.png" width="256" height="216" alt="GOALS SETTING">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">GOAL SETTING</h6>
                    <p style="text-align: center" class="card-text">The definition of goal setting is the process of identifying something that you want to accomplish and establishing measurable goals and time frames.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn to set achievable goals</h6>
                    <div class="text">
                        <a class="button" style="color:white;" href="<?php echo site_url() ?>/goals_setting_">Start</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div id="card3" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/time management.jpg" width="256" height="216" alt="TIME MANAGEMENT">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">TIME MANAGEMENT</h6>
                    <p style="text-align: center" class="card-text">Time management is the process of organising and planning how to divide your time between specific activities. Good time management enables you to work smarter.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to prioritise</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "2"): ?>
                            <div class="text">
                                <a class="button" style="color:white;"href="<?php echo site_url() ?>/time_management_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?> 
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div id="card2" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/strategy.jpg" width="256" height="216" alt="STRESS MANAGEMENT">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">STUDY STRATEGIES</h6>
                    <p style="text-align: center" class="card-text">Study strategy otherwise known as study skills refer to those things that individuals do when they have to locate, organize, and remember information.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to manage your stress</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "1"): ?>
                            <div class="text">
                                <a class="button" style="color:white;"href="<?php echo site_url() ?>/study_strategies_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?> 
                </div>
            </div>
        </div>

    </div><br><br>

    <div class="row">
    </div>
    <div class="row">
        <div class="col s12 m4">
            <div id="card4" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/concentrating.jpg" width="256" height="216" alt="Motivation">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">CONCENTRATION & MEMORIZING</h6>
                    <p style="text-align: center" class="card-text">If you are not focused, you won't be able to memorize new facts or recall information you memorized previously.  </p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to stay motivated</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "3"): ?>
                            <div class="text">
                                <a class="button" style="color:white;"href="<?php echo site_url() ?>/concentration_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div id="card5" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/assignment_writing.jpg" width="256" height="216" alt="Study Strategy">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">ASSIGNMENT WRITING</h6>
                    <p style="text-align: center" class="card-text">Assignment writing can be both challenging and exciting. It involves several different processes such as research, planning, reflection etc.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn techniques for studying</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "4"): ?>
                            <div class="text">
                                <a class="button" style="color:white;"href="<?php echo site_url() ?>/assignment_writing_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div id="card6" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/refrencing.png" width="256" height="216" alt="Tips For Exams And Tests">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">REFERENCE CORRECTLY</h6>
                    <p style="text-align: center" class="card-text">It is important to reference the sources you use so that the reader can follow your arguments and check your sources.<br><br></p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn tips for exams and test</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "5"): ?>
                            <div class="text">
                                <a class="button" style="color:white;"href="<?php echo site_url() ?>/reference_correctly_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div><br><br>
    
    <div class="row">
        <div class="col s12 m4">
            <div id="card1" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/note_taking.jpg" width="256" height="216" alt="GOALS SETTING">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">NOTE TAKING & SUMMARISING</h6>
                    <p style="text-align: center" class="card-text"> Note-taking is the process of organizing and writing pieces of information. Summarizing involves analyzing information and identifying the essential elements.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn to set achievable goals</h6>
                    <div class="text">
                        <a class="button" style="color:white;" href="<?php echo site_url() ?>/notetaking_">Start</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div id="card3" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/presentation.jpg" width="256" height="216" alt="TIME MANAGEMENT">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">MAKING BETTER PRESENTATIONS</h6>
                    <p style="text-align: center" class="card-text">Presentation is a means of communication that can be adapted to various speaking situations, such as briefing a team.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to prioritise</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "2"): ?>
                            <div class="text">
                                <a class="button" style="color:white;"href="<?php echo site_url() ?>/presentations_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?> 
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div id="card2" class="card" style="width: 18rem;margin: auto">
                <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/tips.png" width="256" height="216" alt="STRESS MANAGEMENT">
                <div class="card-body">
                    <h6 style="text-align: center" class="card-title">TIPS FOR EXAMS</h6>
                    <p style="text-align: center" class="card-text">Give yourself the best environment to focus in by choosing somewhere with enough light, a comfortable chair, and little to no distractions.</p>
                </div>
                <div class="overlay"><br><br><br><br><br><br>
                    <h6 style="text-align: center">Learn how to manage your stress</h6>
                    <?php foreach ($info->result() as $value) { ?>
                        <?php if ($value->completed == "Yes" && $value->topicID === "1"): ?>
                            <div class="text">
                                <a class="button" style="color:white;"href="<?php echo site_url() ?>/tips_for_exams_">Start</a>
                            </div>
                        <?php else: ?>
                        <?php endif ?>
                    <?php } ?> 
                </div>
            </div>
        </div>

    </div><br><br>
</div>
<br><br>
<button onclick="topFunction()" id="myBtn" title="Go to top">&nbsp;<i style="color:black"class="fa fa-angle-double-up"></i>&nbsp;</button>


