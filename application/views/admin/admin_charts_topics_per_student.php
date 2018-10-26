
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
                                    data: [1, 1, 1, 1, 1, 1],
                                }]
                        },
                        // Configuration options go here
                        options: {}
                    });
                </script>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> Topics completed</div>
            <div class="card-body">
                <canvas id="barChart" width="100%" height="40%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById('barChart').getContext('2d');
                    var myBarChart = new Chart(ctx, {
                        type: 'bar',
                        data: [20, 10],
                        options: options
                    });
                </script>
            </div>
        </div>

        <form class="panel" action="<?php echo site_url() ?>/admin_charts_topics_per_student" method="POST">
            Student No:<input type="text" id="sname" pattern="[0-9]{9}" placeholder="e.g 212345678" name="sname" minlength="9" maxlength="9" required autofocus>

            From:<input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">

            To:<input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>">

            <input id="postBtn" type="submit" value="Search"><br><br>
        </form>

        <?php foreach ($goalsetting->result() as $value) { ?>
            <?php echo $value->firstName ?> <?php echo $value->lastName ?>
            <?php echo $value->countGoalSettting ?>
        <?php } ?>
    </div></div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
