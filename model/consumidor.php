<?php

class Consumidor{

    private $id;
    private $nome="";
    private $data_nascimento="";
    private $rendimento="";

 
    public function excluir($dados){
        list($id) = $dados;
        $this->setId($id);
        include '../connection/conexao.php';
        $sql = "delete from consumidor where ID_CONSUMIDOR = '{$this->getId()}'";
        $result = $conexao->query($sql);
        return $result;
    }

    function cadastrar($dados){
        list($nome,$data_nascimento,$rendimento) = $dados;
        $this->setNome($nome);
        $this->setNascimento($data_nascimento);
        $this->setRendimento($rendimento);
        include '../connection/conexao.php';
        $sql = "insert into consumidor(NOME_CONSUMIDOR, DATA_NASCIMENTO, RENDIMENTO) values ('{$this->getNome()}','{$this->getNascimento()}', REPLACE(REPLACE('{$this->getRendimento()}','.',''),',','.') )";
        $result = $conexao->query($sql);
        return $result;
    }
    function editar($dados){
        list($id,$nome,$nascimento,$rendimento) = $dados;
        $this->setId($id);
        $this->setNome($nome);
        $this->setNascimento($nascimento);
        $this->setRendimento($rendimento);
        include '../connection/conexao.php';
        $sql = "update consumidor set NOME_CONSUMIDOR = '{$this->getNome()}',DATA_NASCIMENTO='{$this->getNascimento()}',RENDIMENTO = REPLACE(REPLACE('{$this->getRendimento()}','.',''),',','.') where ID_CONSUMIDOR = '{$this->getId()}'";
        $result = $conexao->query($sql);
        return $result;
    }

//get e seters

    public function setId($id){
        $this->id =$id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome =$nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNascimento($data_nascimento){
        $this->data_nascimento =$data_nascimento;
    }
    public function getNascimento(){
        return $this->data_nascimento;
    }
    public function setRendimento($rendimento){
        $this->rendimento =$rendimento;
    }
    public function getRendimento(){
        return $this->rendimento;
    }
}

?>