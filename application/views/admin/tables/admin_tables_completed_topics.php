
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
            <li class="breadcrumb-item active">Topics Completed</li>
        </ol>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i> No. Topics completed</div>
            <div class="card-body">
                <div style="text-align: center">
                    <form class="" action="<?php echo site_url() ?>/admin_tables_completed_topics_date" method="POST">
                        From: <input type="date" id="sdate" name="startDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['startDate'])) echo $_POST['startDate']; ?>">&nbsp;

                        To: <input type="date" id="sdate" name="endDate" max="<?php echo date('Y-m-d') ?>" required value="<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>">

                        <input id="postBtn" type="submit" value="Search"><br><br>

                        <?php echo form_error('endDate'); ?>
                    </form>
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
                            <td style="width: 20px">Goal-Setting</td>
                            <?php foreach ($ctopic1->result() as $value) { ?>
                                <td><?php echo $value->topic1 ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Time Management</td>
                            <?php foreach ($ctopic2->result() as $value) { ?>
                                <td><?php echo $value->topic2 ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Study Strategies</td>
                            <?php foreach ($ctopic3->result() as $value) { ?>
                                <td><?php echo $value->topic3 ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Concentration & Memorising</td>
                            <?php foreach ($ctopic4->result() as $value) { ?>
                                <td><?php echo $value->topic4 ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Assignment Writing</td>
                            <?php foreach ($ctopic5->result() as $value) { ?>
                                <td><?php echo $value->topic5 ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Reference Correctly</td>
                            <?php foreach ($ctopic6->result() as $value) { ?>
                                <td><?php echo $value->topic6 ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Note taking & Summarising</td>
                            <?php foreach ($ctopic7->result() as $value) { ?>
                                <td><?php echo $value->topic7 ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Making better presentations</td>
                            <?php foreach ($ctopic8->result() as $value) { ?>
                                <td><?php echo $value->topic8 ?></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td style="width: 20px">Tips for Exams</td>
                            <?php foreach ($ctopic9->result() as $value) { ?>
                                <td><?php echo $value->topic9 ?></td>
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