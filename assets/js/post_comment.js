// Ajax post
$(document).ready(function () {
    $(".submit").click(function (event) {
        event.preventDefault();
        var comment_post = $("textarea#comment").val();
        var chat_id = $("input#chatID").val();
        var dataString = 'comment='+ comment_post + '&chatID='+ chat_id;
        if (comment_post === "")
        {
            jQuery("div#value").show();
            jQuery("div#value").html(comment_post + "This field is required or press the space bar");
            return false;
        } else {


            jQuery.ajax({
                alert: "Yes",
                type: "POST",
                url: "http://sict-iis.nmmu.ac.za/eways/index.php/chat/post_comment",
                dataType: 'json',
                data: dataString,
                cache: false,
                success: function (res) {
                    if (res)
                    {
                        // Show Entered Value
                        jQuery("div#value").show();
                        $('div#value').delay(5000).fadeOut(400);
                        jQuery("div#value").html(res.comment_return);
                        jQuery("textarea#description").html(res.comment_post);
                    } else {
                        jQuery("div#value").show();
                        jQuery("div#value").html(res.error);
                    }
                }

            });
        }
    });
});
