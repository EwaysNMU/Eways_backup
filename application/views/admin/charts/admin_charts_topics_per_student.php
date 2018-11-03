
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_charts">Charts</a>
            </li>
            <li class="breadcrumb-item active">No. Topics Completed per student</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Topics completed by student</div>
            <div class="card-body">
                <div style="text-align: center">
                    <form class="" action="<?php echo site_url() ?>/admin_charts_student_validation" method="POST">
                        Student No: <input type="text" id="sname" pattern="[0-9]{9}" placeholder="e.g 212345678" name="sname" minlength="9" maxlength="9" required autofocus>

                        From: <input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">

                        To: <input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>">

                        <input id="postBtn" type="submit" value="Search"><br><br>

                        <?php echo form_error('endDate'); ?>
                    </form>
                    <?php foreach ($goalsetting->result() as $value) { ?>
                    <strong><?php echo $value->firstName ?> <?php echo $value->lastName ?></strong>
                    <?php } ?>
                </div>
                <br><br>
                <canvas id="myChart" width="100%" height="40%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                    type: 'bar',
                            data: {
                            labels: ["Goals Setting", "Stress Management", "Time Management", "Motivation", "Study Strategy", "Tips for Exams and Tests"],
                                    datasets: [{
                                    label: "No. Completed topics",
                                            borderColor: 'rgb(255, 255, 255)',
                                            data: [
<?php foreach ($goalsetting->result() as $value) { ?>
    <?php echo $value->countGoalSettting ?>,
<?php } ?>
<?php foreach ($stressmanagement->result() as $value) { ?>
    <?php echo $value->countStressManagement ?>,
<?php } ?>
<?php foreach ($timemanagement->result() as $value) { ?>
    <?php echo $value->countTimeManagement ?>,
<?php } ?>
<?php foreach ($motivation->result() as $value) { ?>
    <?php echo $value->countMotivation ?>,
<?php } ?>
<?php foreach ($studystrategy->result() as $value) { ?>
    <?php echo $value->countStudyStrategy ?>,
<?php } ?>
<?php foreach ($tipsforexams->result() as $value) { ?>
    <?php echo $value->countTipsforExams ?>
<?php } ?>],
                                            backgroundColor: [
                                                    "rgba(50,150,300,0.5)",
                                                    "rgba(100,150,250,0.5)",
                                                    "rgba(150,150,200,0.5)",
                                                    "rgba(200,150,150,0.5)",
                                                    "rgba(250,150,100,0.5)",
                                                    "rgba(300,150,50,0.5)"
                                            ],
                                            borderColor: [
                                                    "rgba(50,150,300,1)",
                                                    "rgba(100,150,250,1)",
                                                    "rgba(150,150,200,1)",
                                                    "rgba(200,150,150,1)",
                                                    "rgba(250,150,100,1)",
                                                    "rgba(300,150,50,1)"
                                            ],
                                            borderWidth: 1
                                    }]
                            },
                            // Configuration options go here
                            options: {}
                    });
                </script>
            </div>
        </div>
    </div></div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
