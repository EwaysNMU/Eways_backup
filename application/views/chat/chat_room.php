<style>
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .row, #div-media{
            margin: auto;
            min-width: 300px;
        }
        #qstBTN{
            float: left;
            margin-top: 3px;
            margin-left: 10px;
        }

    } 

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 500px) {
        .row, #div-media{
            margin: auto;
            min-width: 500px;
        }
        #qstBTN{
            float: left;
            margin-top: 3px;
            margin-left: 20px;
        }
        #chat-title{
            margin-top: 30px;
            margin-right:150px;
        }
    } 

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .row, #div-media{
            margin: auto;
            min-width: 668px;
        }
        #chat-title{
            margin-top: 50px;
            margin-right: 320px;
        }
        #qstBTN{
            margin-left: 20px;
        }
    } 
    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        #qstBTN{
            position:absolute; 
            margin-top: 1px;
            margin-left: 265px;
        }
        #chat-title{
            margin: auto;
        }
    } 

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        #qstBTN{
            position:absolute; 
            margin-top: 1px;
            margin-left: 340px;
        }
        #chat-title{
            margin: auto;
        }
    }
</style>
<script>
    function myFunction() {
        var x = document.getElementById("myDIV");
        if (x.style.display === "none"|| x.style.display === "") {
            jQuery("hr#line-hide").hide();
            x.style.display = "block";
        } else {
            jQuery("hr#line-hide").show();
            x.style.display = "none";
        }
    }
</script>
<body style="background-color: #E0E1E2">
<br><br>
<div style="margin-bottom: 400px;" class="container">

    <!-- Page Heading -->
    <h4  align="center" class="my-4">
        <p id="chat-title">List of Discussions </p>
<!--        <a id="qstBTN" href="#" onclick="myFunction()" class="btn pull-right btn-info" style="margin-right: 95px">Create Post</a>-->
    </h4>
<!--    <p style="margin-bottom:2px"><a href="<?php echo site_url() ?>/community/time_management/How">Test</a></p>-->
    <div class="row">
        <div id="div-media" class="col-lg-10 col-sm-10 portfolio-item"><br>
            <h6><a href="#" style="color: #D96951;" onclick="myFunction()">Create New Post</a></h6>
            <div id="value" style="color: #4CAF50"></div>
            <div style="display:none" id="myDIV">
                <form id="myForm" name="submit_publish">
                    <b><label>Title:</label></b>
                    <input id="title" name="title" type="text" class="form-control" autocomplete="No" autofocus="Yes">
                    <b><label>Body:</label></b>
                    <textarea id="description" name="description" style="margin-top: 1px; resize: none;color:black;" rows="4" cols="50" class="jqte-test jqte_editor editor jqte form-control" autofocus ></textarea>
                    <input style="margin-bottom: 5px;margin-top: 5px" name="submit" value="Publish" type="submit" class="btn-submit pull-right submit btn-info"><br><hr>
                </form>
            </div>
            <?php if($allChat->result() != NULL):?>
            <?php foreach ($allChat->result() as $value) { ?>
                <p id="chat-list">
                    <a href="<?php echo site_url() ?>/discussion/<?php
                    echo
                    $value->chatID . "/" . $value->studentID . "/" . $value->date_time . "/" . $value->No_views . "/" . $value->status . "/?title=" . urlencode($value->title) . "&body=" . urlencode($value->description). "&status=" . urlencode($value->status)
                    ?>">
    <?php echo $value->title ?>
                    </a><br>
                    <i class="badge" style="color:white; background-color: #103A5C; height: 20px">views: <?php echo $value->No_views ?></i> &nbsp;&nbsp;&nbsp;&nbsp; 
                    <i class="badge" style="color:#323232; background-color: #A9DFBF; height: 20px">status: <?php echo $value->status ?></i> &nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="badge" style="color:white; background-color: #0A2131; height: 20px">date: <?php $d_t = new DateTime($value->date_time);
    echo DATE_FORMAT($d_t, 'd-M-Y') . DATE_FORMAT($d_t, ' @g:i A');
    ?></i>
    <?php foreach ($student->result() as $value1) { ?>
        <?php if ($value1->studentID == $value->studentID): ?>
                            <img src="<?php echo base_url(); ?>uploads/user_profiles/<?php echo $value1->photo ?>" alt="user picture" style="width:40px; height:40px;border-radius: 5%;float: right;" /><br>
                            <i>posted by: </i><small><?php echo $value1->firstName . " " . $value1->lastName ?></small>

        <?php endif ?>
    <?php } ?> 
                </p>

                <hr>
<?php } ?> 
                <?php else:?>
                <hr id="line-hide"><br><br><br>
                <p align="center">There is no post to display</p>
            <?php endif?>

        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/text-editor.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>
<script src="<?php echo base_url() ?>assets/js/publish_discussion.js"></script>
