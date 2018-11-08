
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_tables">Tables</a>
            </li>
            <li class="breadcrumb-item active">Topics Completed per student</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> No. Topics completed by student</div>
            <div class="card-body">
                <div style="text-align: center">
                    <form class="" action="<?php echo site_url() ?>/admin_tables_student_validation" method="POST">
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
                <table id="example" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>No. Completed</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 20px">Goals Setting</td>
                            <?php foreach ($goalsetting->result() as $value) { ?>
                                <td><?php echo $value->countGoalSettting ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Stress Management</td>
                            <?php foreach ($stressmanagement->result() as $value) { ?>
                                <td><?php echo $value->countStressManagement ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Time Management</td>
                            <?php foreach ($timemanagement->result() as $value) { ?>
                                <td><?php echo $value->countTimeManagement ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Motivation</td>
                            <?php foreach ($motivation->result() as $value) { ?>
                                <td><?php echo $value->countMotivation ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Study Strategy</td>
                            <?php foreach ($studystrategy->result() as $value) { ?>
                                <td><?php echo $value->countStudyStrategy ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Tips for Exams and Tests</td>
                            <?php foreach ($tipsforexams->result() as $value) { ?>
                                <td><?php echo $value->countTipsforExams ?></td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "columnDefs": [
                {
                    "targets": [1],
                    "visible": true,
                    "searchable": false
                }
            ],
            responsive: true,
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'copy', 'csv', 'excel', 'pdf', 'colvis'
            ],
            "scrollX": true,
            "autoWidth": false,
            dom: 'Bfrtip',
            "lengthChange": true
        });
    });
</script>
