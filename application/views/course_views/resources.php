<br><br><br><div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4> Resources</h4></div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                            <th style="width:40%">Title</th>
                        <tbody>
                            <?php foreach ($info->result() as $value) { ?>
                                <tr>
                                    <td style="text-align: left"><?php echo ucfirst($value->title); ?></td>
                                    <?php if ($value->type == "Photo" || $value->type == "PDF"): ?>
                                        <td style="text-align: left"><a href="<?php echo base_url(); ?>/uploads/files<?php echo "/" . $value->file_name ?>" download target="blank_">Download <i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    <?php else: ?>
                                        <td style="text-align: left"><a href="<?php echo $value->web_url ?>" target="blank_">Visit Link</a></td>
                                    <?php endif ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
    <br><br><br>



