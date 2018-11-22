$(document).ready(function () {
                    $('div#value').delay(5000).fadeOut(400);
                    jQuery("div#value").show();
                    if(localStorage.getItem("p_Success") === "Post Published!")
                    {
                    jQuery("div#value").html(localStorage.getItem("p_Success"));
                    localStorage.clear("p_Success");
                    }
                    else if(localStorage.getItem("p_deleted") === "Post Deleted!")
                    {
                    jQuery("div#value").html(localStorage.getItem("p_deleted"));
                    localStorage.clear("p_deleted");  
                    }
                    else if(localStorage.getItem("p_Updated") === "Post Updated!"){
                    jQuery("div#value").html(localStorage.getItem("p_Updated"));
                    localStorage.clear("p_Updated");
                }
                });
