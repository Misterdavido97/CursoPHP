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
    var n = document.getElementById("nom").value;
    var a = document.getElementById("ape").value;
    var d = document.getElementById("dir").value;
    var t = document.getElementById("tel").value;
    var c = document.getElementById("cor").value;

    var res = ("Registro exitoso");
    return res;
}