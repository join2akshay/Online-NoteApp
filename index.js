//Ajax call for Singup
//oncce singup form submit
$('#singupForm').submit(function(e){
    //prevent default processing
    e.preventDefault();
    //collect user data
    let data = $(this).serializeArray();
    console.log(data);
    //send them to singup.php using AJAX
    $.ajax({
        type: "post",
        url: "singup.php",
        data: data,
        success: function (data) {
            if(data)
            {
                $("#signupmessage").html(data);
            }
        },
        error: function () {
            $("#signupmessage").html("<div class='alert alert-danger'>there was an error with the ajax call. Please try again.</div>");
            
        }
    });
});