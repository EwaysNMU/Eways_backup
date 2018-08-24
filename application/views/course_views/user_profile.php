
<br><br><br>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
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
                <form class="form" action="#" method="post" id="registrationForm">
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="first_name"><h6>First Name:</h6></label>
                            <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $this->session->userdata('firstname'); ?>">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="last_name"><h6>Last Name:</h6></label>
                            <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $this->session->userdata('lastname'); ?>">
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="studentno"><h6>Student Number:</h4></label>
                            <input type="number" readonly class="form-control" name="studentno" id="studentno" value="<?php echo $this->session->userdata('studentNo'); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="email"><h6>Email</h6></label>
                            <input type="text" readonly class="form-control" name="email" id="email" value="<?php echo $this->session->userdata('studentNo')."@mandela.ac.za"; ?>">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="faculty"><h6>Faculty</h6></label>
                            <select id="faculty" class="form-control" name="faculty" onchange='facultyChanged(this.value);' value="<?php if (isset($_POST['faculty'])) echo $_POST['faculty']; ?>">
                                <?php if($this->session->userdata('faculty') == "Arts"): ?>
                                <option selected value="<?php $this->session->userdata('faculty') ?>">Arts</option>
                                <option value="Business and Economic Sciences">Business and Economic Sciences</option>
                                <option value="Education">Education</option>
                                <option value="Engineering, the Built Environment and Information Technology">Engineering, the Built Environment and Information Technology</option>
                                <option value="Health Sciences">Health Sciences</option>
                                <option value="Law">Law</option>
                                <option value="Science">Science</option>
                                
                                <?php elseif($this->session->userdata('faculty') == "Business and Economic Sciences"): ?>
                                <option  value="Arts">Arts</option>
                                <option selected value="<?php $this->session->userdata('faculty') ?>">Business and Economic Sciences</option>
                                <option value="Education">Education</option>
                                <option value="Engineering, the Built Environment and Information Technology">Engineering, the Built Environment and Information Technology</option>
                                <option value="Health Sciences">Health Sciences</option>
                                <option value="Law">Law</option>
                                <option value="Science">Science</option>
                                
                                
                                <?php elseif($this->session->userdata('faculty') == "Education"): ?>
                                <option  value="Arts">Arts</option>
                                <option value="Business and Economic Sciences">Business and Economic Sciences</option>
                                <option selected value="<?php $this->session->userdata('faculty') ?>">Education</option>
                                <option value="Engineering, the Built Environment and Information Technology">Engineering, the Built Environment and Information Technology</option>
                                <option value="Health Sciences">Health Sciences</option>
                                <option value="Law">Law</option>
                                <option value="Science">Science</option>
                                
                                
                                <?php elseif($this->session->userdata('faculty') == "Engineering, the Built Environment and Information Technology"): ?>
                                <option value="Arts">Arts</option>
                                <option value="Business and Economic Sciences">Business and Economic Sciences</option>
                                <option value="">Education</option>
                                <option selected value="<?php $this->session->userdata('faculty') ?>">Engineering, the Built Environment and Information Technology</option>
                                <option value="Health Sciences">Health Sciences</option>
                                <option value="Law">Law</option>
                                <option value="Science">Science</option>
                                
                                
                                <?php elseif($this->session->userdata('faculty') == "Health Sciences"): ?>
                                <option  value="Arts">Arts</option>
                                <option value="Business and Economic Sciences">Business and Economic Sciences</option>
                                <option value="Education">Education</option>
                                <option value="Engineering, the Built Environment and Information Technology">Engineering, the Built Environment and Information Technology</option>
                                <option selected value="<?php $this->session->userdata('faculty') ?>">Health Sciences</option>
                                <option value="Law">Law</option>
                                <option value="Science">Science</option>
                                
                                
                                <?php elseif($this->session->userdata('faculty') == "Law"): ?>
                                <option  value="Arts">Arts</option>
                                <option value="Business and Economic Sciences">Business and Economic Sciences</option>
                                <option value="Education">Education</option>
                                <option value="Engineering, the Built Environment and Information Technology">Engineering, the Built Environment and Information Technology</option>
                                <option value="Health Sciences">Health Sciences</option>
                                <option selected value="<?php $this->session->userdata('faculty') ?>">Law</option>
                                <option value="Science">Science</option>
                                
                                
                                <?php elseif($this->session->userdata('faculty') == "Science"): ?>
                                <option  value="Arts">Arts</option>
                                <option value="Business and Economic Sciences">Business and Economic Sciences</option>
                                <option value="Education">Education</option>
                                <option value="Engineering, the Built Environment and Information Technology">Engineering, the Built Environment and Information Technology</option>
                                <option value="Health Sciences">Health Sciences</option>
                                <option value="Law">Law</option>
                                <option selected value="<?php $this->session->userdata('faculty') ?>">Science</option>
                                
                                
                                <?php endif ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="study_area"><h6>Department</h6></label>
                            <select id="department" class="form-control" name="study_area" required value="<?php if (isset($_POST['study_area'])) echo $_POST['study_area']; ?>">
                                    <option selected value="<?php $this->session->userdata('studyArea') ?>"><?php echo $this->session->userdata('studyArea') ?></option>
                            </select>
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
                </form>
              <hr>
             </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
</div>
    
    <script>
    $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    };
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
    </script>
    <script type="text/javascript">
            var depArt = ["Architecture", "Governmental and Social Sciences", "Language, Media & Communication", "Music, Art & Design"];
            var depBusiness = ["Business School", "Industrial Psychology and Human Resources", "Accounting", "Economics, Development and Tourism", "Management Sciences"];
            var depEducation = ["Initial Teacher Education", "Continuing Professional Development", "Education Research & Engagement"];
            var depEngineering = ["Engineering", "Information and Communication Technology", "Built Environment"];
            var depHealthSc = ["Clinical Care Sciences and Medicinal Sciences", "Behavioural Sciences and Lifestyle Sciences"];
            var depLaw = ["Law"];
            var deptscience = ["Biomolecular & Chemical Sciences", "Computer Science, Mathematics, Physics and Statistics", "Environmental Sciences", "Natural Resource Management"];

            function facultyChanged(faculty)
            {
                var selectFaculty = document.getElementById('department');
                var ln = selectFaculty.length - 1;
                while (ln > 0)
                {
                    selectFaculty.remove(1);  //Remove all but "Select State"
                    ln--;
                }
                var depArray;
                switch (faculty)
                {
                    case "Arts":
                        depArray = depArt;
                        break;
                    case "Business and Economic Sciences":
                        depArray = depBusiness;
                        break;
                    case "Education":
                        depArray = depEducation;
                        break;
                    case "Engineering, the Built Environment and Information Technology":
                        depArray = depEngineering;
                        break;
                    case "Health Sciences":
                        depArray = depHealthSc;
                        break;
                    case "Law":
                        depArray = depLaw;
                        break;
                    case "Science":
                        depArray = deptscience;
                        break;
                    default:
                }
                for (i = 0; i < depArray.length; i++)
                {
                    var option = document.createElement('option');
                    option.text = depArray[i];
                    option.value = depArray[i];
                    selectFaculty.add(option);
                }
            }

        </script>

