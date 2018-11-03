
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
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Resources">
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
            <li class="breadcrumb-item active">Charts</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card text-white bg-primary o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-line-chart"></i>
                                        </div>
                                        <div class="text-value"></div>
                                        <br>
                                        <div>Topics Completed</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_charts_completed_topics">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card text-white bg-success o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-group"></i>
                                        </div>
                                        <div class="text-value"></div>
                                        <br>
                                        <div>Topics completed per student</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_charts_topics_per_student">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card text-white bg-warning o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-comments"></i>
                                        </div>
                                        <div class="text-value"></div>
                                        <br>
                                        <div>Q1</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_charts_q1">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card text-white bg-danger o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-check-circle"></i>
                                        </div>
                                        <div class="text-value"></div>
                                        <br>
                                        <div>Q2</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_charts_q2">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </div>
        <!-- /.row-->
        <!-- /.row-->

        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card text-white bg-secondary o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-line-chart"></i>
                                        </div>
                                        <div class="text-value"></div>
                                        <br>
                                        <div>Q3</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_charts_q3">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card text-white bg-info o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-group"></i>
                                        </div>
                                        <div class="text-value"></div>
                                        <br>
                                        <div>Q4</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_charts_q4">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card text-white bg-primary o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-comments"></i>
                                        </div>
                                        <div class="text-value"></div>
                                        <br>
                                        <div>Q5</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_charts_q5">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card text-white bg-success o-hidden h-100">
                                    <div class="card-body">
                                        <div class="card-body-icon">
                                            <i class="fa fa-fw fa-check-circle"></i>
                                        </div>
                                        <div class="text-value"></div>
                                        <br>
                                        <div>Q6</div>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_charts_q6">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </div>
        <!-- /.row-->
        <!-- /.row-->
    </div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
