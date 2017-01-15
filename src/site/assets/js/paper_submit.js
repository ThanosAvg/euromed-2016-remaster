
$(document).ready(function(){
    // Check if user is logged in
    $("#paper-submit-form").submit(function(){
        var file=document.forms["paper-submit-form"]["paper"].value;
        if(file==null || file==""){
            $("#submit-alert").html("<strong>Error!</strong>Please select a file before submitting").fadeIn(1).fadeOut(5000,0);;
            return false;
        }
        data = {};
        $.get(window.PUBLIC_ROOT + '/login/check', data, function(response){
            if(response === "true"){
                return true;
            }
            else{
                // Show login
                $("#loginModal").modal("show");
                return false;
            }
        });
    });
});