<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once $_SERVER['DOCUMENT_ROOT']."/R2F/assets/controller/conexao_banco.php";


class Usuario_dao{
    public $binVar = null;
    
    function insert($user){
        $this->binVar = ConexaoBanco::getConn();
        
        $query_insert = "INSERT INTO CADUSU ('USUARIO','SENHA') VALUES ('$user->getUsuario()','$user->getSenha()')";
        //$query = "SELECT ID, USUARIO FROM CADUSU WHERE USUARIO = '$user' AND SENHA = '$senha'";
        
//        $conn = ConexaoBanco::getConn();

        $result = mysqli_query($conn, $query_insert);
        $retorno = mysqli_fetch_array($result);
        
    }
    
    function buscar($user, $senha){
//        $cccc = new ConexaoBanco();
//        $this->binVar = $cccc->getConn();
        $this->binVar = ConexaoBanco::getConn();
        
        //$query_insert = "INSERT INTO CADUSU ('USUARIO','SENHA') VALUES ('$user->getUsuario()','$user->getSenha()')";
        $query = "SELECT ID, USUARIO FROM CADUSU WHERE USUARIO = '$user' AND SENHA = '$senha'";
        
//        $conn = ConexaoBanco::getConn();

        $result = mysqli_query($this->binVar, $query);
        $retorno = mysqli_fetch_array($result);
        
        return $retorno;
    }
}

