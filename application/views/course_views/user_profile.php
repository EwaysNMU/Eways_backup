
<?php if ($this->session->flashdata('flash_profile')): ?>
    <script>
        swal({
            title: "Success!",
            text: "Your profile was updated",
            icon: "success"
        });
    </script>
<?php endif ?>
<br><br><br>

<form enctype="multipart/form-data" class="form" action="<?php echo site_url() ?>/update_profile_" method="post">
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-3"><!--left col-->


                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <h6>Upload a different photo...</h6>
                    <input type="file" name="userfile" class="text-center center-block file-upload">
                </div></hr><br>
                <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                </ul> 

            </div><!--/col-3-->
            <div class="col-sm-6">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <hr>
                        <?php foreach ($info2->result() as $value) { ?>
                            <?php if ($value->studentID == $this->session->userdata('studentID')): ?>
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
                                            <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php } ?> 
                        <hr>
                    </div><!--/tab-pane-->
                </div><!--/tab-content-->

            </div><!--/col-9-->
        </div><!--/row-->
    </div>
</form>
<script>
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
</script>


