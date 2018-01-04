<?php
include 'class/conexao.php';
class cadastro {
    function cadastrar($nome, $endereco, $nascimento, $bairro, $cpfCnpj, $cargo, $tipoPessoa){
        if($nome != ''){

        }else if($bairro != ''){

        }else if($endereco != ''){

        }else if($nascimento != ''){

        }else if($cargo != ''){

        }else{
            $con =  new Conexao();

            if ($tipoPessoa == 1){
                $cpf = $cpfCnpj;
            }else{
                $cnpj = $cpfCnpj;
            }
            $valores = array(date('Y-m-d H:i:s'),$name,$nascimento,$cpf,$cnpj,$endereco,$bairro,$cargo,$tipoPessoa);
            $campos = array('DATACADASTRO','NOME','DATANASCIMENTO','CPF','CNPJ','ENDERECO','BAIRRO','CARGO','TIPOPESSOA');


            $con->insere('pessoa', $campos, $valores);
        }
    }
    function editar(){

    }
}


?>