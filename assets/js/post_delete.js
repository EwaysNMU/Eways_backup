function deletePost(a)
{
   var msj='Are you sure you want to delete this post?';
   if (!confirm(msj)) { 
      return false;
   } else {
     var chatID = a.id;
    jQuery.ajax({
                type: "POST",
                url: "http://sict-iis.nmmu.ac.za/eways/index.php/user/delete/post/" + chatID,
                dataType: 'json',
                cache:false,
                success: function (res) {
                    if (res)
                    {
                         window.location.replace("http://sict-iis.nmmu.ac.za/eways/index.php/community/user/post");
                        var getInput_delete = "Post Deleted!";
                        localStorage.setItem("p_deleted",getInput_delete);
                    }
                }

            });
   }
    
}

