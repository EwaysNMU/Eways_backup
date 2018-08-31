<br><br><br><div class="container">
  <h3>Resources:</h3>           
  <table class="table table-hover">
    <thead>
      <tr>
          <th>Title</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($info->result() as $value) { ?>
            <tr>
                <td style="text-align: left"><?php echo ucfirst($value->title); ?></td>
                <?php if ($value->type == "Photo" || $value->type == "PDF" ): ?>
                    <td style="text-align: left"><a href="<?php echo base_url(); ?>/uploads/files<?php echo "/".$value->file_name ?>" download target="blank_">Download <i class="fa fa-download" aria-hidden="true"></i></a></td>
                <?php else: ?>
                    <td style="text-align: left"><a href="<?php echo $value->web_url ?>" target="blank_">Visit Link</a></td>
                <?php endif ?>
            </tr>
        <?php } ?>
    </tbody>
  </table>
</div><br><br><br>

