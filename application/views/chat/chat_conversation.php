<!--<input  type="number" name="chatID" id="chatID" value="<?php echo $meg1 ?>">-->
<?php foreach ($get_chat->result() as $chat) { ?>
    <?php foreach ($student->result() as $value) { ?>

        <?php if ($value->studentID == $chat->studentID): ?>
            <div style="background-color:#FFF7E5;border-radius: 1%;padding-left: 20px;padding-top: 5px;padding-bottom: 5px; min-height: 50px">
                <?php echo $chat->comment; ?><br>
                <i><small><?php echo $value->firstName . " " . $value->lastName ?></small></i>
                <small style="margin-left: 30px" class="badge-light"><?php
                    $d_t = new DateTime($chat->date_time);
                    echo DATE_FORMAT($d_t, 'd-M-Y') . DATE_FORMAT($d_t, ' @g:i A');
                    ?></small>
            </div><br>


        <?php endif ?>
    <?php } ?>
<?php } 

