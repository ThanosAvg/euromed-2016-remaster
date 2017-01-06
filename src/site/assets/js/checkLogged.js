function checkLogged(){
    data = {};
    $.get(window.PUBLIC_ROOT + '/login/check', data, function(response){
        if(response === 'true'){
            $("#logged-in-menu").show();
            $("#logged-out-menu").hide();
        }
        else{
            $("#logged-in-menu").hide();
            $("#logged-out-menu").show();
        }
    });
}

$(function(){
    checkLogged();
});
