<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<br><br><br><br><br><br><div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4> Resources</h4></div>
                <div style="height:500px;overflow-x:auto;" class="card-body">
                    <table id="example" class="display responsive nowrap" style="width:100% ">
                            <th style="width:40%">Title</th>
                            <th></th>
                        <tbody>
                            <?php foreach ($info->result() as $value) { ?>
                                <tr>
                                    <td style="text-align: left"><?php echo ucfirst($value->title); ?></td>
                                    <?php if ($value->type == "Photo" || $value->type == "PDF"): ?>
                                        <td style="text-align: left"><a href="<?php echo base_url(); ?>/uploads/files<?php echo "/" . $value->file_web_url ?>" download target="blank_">Download <i class="fa fa-download" aria-hidden="true"></i></a></td>
                                    <?php else: ?>
                                        <td style="text-align: left"><a href="<?php echo $value->file_web_url ?>" target="blank_">Visit Link</a></td>
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

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "columnDefs": [
            {
                "targets": [2],
                "visible": true,
                "searchable": false
            }
        ],
        responsive: true
    } );
} );
</script>
