function renderAlert(type, message){
    var html =
        '<div class="alert alert-' + type + '" role="alert">' + message + '</div>';
    return html;
}

$(function(){
    var currentRequest;
    console.log(window.PUBLIC_ROOT);
    $("#register-form").submit(function(event){
        event.preventDefault();

        // Check if form validates
        if (!$(this).valid()){
            $("#register-alert").html(renderAlert("danger", "<strong>Error!</strong>Correct the errors in red and try again"));
            return false;
        }
        
        // If a request is still active abort it
        if (currentRequest){
            currentRequest.abort();
        }

        var $myForm = $(this);
        
        // Serialize form
        var formData = $myForm.serialize();

        // Disable sources of input while sending data
        $(this).find("input, button, select, textarea").prop("disabled", true);

        $.post(window.PUBLIC_ROOT + '/register', formData, function(response){
            console.log(response);
            // Restore form inputs
            $myForm.find("input, button, select, textarea").prop("disabled", false);
            if(response === "true"){
                $myForm.hide();
                $("#register-alert").html(renderAlert("success", "Registered Successfully!"));
            }
            else{
                $("#register-alert").html(renderAlert("danger", "An error occured, please try again later"));
            }
        });
    });
});



$(document).ready(function () {
 
    $('#register-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
               
            },
            password_confirm: {
                required: true,
                equalTo: "#password"
            },
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            birthday: {
                required: true
            },
            country: {
                required: true
            },
            city: {
                required: true
            },
            address: {
                required: true
            },
            zip: {
                required: true
            },
            phone: {
                required: true
            }
            
            
           
        },
        errorElement: 'strong',
        messages: {
            password_confirm: {
                equalTo: "Passwords do not match."
            }
        }
    });
});
