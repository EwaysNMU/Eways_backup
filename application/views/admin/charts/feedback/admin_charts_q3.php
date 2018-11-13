
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
            <li class="breadcrumb-item active">Question 3</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-bar-chart"></i> Feedback Question 3 </div>
            <div class="card-body">
                <div style="text-align: center">
                    <form class="" action="<?php echo site_url() ?>/admin_charts_q3" method="POST">
                        Topic: <select name="stopic">
                            <?php foreach ($topics->result() as $value) { ?>
                                <option value="<?php echo $value->topicID ?>"><?php echo $value->title ?></option>
                            <?php } ?>    
                        </select>&nbsp;

                        Student No: <input type="text" id="sname" pattern="[0-9]{9}" placeholder="e.g 212345678" name="sname" minlength="9" maxlength="9" value="<?php if (isset($_POST['sname'])) echo $_POST['sname']; ?>" required autofocus>&nbsp;

                        From: <input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">&nbsp;

                        To: <input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>"><br><br>

                        Graph: <select name="graph">
                            <?php foreach ($graphs->result() as $value) { ?>
                                <option value="<?php echo $value->graphID ?>"><?php echo $value->graphType ?></option>
                            <?php } ?>
                        </select>&nbsp;

                        <input id="postBtn" type="submit" value="Search">

                        <?php echo form_error('endDate'); ?><br><br>
                    </form><?php echo $text1 ?><br><br>

                    <?php foreach ($consistent->result() as $value) { ?>
                        <strong><?php echo $value->firstName, ' ', $value->lastName, ', ', $value->title ?></strong>
                    <?php } ?>
                </div>
                
                <canvas id="myChart" width="100%" height="40%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
<?php foreach ($consistent->result() as $value) { ?>
                        type: '<?php echo $value->graphType ?>',
<?php } ?>
                    data: {
                    labels: ["Very Consistent", "Consistent", "Inconsistent"],
                            datasets: [{
                            label: "How consistent was the course content with the objectives?",
                                    //borderColor: 'rgb(255, 255, 255)',
                                    data: [
<?php foreach ($veryConsistent->result() as $value) { ?>
    <?php echo $value->countVeryConsistent ?>,
<?php } ?>
<?php foreach ($consistent->result() as $value) { ?>
    <?php echo $value->countConsistent ?>,
<?php } ?>
<?php foreach ($inconsistent->result() as $value) { ?>
    <?php echo $value->countInconsistent ?>
<?php } ?>],
                                    backgroundColor: [
                                            "rgba(231, 76, 60,0.5)",
                                            "rgba(155, 89, 182,0.5)",
                                            "rgba(149, 165, 166,0.5)"
                                    ],
                                    borderColor: [
                                            "rgba(231, 76, 60,1)",
                                            "rgba(155, 89, 182,1)",
                                            "rgba(149, 165, 166,1)"
                                    ],
                                    borderWidth: 1
                            }]
                    },
                            // Configuration options go here
                            options: {maxBarThickness: .2}
                    });
                </script>
                <br><br><br>
                <?php echo $text2 ?>
                <?php foreach ($consistent->result() as $value) { ?>
                    <strong><?php echo $value->firstName ?> <?php echo $value->lastName ?></strong>
                <?php } ?>
                <?php echo $text3 ?><br>
                Very Consistent: <?php foreach ($veryConsistent->result() as $value) { ?>
                    <strong><?php echo $value->countVeryConsistent ?></strong>,
                <?php } ?><br>
                Consistent: <?php foreach ($consistent->result() as $value) { ?>
                    <strong><?php echo $value->countConsistent ?></strong>,
                <?php } ?><br>
                Inconsistent: <?php foreach ($inconsistent->result() as $value) { ?>
                    <strong><?php echo $value->countInconsistent ?></strong>
                <?php } ?><br>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
