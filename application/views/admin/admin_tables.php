
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="#">E-WAYS</a>
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

