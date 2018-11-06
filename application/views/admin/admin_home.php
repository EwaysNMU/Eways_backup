
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
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
                                            <i class="fa fa-fw fa-user"></i>
                                        </div>
                                        <?php foreach ($notes->result() as $value) { ?>
                                            <div class="text-value"><?php echo $value->countRegisteredUser ?></div>
                                            <br>
                                            <div>Registered Students</div>
                                        <?php } ?>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="<?php echo site_url() ?>/admin_reg_user">
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
                                        <?php foreach ($home_count->result() as $home) { ?>
                                            <div class="text-value"><?php echo $home->countHome ?></div>
                                            <br>
                                            <div>Website visits per student</div>
                                        <?php } ?>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="#">
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
                                        <?php foreach ($completeTopic->result() as $value) { ?>
                                            <div class="text-value"><?php echo $value->countCompletedTopics ?></div>
                                            <br>
                                            <div>Students completed a topic</div>
                                        <?php } ?>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="#">
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
                                        <?php foreach ($completeCourse->result() as $value) { ?>
                                            <div class="text-value"><?php echo $value->countCompletedCourses ?></div>
                                            <br>
                                            <div>Full courses completed</div>
                                        <?php } ?>
                                    </div>
                                    <a class="card-footer text-white clearfix small z-1" href="#">
                                        <span class="float-left">View Details</span>
                                        <span class="float-right">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div><br><br>
                        <!-- /.row-->
                        <!-- /.row-->
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<br>
