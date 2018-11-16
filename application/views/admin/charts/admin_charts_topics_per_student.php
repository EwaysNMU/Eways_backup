<style>
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        #qstBTN{
            float: left;
            margin-top: 3px;
            margin-left: 10px;
        }
        #myDIV{
            display:none;
        }

    } 

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 500px) {
        #qstBTN{
            float: left;
            margin-top: 3px;
            margin-left: 20px;
        }

        #myDIV{
            display:none;
        }
    } 

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        #qstBTN{
            margin-left: 20px;
        }
        #myDIV{
            display:none;
        }
    } 
    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        #qstBT1, #qstBT2{
            position:absolute; 
            margin-top: 1px;
            margin-left: 265px;
        }

        #myDIV1, #myDIV2{
            display:none;
        }
    } 

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        #qstBT1, #qstBT2{
            float: left;
        }

        #myDIV1, #myDIV2{
            display:none; width:600px;
        }
    }
</style>
<script>
    function myFunction1() {
    var a = document.getElementById("myDIV1");
    if (a.style.display === "none") {
    a.style.display = "block";
    } else {
    a.style.display = "none";
    }
    }

    function myFunction2() {
    var b = document.getElementById("myDIV2");
    if (b.style.display === "none") {
    b.style.display = "block";
    } else {
    B.style.display = "none";
    }
    }

    function myFunction3() {
    var c = document.getElementById("myDIV");
    if (c.style.display === "none") {
    c.style.display = "block";
    } else {
    c.style.display = "none";
    }
    }

    function myFunction4() {
    var d = document.getElementById("myDIV");
    if (d.style.display === "none") {
    d.style.display = "block";
    } else {
    d.style.display = "none";
    }
    }

    function myFunction5() {
    var e = document.getElementById("myDIV");
    if (e.style.display === "none") {
    e.style.display = "block";
    } else {
    e.style.display = "none";
    }
    }

    function myFunction6() {
    var f = document.getElementById("myDIV");
    if (f.style.display === "none") {
    f.style.display = "block";
    } else {
    f.style.display = "none";
    }
    }

    function myFunction7() {
    var g = document.getElementById("myDIV");
    if (g.style.display === "none") {
    g.style.display = "block";
    } else {
    g.style.display = "none";
    }
    }

    function myFunction8() {
    var h = document.getElementById("myDIV");
    if (h.style.display === "none") {
    h.style.display = "block";
    } else {
    h.style.display = "none";
    }
    }

    function myFunction9() {
    var i = document.getElementById("myDIV");
    if (i.style.display === "none") {
    i.style.display = "block";
    } else {
    i.style.display = "none";
    }
    }
</script>

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
    labels: ["Goals Setting", "Time Management", "Study Strategies", "Concentration & Memorising", "Assignment Writing", "Reference Correctly", "Note taking & Summarising", "Making better presentations", "Tips for Exams"],
            datasets: [{
            label: "No. Completed topics",
                    borderColor: 'rgb(255, 255, 255)',
                    data: [
<?php foreach ($goalsetting->result() as $value) { ?>
    <?php echo $value->countGoalSettting ?>,
<?php } ?>
<?php foreach ($timemanagement->result() as $value) { ?>
    <?php echo $value->countTimeManagement ?>,
<?php } ?>
<?php foreach ($studystrategies->result() as $value) { ?>
    <?php echo $value->countStudyStrategies ?>,
<?php } ?>
<?php foreach ($concentration->result() as $value) { ?>
    <?php echo $value->countConcentration ?>,
<?php } ?>
<?php foreach ($assignment->result() as $value) { ?>
    <?php echo $value->countAssignment ?>,
<?php } ?>
<?php foreach ($reference->result() as $value) { ?>
    <?php echo $value->countReference ?>,
<?php } ?>
<?php foreach ($notetaking->result() as $value) { ?>
    <?php echo $value->countNotetaking ?>,
<?php } ?>
<?php foreach ($presentation->result() as $value) { ?>
    <?php echo $value->countPresentation ?>,
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

                Goal-Setting: <?php foreach ($goalsetting->result() as $value) { ?>
                    <strong><?php echo $value->countGoalSettting ?></strong>,
                <?php } ?><br>
                <small><a id="qstBT1" href="#" onclick="myFunction1()">View Comments</a></small><br>
                <div style="" id="myDIV1">
                    <?php foreach ($topic1->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>

                Time Management: <?php foreach ($timemanagement->result() as $value) { ?>
                    <strong><?php echo $value->countTimeManagement ?></strong>,
                <?php } ?><br>
                <small><a id="qstBT2" href="#" onclick="myFunction2()">View Comments</a></small><br>
                <div style="" id="myDIV2">
                    <?php foreach ($topic2->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>

                Study Strategies: <?php foreach ($studystrategies->result() as $value) { ?>
                    <strong><?php echo $value->countStudyStrategies ?></strong>,
                <?php } ?><br>
                <small><a id="qstBT" href="#" onclick="myFunction3()">View Comments</a></small><br>
                <div style="" id="myDIV">
                    <?php foreach ($topic3->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>

                Concentration & Memorising: <?php foreach ($concentration->result() as $value) { ?>
                    <strong><?php echo $value->countConcentration ?></strong>,
                <?php } ?><br>
                <small><a id="qstBT" href="#" onclick="myFunction4()">View Comments</a></small><br>
                <div style="" id="myDIV">
                    <?php foreach ($topic4->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>

                Assignment Writing: <?php foreach ($assignment->result() as $value) { ?>
                    <strong><?php echo $value->countAssignment ?></strong>,
                <?php } ?><br>
                <small><a id="qstBT" href="#" onclick="myFunction5()">View Comments</a></small><br>
                <div style="" id="myDIV">
                    <?php foreach ($topic5->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>

                Reference Correctly: <?php foreach ($reference->result() as $value) { ?>
                    <strong><?php echo $value->countReference ?></strong>,
                <?php } ?><br>
                <small><a id="qstBT" href="#" onclick="myFunction6()">View Comments</a></small><br>
                <div style="" id="myDIV">
                    <?php foreach ($topic6->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>

                Note taking & Summarising: <?php foreach ($notetaking->result() as $value) { ?>
                    <strong><?php echo $value->countNotetaking ?></strong>,
                <?php } ?><br>
                <small><a id="qstBT" href="#" onclick="myFunction7()">View Comments</a></small><br>
                <div style="" id="myDIV">
                    <?php foreach ($topic7->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>

                Making better presentations: <?php foreach ($presentation->result() as $value) { ?>
                    <strong><?php echo $value->countPresentation ?></strong>,
                <?php } ?><br>
                <small><a id="qstBT" href="#" onclick="myFunction8()">View Comments</a></small><br>
                <div style="" id="myDIV">
                    <?php foreach ($topic8->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>

                Tips for Exams: <?php foreach ($tipsforexams->result() as $value) { ?>
                    <strong><?php echo $value->countTipsforExams ?></strong>
                <?php } ?><br>
                <small><a id="qstBT" href="#" onclick="myFunction9()">View Comments</a></small><br>
                <div style="" id="myDIV">
                    <?php foreach ($topic9->result() as $value) { ?>
                        <?php echo $value->comment ?><br><br>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
