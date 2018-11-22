
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
<body style="background-color: #E0E1E2">
<br><br>
<div style="margin-bottom: 400px;" class="container">

    <!-- Page Heading -->
    <h4  align="center" class="my-4">
        <p id="chat-title">Edit Post</p>
    </h4>
<!--    <p style="margin-bottom:2px"><a href="<?php echo site_url() ?>/community/time_management/How">Test</a></p>-->
    <div class="row">
        <div id="div-media" class="col-lg-10 col-sm-10 portfolio-item"><br>
            <div id="value" style="color: #4CAF50; align-content: center"></div>
            <div id="myDIV">
                <form id="myForm" name="submit_update">
                    <b><label>Title:</label></b>
                    <input hidden="true" id="chatID" name="chatID" type="text" value="<?php echo $this->input->get('id')?>">
                    <input id="title" name="title" type="text" class="form-control" autocomplete="No" autofocus="Yes" value="<?php echo $this->input->get('title')?>">
                    <b><label>Status:</label></b><br>
                    <?php if ($this->input->get('status') == "Open"): ?>
                        <label>
                            <input class="form-control" type="radio" id="status" name="status" value="Open" checked="true"> Open&nbsp;&nbsp;&nbsp;&nbsp;
                        </label>
                        <label>
                            <input class="form-control" type="radio" id="status" name="status" value="Closed"> Closed
                        </label>
                    <?php elseif ($this->input->get('status') == "Closed"): ?>
                        <label>
                            <input class="form-control" type="radio" id="status" name="status" value="Open"> Open&nbsp;&nbsp;&nbsp;&nbsp;
                        </label>
                        <label>
                            <input class="form-control" type="radio" id="status" name="status" value="Closed" checked="true">Closed
                        </label>
                    <?php endif ?>
                    <br>
                    <b><label>Body:</label></b>
                    <textarea id="description" name="description" style="margin-top: 1px; resize: none;color:black;" rows="4" cols="50" class="jqte-test jqte_editor editor jqte form-control" autofocus ><?php echo $this->input->get('body')?></textarea>
                    <input style="margin-bottom: 5px;margin-top: 5px" name="submit" value="Update" type="submit" class="btn-submit pull-right submit btn-info"><br><hr>
                </form>
            </div>

        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/text-editor.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>
<script src="<?php echo base_url() ?>assets/js/update_discussion.js"></script>
