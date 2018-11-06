
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
            <li class="breadcrumb-item active">Edit Resources</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-briefcase"></i> Edit Resources</div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo site_url() ?>/admin/edit_resources" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" value="<?php echo $meg2?>" required class="form-control" name="title">
                            <?php echo form_error('title'); ?>
                        </div>
                        <div class="form-group">
                            <label for="resources">Type of resources:</label>
                            <select required id="type" required class="form-control" name="type">
                                <?php if($meg3 == "Web Url"):?>
                                <option value="Web Url">Web Url</option>
                                <?php elseif($meg3 == "PDF"):?>
                                <option value="PDF">PDF</option>
                                <option value="Photo">Photo</option>
                                <?php elseif($meg3 == "Photo"):?>
                                <option value="Photo">Photo</option>
                                <option value="PDF">PDF</option>
                                <?php endif?>
                            </select>
                            <?php echo form_error('type'); ?>
                        </div>
                                            <?php if($meg3 != "Web Url"):?>
                        <div id="file" class="form-group type">
                            <label for="file">File:</label>
                            <input accept=".jpeg, .jpg, .jpe, .jfif, .jif,.png,.pdf,image/*" type="file" class="form-control" name="file">
                            <?php echo form_error('file'); ?>
                        </div>
                                            <?php else:?>
                        <div id="url" class="form-group type">
                            <label for="web_url">Web Url:</label>
                            <input type="text" value="<?php echo $this->input->get('url');?>" placeholder="e.g. http://www.google.com" title="Include http://" class="form-control" name="web_url">
                            <?php echo form_error('web_url'); ?>
                        </div>
                                            <?php endif?>
                                            
                                <input hidden type="text" value="<?php echo $this->input->get('url')?>"name="db_url">
                                <input hidden type="text" value="<?php echo $meg1?>"name="id">
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






































































