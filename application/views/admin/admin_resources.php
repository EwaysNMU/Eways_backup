<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $.viewMap = {
            '': $([]),
            'PDF': $('#file'),
            'Web Url': $('#url'),
            'Photo': $('#file')
        };

        $('#type').change(function () {
            // hide all
            $.each($.viewMap, function () {
                this.hide();
            });
            // show current
            $.viewMap[$(this).val()].show();
        });
    });
</script>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">E-WAYS</a>
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
                    <i class="fa fa-calendar"></i>
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
            <li class="breadcrumb-item active">Resources</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1>Admin Resources</h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <form method="post" action="<?php echo site_url() ?>/add_resources" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" required class="form-control" name="title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="resources">Type of resources:</label>
                            <select id="type" required class="form-control" name="type" onchange="showHide(this)">
                                <option selected value="">--Select--</option>
                                <option value="PDF">PDF</option>
                                <option value="Web Url">Web Url</option>
                                <option value="Photo">Photo</option>
                            </select>
                            <?php echo form_error('type'); ?>
                        </div>
                        <div id="file" class="form-group type">
                            <label for="file">File:</label>
                            <input accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,.pdf,image/*" type="file" class="form-control" name="file">
                            <?php echo form_error('file'); ?>
                        </div>
                        <div id="url" class="form-group type">
                            <label for="web_url">Web Url:</label>
                            <input type="url" placeholder="e.g. http://www.google.com" pattern="https?://.+" title="Include http://" class="form-control" name="web_url">
                            <?php echo form_error('web_url'); ?>
                        </div>
                        <button name="upload" type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div><br><br><br><br><br>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

















