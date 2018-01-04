<?php

class Conexao {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "igreja";

    function conecta(){
        try{
            $pdo = NEW PDO("mysql:host={$this->host};dbname={$this->db};",$this->user,$this->pass);
        }catch(PDOException $error){
            echo $error->getMessage();
        } 
        
        return $pdo;
    }
    
    public function insere($tabela,$campos,$valores){
        $conn = $this->conecta();
        $v = "";

        for($i=0;$i<count($campos);$i++){
            if($v != ""){$v .= ",";};
            $v .= ":".$campos[$i];
        }
        $campo = implode(",",$campos);  
        $insert = $conn->prepare("INSERT INTO {$tabela} ({$campo}) VALUES ({$v})");
        
    
        for($k=0;$k<count($campos);$k++){
            $insert->bindValue(":{$campos[$k]}",$valores[$k]);
        }
        
        $insert->execute();

        return $insert;
    }
    
    public function altera($tabela,$campos,$valores,$where){      
        $conn = $this->Conecta();
        $v = "";
        
        for($i=0;$i<count($campos);$i++){
            if($v != ""){$v .= ",";};
            $v .= $campos[$i]."=:".$campos[$i];            
        }
         
        $update = $conn->prepare("UPDATE {$tabela} SET {$v} WHERE {$where}");
        
        for($k=0;$k<count($campos);$k++){
            $update->bindValue(":{$campos[$k]}",$valores[$k]);
        }
        
        $update->execute();
        return $update;
    }
    
    public function deleta($tabela, $idTabela, $cod){
        $conn = $this->Conecta();
        
        if(is_array($cod)){
            
        }else{
            $where = $idTabela."=".$cod;
        }
        
        $delete = $conn->prepare("DELETE FROM {$tabela} WHERE {$where}");
        $delete->execute();
        
        return $delete;
    }
    
    public function busca($sql){
        $conn = $this->Conecta();
        
        $consulta = $conn->prepare($sql);
        $consulta->execute();
        $result = $consulta->fetchAll(PDO::FETCH_OBJ);
        
        return $result;
    }
}


//$con = new Conexao();
//$con->Conecta();
?>