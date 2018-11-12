// Ajax post
$(document).ready(function () {
    $(".submit").click(function (event) {
        event.preventDefault();
        var comment_post = $("textarea#description").val();
        if (comment_post === "")
        {
            jQuery("div#value").show();
            jQuery("div#value").html(comment_post + "The description field is required");
            return false;
        } else {


            jQuery.ajax({
                alert: "Yes",
                type: "POST",
                url: "http://sict-iis.nmmu.ac.za/eways/index.php/goals_note",
                dataType: 'json',
                data: {description: comment_post},
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
