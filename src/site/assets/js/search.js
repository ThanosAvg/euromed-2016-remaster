$(document).ready(function(){
    $('.search').typeahead({
        source: ["Participant Registration"],
        afterSelect: function(selection){
            window.location.href = PUBLIC_ROOT + "/visitors/TicketRegistration";
        }
    });
});
