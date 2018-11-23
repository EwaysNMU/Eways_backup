<?php
defined('BASEPATH') or exit('No direct script access allowed');
$gender = array('Male', 'Female');

?>
<div class="container">
  <hr>
  <?php
    if (isset($error)) {
        echo "<div class='alert'>$error</div>";
    }
    ?>
  <?php $hidden = array('id' => $id); 
  $attributes = array('class' => 'col s12', 'id' => 'myform');
    echo form_open_multipart('c_upload/do_upload', $attributes,$hidden); ?>

  <div class="row">
    <div class="input-field col s4">
      <input  name="userfile" type="file" size="80">
    </div>
</div>
  <div class="modal-footer left">
  <a href="<?php echo base_url('c_search/s_patient_by'); ?>/<?php echo $id; ?>" class="waves-effect waves-light  red darken-4 btn"><i class="material-icons right">clear</i>Cancel</a>
        <button class="btn waves-effect waves-light green darken-4" type="submit" name="action">Submit
  <i class="material-icons right">send</i>
</button>
</div>
<?php echo form_close(); ?>

</div>