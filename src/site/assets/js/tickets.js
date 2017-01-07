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
    $("#form" + id).find(".cost").text("+" + cost + "€");
}

$(document).ready(function(){
    createNew(people);
    $(".person-form").submit(function(source){
        source.preventDefault();
    });

    $("#add").click(function(){
        people++;
        createNew(people);
    });
});
