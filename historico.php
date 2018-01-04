<?php
/**
 * Created by PhpStorm.
 * User: kaleb
 * Date: 15/12/2017
 * Time: 11:01
 **/
?>
<script type="text/javascript">
    $("#historico ul").on("click", function () {
        var arq = $(this).attr("data-dado")+".php";

        $.ajax({
            url: arq,
            dataType: "html",
            type: "get",
            data: {},
            success: function (e) {
                $("#conteudoHistorico").html(e);
            }
        });
    });
</script>
<form>
<div id="historico" class="menus_historico">
        <ul data-dado="historicoDizimo">Dizimo</ul>
        <ul data-dado="historicoOferta">oferta</ul>
        <ul data-dado="historicoPagamento">Pagamento</ul>
        <ul data-dado="historicoCaixa">Caixa</ul>
</div></form>
<br><br><br><br>
<div style="padding-bottom: 20px" id="conteudoHistorico">
</div>