
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
            <li class="breadcrumb-item active">Question 1</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-bar-chart"></i> Feedback Question 1</div>
            <div class="card-body">
                <canvas id="myChart" width="100%" height="40%"></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                    type: 'pie',
                            data: {
                            labels: ["Yes", "No", "Somehow"],
                                    datasets: [{
                                    label: "Was this topic helpful?",
                                            //borderColor: 'rgb(255, 255, 255)',
                                            data: [
<?php foreach ($yes->result() as $value) { ?>
    <?php echo $value->countYes ?>,
<?php } ?>
<?php foreach ($no->result() as $value) { ?>
    <?php echo $value->countNo ?>,
<?php } ?>
<?php foreach ($somehow->result() as $value) { ?>
    <?php echo $value->countSomehow ?>
<?php } ?>],
                                            backgroundColor: [
                                                    "rgba(50,150,300,0.5)",
                                                    "rgba(200,0,200,0.5)",
                                                    "rgba(300,150,50,0.5)"
                                            ],
                                            borderColor: [
                                                    "rgba(50,150,300,1)",
                                                    "rgba(200,0,200,1)",
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
        </div>
    </div></div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
