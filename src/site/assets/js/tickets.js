priceStudent = 155;
priceNormal = 190;
priceWorkshop = 100;
priceBag = 70;
people = 1;

function createNew(id){
    element = $(".person-form").first().clone();
    $("#forms").append(element);
    element.show();
    element.attr("id", "form" + id);
    $("#form" + id + " :input").change(function(){
        calculateCost(id);
    });
    $("#form" + id).validate({
        errorElement: "span"
    });
    $("#form" + id).submit(function(source){
        source.preventDefault();
    });
    calculateCost(id);
}

function calculateCost(id){
    var cost = 0;
    if($("#form" + id).find(".input-type").val() === "normal"){
        cost += priceNormal;
    }
    else if($("#form" + id).find(".input-type").val() === "student"){
        cost += priceStudent;
    }
    else if($("#form" + id).find(".input-type").val() === "workshop"){
        cost += priceWorkshop;
    }
    if($("#form" + id).find(".input-bag").is(':checked')){
        cost += priceBag;
    }
    $("#form" + id).find(".cost").text(cost);
    $("#total-cost").text(function(){
        var total = 0;
        $(".cost").each(function(){
            total += parseInt($(this).text());
        });
        return total;
    });
}

$(document).ready(function(){
    createNew(people);

    $("#add").click(function(){
        people++;
        createNew(people);
    });

    $("#forms").on("click", ".remove-btn", function(){
        if($(".person-form").length > 2){
            // We cant delete the last one
            $("#alert-remove").hide();
            $(this).closest("form").remove();
            $("#total-cost").text(function(){
                var total = 0;
                $(".cost").each(function(){
                    total += parseInt($(this).text());
                });
                return total;
            });
        }
        else{            
            $("#alert-remove").show();
            setTimeout(function(){
                $("#alert-remove").fadeOut();
            }, 3000);
        }
    });

    $("#submit").click(function(){
        // Check if user is logged in
        data = {};
        $.get(window.PUBLIC_ROOT + '/login/check', data, function(response){
            if(response === "true"){
                var isValid = true;
                for(var i = 1; i <= people; i++){
                    form = $("#form" + i);
                    if(!form.valid()){
                        isValid = false;
                    }
                }
                if(isValid){
                    // Proceed
                    $("#paymentModal").modal("show");
                }
            }
            else{
                // Show login
                $("#loginModal").modal("show");
            }
        });
    });
});
