
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
            <li class="breadcrumb-item active">Question 4</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-bar-chart"></i> Feedback Question 4 </div>
            <div class="card-body">
                <div style="text-align: center">
                    <form class="" action="<?php echo site_url() ?>/admin_charts_q4" method="POST">
                        Topic: <select name="stopic">
                            <?php foreach ($topics->result() as $value) { ?>
                                <option value="<?php echo $value->topicID ?>"><?php echo $value->title ?></option>
                            <?php } ?>    
                        </select>

                        Student No: <input type="text" id="sname" pattern="[0-9]{9}" placeholder="e.g 212345678" name="sname" minlength="9" maxlength="9" value="<?php if (isset($_POST['sname'])) echo $_POST['sname']; ?>" required autofocus>

                        From: <input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">

                        To: <input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>"><br><br>

                        <input id="postBtn" type="submit" value="Search"><br><br>

                        <?php echo form_error('endDate'); ?>
                    </form>

                    <?php foreach ($rating1->result() as $value) { ?>
                        <strong><?php echo $value->firstName ?> <?php echo $value->lastName ?>, <?php echo $value->title ?></strong>
                    <?php } ?>

                </div>
                <canvas id="myChart" width="100%" height="40%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                    type: 'bar',
                            data: {
                            labels: ["Rating: 1", "Rating: 2", "Rating: 3", "Rating: 4", "Rating: 5"],
                                    datasets: [{
                                    label: "Rate your confidence level for completing the knowledge or skill presented?",
                                            //borderColor: 'rgb(255, 255, 255)',
                                            data: [
<?php foreach ($rating1->result() as $value) { ?>
    <?php echo $value->rate1 ?>,
<?php } ?>
<?php foreach ($rating2->result() as $value) { ?>
    <?php echo $value->rate2 ?>,
<?php } ?>
<?php foreach ($rating3->result() as $value) { ?>
    <?php echo $value->rate3 ?>,
<?php } ?>
<?php foreach ($rating4->result() as $value) { ?>
    <?php echo $value->rate4 ?>,
<?php } ?>
<?php foreach ($rating5->result() as $value) { ?>
    <?php echo $value->rate5 ?>
<?php } ?>],
                                            backgroundColor: [
                                                    "rgba(100,150,250,0.5)",
                                                    "rgba(150,150,200,0.5)",
                                                    "rgba(200,150,150,0.5)",
                                                    "rgba(250,150,100,0.5)",
                                                    "rgba(300,150,50,0.5)"
                                            ],
                                            borderColor: [
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
                            options: {maxBarThickness: .2}
                    });
                </script>
            </div>
        </div></div>
</div></div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
