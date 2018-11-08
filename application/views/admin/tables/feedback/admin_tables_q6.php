
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
            <li class="breadcrumb-item active">Question 6</li>
        </ol>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-bar-chart"></i> Feedback Question 6 </div>
            <div class="card-body">
                <div style="text-align: center">
                    <form class="" action="<?php echo site_url() ?>/admin_tables_q6" method="POST">
                        Topic: <select name="stopic">
                            <?php foreach ($topics->result() as $value) { ?>
                                <option value="<?php echo $value->topicID ?>"><?php echo $value->title ?></option>
                            <?php } ?>    
                        </select>&nbsp;

                        Student No: <input type="text" id="sname" pattern="[0-9]{9}" placeholder="e.g 212345678" name="sname" minlength="9" maxlength="9" value="<?php if (isset($_POST['sname'])) echo $_POST['sname']; ?>" required autofocus>&nbsp;

                        From: <input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">&nbsp;

                        To: <input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>"><br><br>

                        <select hidden name="graph">
                            <?php foreach ($graphs->result() as $value) { ?>
                                <option value="<?php echo $value->graphID ?>"><?php echo $value->graphType ?></option>
                            <?php } ?>
                        </select>&nbsp;

                        <input id="postBtn" type="submit" value="Search"><br><br>

                        <?php echo form_error('endDate'); ?>
                    </form>

                    <?php foreach ($yes->result() as $value) { ?>
                        <strong><?php echo $value->firstName, ' ', $value->lastName, ', ', $value->title ?></strong>
                    <?php } ?>
                </div>
                <br>

                <table id="example" class="display responsive nowrap" style="width:100%">
                    <thead>
                        <tr style="text-align: center">
                            <th colspan="2">The course (or section) provided the opportunity to practice the skills required in the course.</th>
                        </tr>
                        <tr>
                            <th>Response</th>
                            <th>Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 20px">Yes</td>
                            <?php foreach ($yes->result() as $value) { ?>
                                <td><?php echo $value->countYes ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Not At All</td>
                            <?php foreach ($no->result() as $value) { ?>
                                <td><?php echo $value->countNo ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Somehow</td>
                            <?php foreach ($somehow->result() as $value) { ?>
                                <td><?php echo $value->countSomehow ?></td>
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