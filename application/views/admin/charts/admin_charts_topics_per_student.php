
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
                        Student No: <input type="text" id="sname" pattern="[0-9]{9}" placeholder="e.g 212345678" name="sname" minlength="9" maxlength="9" value="<?php if (isset($_POST['sname'])) echo $_POST['sname']; ?>" required autofocus>

                        From: <input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">

                        To: <input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>"><br><br>

                        Graph: <select name="graph">
                            <?php foreach ($graphs->result() as $value) { ?>
                                <option value="<?php echo $value->graphID ?>"><?php echo $value->graphType ?></option>
                            <?php } ?>
                        </select>&nbsp;

                        <input id="postBtn" type="submit" value="Search"><br><br>

                        <?php echo form_error('endDate'); ?>
                    </form><br>

                    <?php echo $text1 ?>                  
                </div><br>

                <canvas id="myChart" width="100%" height="40%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
<?php foreach ($goalsetting->result() as $value) { ?>
                        type: '<?php echo $value->graphType ?>',
<?php } ?>
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
                                            "rgba(231, 76, 60,0.5)",
                                            "rgba(155, 89, 182,0.5)",
                                            "rgba(52, 152, 219,0.5)",
                                            "rgba(26, 188, 156,0.5)",
                                            "rgba(241, 196, 15,0.5)",
                                            "rgba(149, 165, 166,0.5)"
                                    ],
                                    borderColor: [
                                            "rgba(231, 76, 60,1)",
                                            "rgba(155, 89, 182,1)",
                                            "rgba(52, 152, 219,1)",
                                            "rgba(26, 188, 156,1)",
                                            "rgba(241, 196, 15,1)",
                                            "rgba(149, 165, 166,1)"
                                    ],
                                    borderWidth: 1
                            }]
                    },
                            // Configuration options go here
                            options: {}
                    });
                </script><br><br><br>
                <?php echo $text2 ?>
                <?php foreach ($goalsetting->result() as $value) { ?>
                    <strong><?php echo $value->firstName ?> <?php echo $value->lastName ?></strong>
                <?php } ?>
                <?php echo $text3 ?><br>
                Goals Setting: <?php foreach ($goalsetting->result() as $value) { ?>
                    <strong><?php echo $value->countGoalSettting ?></strong>,
                <?php } ?><br>
                Stress Management: <?php foreach ($stressmanagement->result() as $value) { ?>
                    <strong><?php echo $value->countStressManagement ?></strong>,
                <?php } ?><br>
                Time Management: <?php foreach ($timemanagement->result() as $value) { ?>
                    <strong><?php echo $value->countTimeManagement ?></strong>,
                <?php } ?><br>
                Motivation: <?php foreach ($motivation->result() as $value) { ?>
                    <strong><?php echo $value->countMotivation ?></strong>,
                <?php } ?><br>
                Study Strategy: <?php foreach ($studystrategy->result() as $value) { ?>
                    <strong><?php echo $value->countStudyStrategy ?></strong>,
                <?php } ?><br>
                Tips for Exams and Tests: <?php foreach ($tipsforexams->result() as $value) { ?>
                    <strong><?php echo $value->countTipsforExams ?></strong>
                <?php } ?><br>
            </div>
        </div>
    </div></div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
