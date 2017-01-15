function renderAlert(type, message){
    var html =
        '<div class="alert alert-' + type + '" role="alert">' + message + '</div>';
    return html;
}

$(function(){
    var currentRequest;
    console.log(window.PUBLIC_ROOT);
    $("#login-form").submit(function(event){
        event.preventDefault();
        
        // If a request is still active abort it
        if (currentRequest){
            currentRequest.abort();
        }

        var $myForm = $(this);
        
        // Serialize form
        var formData = $myForm.serialize();

        // Disable sources of input while sending data
        $(this).find("input, button, select, textarea").prop("disabled", true);

        $.post(window.PUBLIC_ROOT + '/login', formData, function(response){
            console.log(response);
            // Restore form inputs
            $myForm.find("input, button, select, textarea").prop("disabled", false);
            if(response === "true"){
                $myForm.hide();
                $("#login-alert").html(renderAlert("success", "Logged in Successfully!"));
                $("#login-alert").append("<button class='btn' onclick='$(\"#loginModal\").modal(\"hide\")'>Close</button>");
                checkLogged();
            }
            else{
                $("#login-alert").html(renderAlert("danger", "Incorrect email/password combination"));
            }
        });
    });
});
