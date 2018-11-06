
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1>Admin Tables</h1><br>



                    <div class="container-fluid">
                        <div class="animated fadeIn">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <i class="fa fa-align-justify"></i> Registered Students</div>
                                        <div class="card-body">
                                            <table id="myTable" class="table table-responsive-sm table-bordered table-striped table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Student No</th>
                                                        <th>Last Name</th>
                                                        <th>First Name</th>
                                                        <th>Faculty</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <?php foreach ($notes->result() as $value) { ?>
                                                        <tr>
                                                            <td><?php echo $value->studentNo ?></td>
                                                            <td><?php echo $value->lastName ?></td>
                                                            <td><?php echo $value->firstName ?></td>
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
                    </div>



                </div>
            </div>
        </div>
    </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->

