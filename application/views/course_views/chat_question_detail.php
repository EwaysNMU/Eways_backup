
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script>
setInterval(  
function()  
{  
$('#links').load('<?php echo site_url() ?>/chat/time_management/table');  
}, 3000);
</script>
<br><br>
<div style="margin-bottom: 400px" class="container">

    <!-- Page Heading -->
    <h4 align="center" class="my-4">
        How do i manage my time effectively?
    </h4>
    <a href="<?php echo site_url() ?>/chat">Chat</a>&nbsp;&nbsp;/&nbsp;
    <a href="<?php echo site_url() ?>/chat/time_management">Time Management</a><hr>
    <div class="row">
        <div class="col-lg-8 col-sm-6 portfolio-item">
            <p>
                Make sure you’re engaging in activities that support your business goals, both short- and long-term. 
                Everything else is a potential time-waster. Your daily plan should revolve around working on
                tasks and activities that directly relate to generating income and growing your business.
            </p>
            <div class="alert alert-danger print-error-msg" style="display:none"></div>
            <form name="submit">
                <textarea type="text" id="comment" name="comment" style="margin-bottom: 10px; resize: none" rows="4" cols="50" class="form-control" placeholder="enter your chat" autofocus></textarea>
                <input name="submit" type="submit" value="send" class="btn-submit pull-right submit">
            </form>

            <br><br>
            <div id='value' style="color: green">
            </div>
            <div id="links">
                <?php $this->load->view('course_views/chat_table');?>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">

    // Ajax post
    $(document).ready(function () {
        
//                         $("div#links").load(location.href + " div#links");
        $(".submit").click(function(event) {
            event.preventDefault();
            var comment_post = $("textarea#comment").val();
            if(comment_post ==="")
            {
                jQuery("div#value").show();
                jQuery("div#value").html(comment_post+"The comment field is required");
        return false;
            }
            jQuery.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>" + "/chat/time_management/post",
                dataType: 'json',
                data: {comment: comment_post},
                cache: false,
                success: function (res) {
                    if (res)
                    {
                        $('#comment').val("");
                        // Show Entered Value
                        jQuery("div#value").show();
                        $('div#value').delay(5000).fadeOut(400);
                        jQuery("div#value").html(res.comment_return);
//                         jQuery("tbody").append("<tr><td>"+comment_post+"</td></tr>");

                    } else {
                        jQuery("div#value").show();
                        jQuery("div#value").html(res.error);
                    }
                }
                  
            });
        });
    });
</script> 
<!-- Footer -->
<footer class="bottom">
    <section id="footer">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p>Nelson Mandela University</p>
                    <p class="h6">&copy <?php echo date("Y"); ?> All right Reserved.<a class="text-green ml-2" href="https://www.mandela.ac.za" target="_blank">Peer-Collaboration</a></p>

                </div>
            </div>	
        </div>
    </section>
</footer>
