
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Registered Students</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-align-justify"></i> Registered Students</div>
                                    <div class="card-body">
                                        <table id="example" class="display responsive nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Student No</th>
                                                    <th>Name</th>
                                                    <th>Faculty</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($notes->result() as $value) { ?>
                                                    <tr>
                                                        <td style="width: 20px"><?php echo $value->studentNo ?></td>
                                                        <td><?php echo $value->firstName . " " . $value->lastName ?></td>
                                                        <td><?php echo $value->faculty ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                    </div>
                </div><br>
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
                    "targets": [2],
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
