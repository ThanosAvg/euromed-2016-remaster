$(function(){
    var currentRequest;
    console.log(window.PUBLIC_ROOT);
    $("#register-form").submit(function(event){
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

        $.post(window.PUBLIC_ROOT + '/register', formData, function(response){
            console.log(response);
            // Restore form inputs
            $myForm.find("input, button, select, textarea").prop("disabled", false);
            if(response === "true"){
                alert("Registered!")
            }
            else{
                alert("Failed to register!");
            }
        });
    })
})
