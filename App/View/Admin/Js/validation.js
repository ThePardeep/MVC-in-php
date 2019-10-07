(function(){
    var Validate = document.getElementById("insert_form");
    
    Validate.onsubmit = ()=>{
    
        var PostData = {
        "post_title" : document.getElementById("Title").value,
        "post_Description" : document.getElementById("post_discription").value,
        "Post_Keywords" : document.getElementById("post_keywords").value,
        "Post_Body" : document.getElementById("post_body").value,
        "Post_Categories" : document.getElementById("post_categories").value
         };

  
    if (PostData["post_title"] !== "" && PostData["Post_Categories"] !=="" && PostData["Post_Keywords"] !== "" && PostData["post_Description"] !== "" && PostData["Post_Body"] !== "" ) {
        return true;
    }
    else {
        var Msg = "Enter Correct Details";
        var Class = "alert alert-danger"
        document.getElementById("msg").textContent = Msg;
        document.getElementById("msg").className = Class;

        return false;
    }
}

})();