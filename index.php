<?php
/**
 * Created by PhpStorm.
 * User: kaleb
 * Date: 13/12/2017
 * Time: 21:22
 */
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/cadastro.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.maskedinput.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/jquery-ui.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
    <div align="center" width="100%" height="100%" style="">
        <div style="width: 100%;height: 150px; border-bottom: 1px solid gray; padding-bottom: 5px; position: fixed;">
            <table style="width: 100%; height: 100%; margin: 0;" cellspacing="0" cellpadding="0">
                <tr>
                    <td style="width: 25%;">
                        <img src="img/logo.png" style="height: 100%;" align="left">
                    </td>
                    <td style="width: 75%; vertical-align: middle">
                        <ul id="menu" class="menus_index" style="list-style: none; width: 100%;">
                            <li data-dado="cadastro">Cadastro</li>
                            <li data-dado="recibo">Recibo</li>
                            <li data-dado="pagamento">Pagamento</li>
                            <li data-dado="historico">Histórico</li>
                            <li data-dado="caixa">Caixa</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <div id="conteudo">
            </div>
        </div>
    </div>
</body>
</html>
