

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
              <form action="<?php echo site_url() ?>/chat/time_management/post" mehtod="post">
              <textarea name="comment" style="margin-bottom: 10px; resize: none" rows="4" cols="50" class="form-control" placeholder="enter your chat" autofocus> </textarea>
              <input type="submit" class="btn-submit pull-right">
              </form></div>
      </div>
      </div>
<script type="text/javascript">
$(document).ready(function() {
	    $(".btn-submit").click(function(e){
	    	e.preventDefault();
	    	var comment = $("textarea[name='comment']").val();


	        $.ajax({
	            url: "<?php echo site_url() ?>/chat/time_management/post",
	            type:'POST',
	            dataType: "json",
	            data: {comment:comment},
	            success: function(data) {
	                if($.isEmptyObject(data.error)){
	                	$(".print-error-msg").css('display','none');
	                	alert(data.success);
	                }else{
						$(".print-error-msg").css('display','block');
	                	$(".print-error-msg").html(data.error);
	                }
	            }
	        });
	    }); 
	});
</script>
