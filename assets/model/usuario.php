<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario{
    private $senha;
    private $usuario;
    private $id;
    
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

