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
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url() ?>/admin_home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="<?php echo site_url() ?>/admin/resources">Resources</a>
            </li>
            <li class="breadcrumb-item active">Add Resources</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-briefcase"></i> Add Resources</div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo site_url() ?>/admin/add_resources" enctype="multipart/form-data">
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
                            <!-- /.col-->
                        </div>
                        <!-- /.row-->
                    </div>
                </div><br><br>
            </div>
        </div>
    </div>
</div>





























