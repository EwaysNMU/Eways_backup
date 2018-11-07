
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
            <li class="breadcrumb-item active">Detail</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-briefcase"></i> Resources</div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input readonly type="text" value="<?php echo $meg1 ?>" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="resources">Type of resources:</label>
                                            <input readonly type="text" value="<?php echo $meg2 ?>" class="form-control" name="type">
                                        </div>
                                        <?php if($meg2 != "Web Address"): ?>
                                        <div id="file" class="form-group resp-container">
                                       <a href="<?php echo base_url() ?>uploads/files/<?php echo $this->input->get('url') ?>" target="blank_"> Click to view</a> 
                                        </div>
                                        <?php else: ?>
                                        <div id="url" class="form-group">
                                            <label for="web_url">Web Address:</label>
                                            <input readonly type="text" value="<?php echo $this->input->get('url') ?>" class="form-control" name="url">
                                            <a href="<?php echo $this->input->get('url') ?>" target="blank_"> Click to view</a> 
                                        </div>
                                        <?php endif ?>
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










































































































































