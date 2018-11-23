// Ajax post
$(document).ready(function () {
    $(".submit").click(function (event) {
        event.preventDefault();
        var comment_post = $("textarea#description").val();
        var title_post = $("input#title").val();
        var dataString = 'description='+ comment_post + '&title='+ title_post;
        if (comment_post === "" && title_post === "")
        {
             alert("A title and body is required");
            return false;
        }
        else if(comment_post === "")
        {
            alert("A body is required");
            return false;
        }
        else if(title_post === ""){
            alert("A title is required");
            return false;
        }
        else {
            jQuery.ajax({
                type: "POST",
                url: "http://sict-iis.nmmu.ac.za/eways/index.php/chat/discussion/post",
                dataType: 'json',
                data: dataString,
                cache: false,
                success: function (res) {
                    if (res)
                    {
                        window.location.replace("http://sict-iis.nmmu.ac.za/eways/index.php/community/user/post");
                        var getInput = "Post Published!";
                        localStorage.setItem("p_Success",getInput); 
                    } else {
                        jQuery("div#value").show();
                        jQuery("div#value").html(res.error);
                    }
                }

            });
        }
    });
});
