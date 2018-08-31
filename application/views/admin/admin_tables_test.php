<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>EWAYS - Admin</title>
        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.html">EWAYS</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_home">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_charts">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Charts</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_tables">
                            <i class="fa fa-fw fa-table"></i>
                            <span class="nav-link-text">Tables</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_events">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span class="nav-link-text">Events</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Events">
                        <a class="nav-link" href="<?php echo site_url() ?>/admin_resources">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <span class="nav-link-text">Resources</span>
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
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
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-align-justify"></i> Simple Table</div>
                                            <div class="card-body">
                                                <table class="table table-responsive-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Date registered</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Samppa Nori</td>
                                                            <td>2012/01/01</td>
                                                            <td>Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estavan Lykos</td>
                                                            <td>2012/02/01</td>
                                                            <td>Staff</td>
                                                            <td>
                                                                <span class="badge badge-danger">Banned</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chetan Mohamed</td>
                                                            <td>2012/02/01</td>
                                                            <td>Admin</td>
                                                            <td>
                                                                <span class="badge badge-secondary">Inactive</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Derick Maximinus</td>
                                                            <td>2012/03/01</td>
                                                            <td>Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Friderik Dávid</td>
                                                            <td>2012/01/21</td>
                                                            <td>Staff</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Prev</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-align-justify"></i>Registered Students</div>
                                            <div class="card-body">
                                                <table class="table table-responsive-sm table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Student No</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Faculty</th>
                                                        </tr>
                                                    </thead>
                                                   
                                                   
                                                        <tbody>
                                                        	 <?php foreach ($notes->result() as $value) { ?>
                                                            <tr>
                                                                <td><?php echo $value->studentNo ?></td>
                                                                <td><?php echo $value->lastName ?></td>
                                                                <td><?php echo $value->firstName ?></td>
                                                                <td>
                                                                    <span class="badge badge-success">Active</span>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    
                                                </table>
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Prev</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-align-justify"></i> Condensed Table</div>
                                            <div class="card-body">
                                                <table class="table table-responsive-sm table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Date registered</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Carwyn Fachtna</td>
                                                            <td>2012/01/01</td>
                                                            <td>Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nehemiah Tatius</td>
                                                            <td>2012/02/01</td>
                                                            <td>Staff</td>
                                                            <td>
                                                                <span class="badge badge-danger">Banned</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ebbe Gemariah</td>
                                                            <td>2012/02/01</td>
                                                            <td>Admin</td>
                                                            <td>
                                                                <span class="badge badge-secondary">Inactive</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Eustorgios Amulius</td>
                                                            <td>2012/03/01</td>
                                                            <td>Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Leopold Gáspár</td>
                                                            <td>2012/01/21</td>
                                                            <td>Staff</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Prev</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-align-justify"></i> Bordered Table</div>
                                            <div class="card-body">
                                                <table class="table table-responsive-sm table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Date registered</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Pompeius René</td>
                                                            <td>2012/01/01</td>
                                                            <td>Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Paĉjo Jadon</td>
                                                            <td>2012/02/01</td>
                                                            <td>Staff</td>
                                                            <td>
                                                                <span class="badge badge-danger">Banned</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Micheal Mercurius</td>
                                                            <td>2012/02/01</td>
                                                            <td>Admin</td>
                                                            <td>
                                                                <span class="badge badge-secondary">Inactive</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ganesha Dubhghall</td>
                                                            <td>2012/03/01</td>
                                                            <td>Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hiroto Šimun</td>
                                                            <td>2012/01/21</td>
                                                            <td>Staff</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Prev</a>
                                                    </li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-align-justify"></i> Combined All Table</div>
                                            <div class="card-body">
                                                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Username</th>
                                                            <th>Date registered</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Vishnu Serghei</td>
                                                            <td>2012/01/01</td>
                                                            <td>Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Zbyněk Phoibos</td>
                                                            <td>2012/02/01</td>
                                                            <td>Staff</td>
                                                            <td>
                                                                <span class="badge badge-danger">Banned</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Einar Randall</td>
                                                            <td>2012/02/01</td>
                                                            <td>Admin</td>
                                                            <td>
                                                                <span class="badge badge-secondary">Inactive</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Félix Troels</td>
                                                            <td>2012/03/01</td>
                                                            <td>Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Aulus Agmundr</td>
                                                            <td>2012/01/21</td>
                                                            <td>Staff</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <nav>
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">Prev</a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">4</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">Next</a>
                                                        </li>
                                                    </ul>
                                                </nav>
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
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>© 2018 All right Reversed.Peer-Colaboration</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?php echo site_url() ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap core JavaScript-->
            <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>
        </div>
    </body>

</html>
