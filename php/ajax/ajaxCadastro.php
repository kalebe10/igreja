<?php

header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: application/json; charset=utf-8');
require_once '../class/conexao.php';

ini_set('display_errors', 'off');
function retorna()
{
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $nascimento = $_POST['nascimento'];
    $cargo = $_POST['cargo'];
    $tipoPessoa = $_POST['tipoPessoa'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];
    if ($nome == '') {
        echo json_encode('Preencha o nome');
    } else if ($endereco == '') {
        echo json_encode('Preencha o endereço');
    } else if ($bairro == '') {
        echo json_encode('Preencha o bairro');
    } else if ($nascimento == '') {
        echo json_encode('Preencha a data de nascimento');
    } else if ($cargo == '') {
        echo json_encode('Escolha o cargo');
    } else {
        $con = new Conexao();

        $valores = array(date('Y-m-d H:i:s'), $nome, $nascimento, $cpf, $cnpj, $endereco, $bairro, $cargo, $tipoPessoa);
        $campos = array('DATACADASTRO', 'NOME', 'DATANASCIMENTO', 'CPF', 'CNPJ', 'ENDERECO', 'BAIRRO', 'CARGO', 'TIPOPESSOA');

        $return = $con->insere('pessoa', $campos, $valores);

        if($return){
            echo json_encode('Cadastro concluido');
        }else{
            echo json_encode('Falha ao cadastrar');
        }
    }


    //return json_encode($arr);
}

retorna();
?>