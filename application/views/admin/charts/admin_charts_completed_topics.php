
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
            <li class="breadcrumb-item active">No. Topics Completed</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Topics completed</div>
            <div class="card-body">
                <div style="text-align: center">
                    <form class="" action="<?php echo site_url() ?>/admin_charts_completed_topics_date" method="POST">
                        From: <input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">&nbsp;

                        To: <input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>">

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
                    type: 'line',
                            data: {
                            labels: ["Goals Setting", "Stress Management", "Time Management", "Motivation", "Study Strategy", "Tips for Exams and Tests"],
                                    datasets: [{
                                    label: "No. Completed courses",
                                            borderColor: 'rgb(255, 99, 132)',
                                            data: [
<?php foreach ($ctopic1->result() as $value) { ?>
    <?php echo $value->topic1 ?>,
<?php } ?>
<?php foreach ($ctopic2->result() as $value) { ?>
    <?php echo $value->topic2 ?>,
<?php } ?>
<?php foreach ($ctopic3->result() as $value) { ?>
    <?php echo $value->topic3 ?>,
<?php } ?>
<?php foreach ($ctopic4->result() as $value) { ?>
    <?php echo $value->topic4 ?>,
<?php } ?>
<?php foreach ($ctopic5->result() as $value) { ?>
    <?php echo $value->topic5 ?>,
<?php } ?>
<?php foreach ($ctopic6->result() as $value) { ?>
    <?php echo $value->topic6 ?>
<?php } ?>],
                                    }]
                            },
                            // Configuration options go here
                            options: {}
                    });
                </script><br><br><br>

                <?php echo $text2 ?><br>
                Goals Setting: <?php foreach ($ctopic1->result() as $value) { ?>
                    <strong><?php echo $value->topic1 ?></strong>,
                <?php } ?><br>
                Stress Management: <?php foreach ($ctopic2->result() as $value) { ?>
                    <strong><?php echo $value->topic2 ?></strong>,
                <?php } ?><br>
                Time Management: <?php foreach ($ctopic3->result() as $value) { ?>
                    <strong><?php echo $value->topic3 ?></strong>,
                <?php } ?><br>
                Motivation: <?php foreach ($ctopic4->result() as $value) { ?>
                    <strong><?php echo $value->topic4 ?></strong>,
                <?php } ?><br>
                Study Strategy: <?php foreach ($ctopic5->result() as $value) { ?>
                    <strong><?php echo $value->topic5 ?></strong>,
                <?php } ?><br>
                Tips for Exams and Tests: <?php foreach ($ctopic6->result() as $value) { ?>
                <strong><?php echo $value->topic6 ?></strong>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->