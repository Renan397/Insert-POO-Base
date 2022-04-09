<?php
include_once 'DBConn.class.php';
$DBConn = new DBConn();

class Usuario {
    private $email;
    private $senha;
    private $nome;
    private $cpf;
    private $datanasc;
    private $telefone;

    public function __construct($email, $senha, $nome, $cpf, $datanasc, $telefone) {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setDatanasc($datanasc);
        $this->setTelefone($telefone);
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
        return $this;
    }

    public function getDatanasc(){
        return $this->datanasc;
    }

    public function setDatanasc($datanasc){
        $this->datanasc = $datanasc;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    public function saveUser() {
        $emailDB = $this->getEmail();
        $senhaDB = $this->getSenha();
        $nomeDB = $this->getNome();
        $cpfDB = $this->getCpf();
        $datanascDB = $this->getDatanasc();
        $telefoneDB = $this->getTelefone();

        $sqlCommand = "INSERT INTO usuario (email, senha, nome, cpf, dtNasc, telefone) values ('$emailDB', MD5('$senhaDB'), '$nomeDB', '$cpfDB', '$datanascDB', '$telefoneDB');";
        return $sqlCommand;
    }
}
?>
