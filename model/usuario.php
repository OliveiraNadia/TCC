<?php
include_once('conexao.php');

class Usuario extends Conexao{
    public $conexao;
    public $usuario;
    public $senha;
    
    function __construct(){
        $this->conexao = Conexao::conectar();
    }
    
    
    public function selectUsuario(){
        $query        = "select emailUsuarios,senhaUsuarios from usuarios where email = :email,senha=:senha";
        $consultation = $this->conexao->prepare($query);
        $consultation->bindValue(":email", $this->email);
        $consultation->bindValue(":senha",$this->senha);
        $consultation->execute();
        return $consultation->fetchObject();
    }
    public function insertUsuario(){
       
        $query       = "insert into usuarios nomeUsuarios,emailUsuarios,senhaUsuarios,telefoneUsuarios  values nome=:nome, email=:email, senha=:senha";
        $consultation = $this->conexao->prepare($query);
        $consultation->bindValue(":nome", $this->nome);
        $consultation->bindValue(":email",$this->email);
        $consultation->bindValue(":telefone",$this->telefone);
        $consultation->bindValue(":senha",$this->senha);
        $consultation->execute();
        return $consultation->fetchObject(); 
       
    }
}


