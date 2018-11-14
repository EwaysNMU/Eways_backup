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
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
<br><br>
<div style="margin-bottom: 400px" class="container">

      <!-- Page Heading -->
      <h4  align="center" class="my-4">
          <p id="chat-title">List of Discussions </p>
          <a id="qstBTN" href="#" onclick="myFunction()" class="btn pull-right btn-info" style="margin-right: 95px">Create Post</a>
      </h4>
<!--<p style="margin-bottom:2px"><a href="<?php echo site_url() ?>/community/time_management/How">Test</a></p>-->
      <div class="row">
          <div id="div-media" class="col-lg-10 col-sm-10 portfolio-item"><br>
              <div style="display:none" id="myDIV">
                  This is my DIV element.
              </div>
              <?php foreach ($allChat->result() as $value) { ?>
              <p style="margin-bottom:2px">
                  <a href="<?php echo site_url() ?>/community/<?php echo $value->title?>"><?php echo $value->title?></a><br>
                  <i class="badge" style="color:white; background-color: #103A5C; height: 20px">views: <?php echo $value->No_views?></i> &nbsp;&nbsp;&nbsp;&nbsp; 
                  <i class="badge" style="color:#323232; background-color: #A9DFBF; height: 20px">status: <?php echo $value->status?></i> &nbsp;&nbsp;&nbsp;&nbsp;
                  <i class="badge" style="color:white; background-color: #0A2131; height: 20px">date: <?php $d_t = new DateTime($value->date_time); echo DATE_FORMAT($d_t, 'd-M-Y').DATE_FORMAT($d_t, ' @g:i A'); ?></i> 
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <?php foreach ($student->result() as $value1) { ?>
                  <?php if($value->studentID == $value1->studentID):?>
                  <i>posted by: </i><small><?php echo $value1->firstName." ".$value1->lastName?></small>
                  <?php endif?>
                  <?php } ?> 
              </p>
              
              <hr>
              <?php } ?> 
              
        </div>
      </div>
      </div>
