$(document).ready(function () {
    var altura = $(window).height();
    var header = (altura*20)/100;
    var conteudo = (altura*80)/100;

    $("#header").css("height", header);
    $("#menus").css("height", conteudo);
    $("#conteudo").css("height", conteudo);

    $("#menu li").on("mouseenter mouseleave", function () {
        $(this).toggleClass("ativo");
    });

    $("#menu li").on("click", function () {
        var arq = $(this).attr("data-dado")+".php";

        $.ajax({
            url: arq,
            dataType: "html",
            type: "get",
            data: {},
            success: function (e) {
                $("#conteudo").html(e);

            }
        });
    });
});



function keypressed( obj , e ) {
    var tecla = ( window.event ) ? e.keyCode : e.which;
    var texto = document.getElementById(obj).value
    var indexvir = texto.indexOf(",")
    var indexpon = texto.indexOf(".")

    if ( tecla == 8 || tecla == 0 )
        return true;
    if ( tecla != 44 && tecla != 46 && tecla < 48 || tecla > 57 )
        return false;
    if (tecla == 44) { if (indexvir !== -1 || indexpon !== -1) {return false} }
        if (tecla == 46) { if (indexvir !== -1 || indexpon !== -1) {return false} }
    }