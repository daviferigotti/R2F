<?php
/*
 * Classe para instanciar usuário que será logados no sistema.
 */
class Usuario{
    private $senha;
    private $usuario;
    private $id;
    
    public function Usuario($user = null, $pw = null, $id = null){
        $this->usuario  =   $user;
        $this->senha    =   $pw;
        $this->id       =   $id;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function getId(){
        return $this->id;
    }
}

