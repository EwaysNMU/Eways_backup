
<?php if ($this->session->flashdata('flash_profile')): ?>
    <script>
        swal({
            title: "Success!",
            text: "Your profile was updated",
            icon: "success"
        });
    </script>
<?php endif ?>
 <?php if ($this->session->flashdata('flash_error')): ?>
            <script>
                                        swal({
                      title: "Error!",
                      text: "Sorry, only JPG, JPEG, PNG & GIF files are allowed.",
                      icon: "warning"
                    });
            </script>
        <?php endif ?>
		<?php if ($this->session->flashdata('flash_error_large')): ?>
            <script>
                                        swal({
                      title: "Error!",
                      text: "Sorry, your file is too large it should be less then 5MB",
                      icon: "warning"
                    });
            </script>
        <?php endif ?>
          
<br><br><br>
<?php foreach ($info2->result() as $value) { ?>
                            <?php if ($value->studentID == $this->session->userdata('studentID')): ?>
<form name="myform" enctype="multipart/form-data" class="form" action="<?php echo site_url() ?>/update_profile_" method="post">

    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center">
                    <?php if ($value->photo == "no_profile.jpeg"): ?>
                    <img src="<?php echo base_url(); ?>uploads/user_profiles/no_profile.jpeg" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,image/*" type="file" name="userfile" class="text-center center-block file-upload">
                    <?php else: ?>
                    <img src="<?php echo base_url(); ?>uploads/user_profiles/<?php echo $value->photo ?>" class="avatar img-circle img-thumbnail" alt="avatar">
                    <a style="text-decoration: none;" href="<?php echo site_url(); ?>/remove_profile">remove photo <i class="fa fa-times" aria-hidden="true"></i></a>
                    <input type="file" name="userfile" hidden>
               <?php endif ?>
                </div></hr><br>
                <input type="text" name="db_photo" value="<?php echo $value->photo ?>" hidden>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Progress <i class="fa fa-tasks fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Your Course Progress</strong></span></li>
                    <li class="list-group-item text-left">
                                <?php foreach ($info3->result() as $progress) { ?>
                                    <?php if ($progress->countTopic == "1" && $progress->completed == "Yes"): ?>
                                        <div class="progress" style="height:5px">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="16"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:16%; height: 200%">
                                            </div>
                                        </div><p>16% Complete</p>     
                                    <?php elseif ($progress->countTopic == "2"): ?>

                                        <div id="div2" class="progress" style="height:5px">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="32"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:32%; height: 200%">
                                            </div>
                                        </div><p>32% Complete</p>
                                    <?php elseif ($progress->countTopic == "3"): ?>
                                        <div id="div3" class="progress" style="height:5px">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="48"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:48%; height: 200%">
                                            </div>
                                        </div><p>48% Complete</p>
                                    <?php elseif ($progress->countTopic == "4"): ?>
                                        <div id="div4" class="progress" style="height:5px">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="64"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:64%; height: 200%">
                                            </div>
                                        </div><p>64% Complete</p>
                                    <?php elseif ($progress->countTopic == "5"): ?>
                                        <div id="div5" class="progress" style="height:5px">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:80%; height: 200%">
                                            </div>
                                        </div><p>80% Complete</p>
                                    <?php elseif ($progress->countTopic == "6"): ?>
                                        <div id="div6" class="progress" style="height:5px"> 
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 200%">
                                            </div>
                                        </div><p>100% Complete</p>
                                    <?php else: ?>
                                        <div id="div7" class="progress" style="height:5px"> 
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100" style="width:0%; height: 200%">
                                            </div>
                                        </div><p>0% Complete</p>
                                    <?php endif ?>
                                <?php } ?>
                            </li>
<!--                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>-->
                </ul> <br>
            </div><!--/col-3-->
            <div class="col-sm-6">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <hr>
                        
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="first_name"><h6>First Name:</h6></label>
                                        <input required type="text" class="form-control" name="first_name" id="first_name" value="<?php echo ucfirst($value->firstName); ?>">
                                        <?php echo form_error('first_name'); ?>
                                    </div>
                                </div>			
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name"><h6>Last Name:</h6></label>
                                        <input required type="text" class="form-control" name="last_name" id="last_name" value="<?php echo ucfirst($value->lastName); ?>">
                                        <?php echo form_error('last_name'); ?>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="studentno"><h6>Student Number:</h4></label>
                                        <input type="number" readonly class="form-control" name="studentno" id="studentno" value="<?php echo ucfirst($this->session->userdata('studentNo')); ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="email"><h6>Email:</h6></label>
                                        <input type="text" readonly class="form-control" name="email" id="email" value="<?php echo "s" . $this->session->userdata('studentNo') . "@mandela.ac.za"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="faculty"><h6>Faculty:</h6></label>
                                        <input type="text" readonly class="form-control" name="faculty" id="faculty" value="<?php echo ucfirst($this->session->userdata('faculty')); ?>">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="study_area"><h6>School:</h6></label>
                                        <input type="text" readonly class="form-control" name="department" id="department" value="<?php echo ucfirst($this->session->userdata('studyArea')); ?>">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button name ="upload" class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                        <hr>
                    </div><!--/tab-pane-->
                </div><!--/tab-content-->

            </div><!--/col-9-->
        </div><!--/row-->
    </div>
	
                            
</form>
<?php endif ?>
                        <?php } ?> 
<!--<script>
    $(document).ready(function () {


        var readURL = function (input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.avatar').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        };


        $(".file-upload").on('change', function () {
            readURL(this);
        });
    });
</script>-->


