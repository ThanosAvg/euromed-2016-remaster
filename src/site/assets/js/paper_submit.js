
$(document).ready(function(){
    // Check if user is logged in
    $("#paper-submit-form").submit(function(evt){
        evt.preventDefault();
        var file=document.forms["paper-submit-form"]["paper"].value;
        if(file==null || file==""){
            $("#submit-alert").html("<strong>Error!</strong>Please select a file before submitting").fadeIn(1).fadeOut(5000,0);;
            return false;
        }
        else{
            data = {};
            $.get(window.PUBLIC_ROOT + '/login/check', data, function(response){
                if(response === "true"){
                    console.log("Submitting");
                    $("#paper-submit-form").unbind('submit').submit()
                }
                else{
                    // Show login
                    $("#loginModal").modal("show");
                    return false;
                }
            });
        }
    });
});
