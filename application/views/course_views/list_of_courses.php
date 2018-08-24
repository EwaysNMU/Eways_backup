
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
  background-color: #f5f5f5
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
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button:hover {
    text-decoration: none
}
        </style>
        <div class="container">
            <div align="center">
                <h2>LIST OF COURSES</h2>
            </div>
            <br><br>

            <div class="row">
                <div class="col s12 m4">
                    <div id="card1" class="card" style="width: 18rem;">
                        <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/goals.png" width="256" height="216" alt="GOALS SETTING">
                        <div class="card-body">
                            <h6 style="text-align: center" class="card-title">GOALS SETTING</h6>
                            <p style="text-align: center" class="card-text">The definition of goal setting is the process of identifying something that you want to accomplish and establishing measurable goals and time frames.</p>
<!--                            <a href="<?php echo site_url() ?>/goals_settings" class="btn btn-primary">Read</a>-->
                        </div>
                        <div class="overlay"><br><br><br><br><br><br>
                            <h6 style="text-align: center">Learn to set achievable goals</h6>
                            <div class="text">
                                <a class="button" style="color:white"href="#">Start</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col s12 m4">
                    <div id="card2" class="card" style="width: 18rem;">
                        <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/stress-management.png" width="256" height="216" alt="STRESS MANAGEMENT">
                        <div class="card-body">
                            <h6 style="text-align: center" class="card-title">STRESS MANAGEMENT</h6>
                            <p style="text-align: center" class="card-text">Stress management is aimed at controlling a person's level of stress, especially chronic stress, usually for the purpose of improving everyday functioning.</p>
                        </div>
                        <div class="overlay"><br><br><br><br><br><br>
                            <h6 style="text-align: center">Learn how to manage your stress</h6>
                            <div class="text">
                                <a class="button" style="color:white"href="<?php echo site_url() ?>/stress_management_">Start</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div id="card3" class="card" style="width: 18rem;">
                        <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/time management.jpg" width="256" height="216" alt="TIME MANAGEMENT">
                        <div class="card-body">
                            <h6 style="text-align: center" class="card-title">TIME MANAGEMENT</h6>
                            <p style="text-align: center" class="card-text">“Time management” is the process of organizing and planning how to divide your time between specific activities. Good time management enables you to work smarter.</p>
                        </div>
                        <div class="overlay"><br><br><br><br><br><br>
                            <h6 style="text-align: center">Learn how to prioritize</h6>
                            <?php foreach ($info->result() as $value) { ?>
                            <?php if($value->completed == "Yes" && $value->topicID === "2"): ?>
                            <div class="text">
                                <a class="button" style="color:white"href="<?php echo site_url() ?>/time_management_">Start</a>
                            </div>
                             <?php else: ?>
                            <?php echo $value->completed ; ?>
                             <?php endif ?>
                            <?php } ?> 
                        </div>
                    </div>
                </div>
                 
            </div><br><br>
            <div class="row">
                <div class="col s12 m4">
                    <div id="card4" class="card" style="width: 18rem;">
                        <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/motivation.jpg" width="256" height="216" alt="Motivation">
                        <div class="card-body">
                            <h6 style="text-align: center" class="card-title">MOTIVATION</h6>
                            <p style="text-align: center" class="card-text">Motivation is the  process of stimulating people to actions to accomplish goals. The word means needs, desires, wants or drives within an individuals. </p>
                        </div>
                        <div class="overlay"><br><br><br><br><br><br>
                            <h6 style="text-align: center">Learn how to stay motivated</h6>
                            <div class="text">
                                <a class="button" style="color:white"href="#">Start</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div id="card5" class="card" style="width: 18rem;">
                        <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/strategy.jpg" width="256" height="216" alt="Study Strategy">
                        <div class="card-body">
                            <h6 style="text-align: center" class="card-title">STUDY STRATEGY</h6>
                            <p style="text-align: center" class="card-text">Study strategy otherwise known as study skills refer to those things that individuals do when they have to locate, organize, and remember information.</p>
                        </div>
                        <div class="overlay"><br><br><br><br><br><br>
                            <h6 style="text-align: center">Learn techniques for studying</h6>
                            <div class="text">
                                <a class="button" style="color:white"href="#">Start</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div id="card6" class="card" style="width: 18rem;">
                        <img class="card-img-top" style="-webkit-user-select: none;cursor: zoom-in;" src="<?php echo base_url() ?>assets/images/course_background/tips.png" width="256" height="216" alt="Tips For Exams And Tests">
                        <div class="card-body">
                            <h6 style="text-align: center" class="card-title">TIPS FOR EXAMS AND TESTS</h6>
                            <p style="text-align: center" class="card-text">Just as an athlete has to prepare properly for an important game or race, it’s up to you as a student to prepare yourself adequately for a test or exam.</p>
                        </div>
                        <div class="overlay"><br><br><br><br><br><br>
                            <h6 style="text-align: center">Learn tips for exams and test</h6>
                            <div class="text">
                                <a class="button" style="color:white"href="#">Start</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>


        
