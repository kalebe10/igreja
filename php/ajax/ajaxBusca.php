<?php

header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: application/json; charset=utf-8');
require_once '../class/conexao.php';

ini_set('display_errors', 'off');
function retorna()
{
    $nome = $_POST['nome'];

    $con = new Conexao();
    $sql = "SELECT IDPESSOA, NOME, DATANASCIMENTO,CPF, CNPJ,ENDERECO,BAIRRO,CARGO,TIPOPESSOA FROM pessoa WHERE NOME LIKE '{$nome}%'";

    $obj = $con->busca($sql);
    //echo $obj;
    $dados = array();
    foreach ($obj as $v) {
        $dados[] = array('value' => $v->IDPESSOA, 'label' => $v->NOME, 'nascimento' => $v->DATANASCIMENTO, 'cpf' => $v->CPF, 'cnpj' => $v->CNPJ, 'endereco' => $v->ENDERECO, 'bairro' => $v->BAIRRO, 'cargo' => $v->CARGO, 'tipoPessoa' => $v->TIPOPESSOA);
    }


    return json_encode($dados);
}

echo retorna();


?>