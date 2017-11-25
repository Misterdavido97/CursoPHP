$(document).ready(function(){
    
    $('#navbarText').find('li.nav-item').click(function() {
        $('#navbarText').find('li.nav-item').each(function(i, v){
            $(v).removeClass("active");
        });
        $(this).addClass("active");
    })
        
});

var recuperar = function(nombre, apellido, direccion, telefono){
    var n = $("#name").val();
    var a = $("#lastName").val();
    var d = $("#address").val();
    var t = $("#phone").val();
    var c = $("#cellPhone").val();

    var res = ("Registro exitoso");
    return res;
}

var Clean = function(){
    $("#name").val("");
    $("#lastName").val("");
    $("#address").val("");
    $("#document").val("");
    $("#phone").val("");
    $("#cellPhone").val("");
    $("#mail").val("");
    $("#products").val([]);
    $('#Total').text(0);
}


var SumTotal = function(){
    var iSum = 0;
    $.each($("#products").val(), function(Index, Value){
        var $option = $("#products").find('option[value="'+ Value +'"]');
        iSum += parseInt($option.data('price'));
    });
    $('#Total').text(iSum);
}