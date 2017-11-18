$(document).ready(function(){
    $('ul.tabs li a:first').addClass('active');/*Llama al primer enlace de la navegación*/
    $('.secciones article').hide();/*El .hide oculta todos los articulos*/
    $('.secciones article:first').show();/*Sólo muestra el primer artículo con el firts y .show*/

    $('ul.tabs li a').click(function(){ 
        $('ul.tabs li a').removeClass('active');/*Activa el color a las casillas*/
        $(this).addClass('active'); 
        $('.secciones article').hide(); /*Oculta todas las secciones*/

        var activeTab = $(this).attr('href');/*Trae el valor donde este dando clic*/
        $(activeTab).show();/*Muestra el contenido del tab q seleccione*/
        return false;
    });
});

/*window.alert('lo q me de la gana');*/

var recuperar = function(nombre, apellido, direccion, telefono){
    var n = $("#nom").val();
    var a = $("#ape").val();
    var d = $("#dir").val();
    var t = $("#tel").val();
    var c = $("#cor").val();

    var res = ("Registro exitoso");
    return res;
}

var Clean = function(){
    $("#nom").val("");
    $("#ape").val("");
    $("#dir").val("");
    $("#ced").val("");
    $("#tel").val("");
    $("#cel").val("");
    $("#cor").val("");
    $("#prod").val([]);

    $('#Total').text(0);
}

var SumTotal = function(){
    var iSum = 0;
    $.each($("#prod").val(), function(Index, Value){
        var $option = $("#prod").find('option[value="'+ Value +'"]');

        iSum += parseInt($option.data('price'));
    });

    $('#Total').text(iSum);
}