<?php
    require_once './assets/controller/verifica_usuario.php';
    require_once './assets/controller/conexao.php';
    
//<!DOCTYPE html>
//<!--<html>
//    <head>
//        <title>R2F - Home</title>
//        <meta charset="UTF-8">
//        <meta name="viewport" content="width=device-width, initial-scale=1.0">
//    </head>
//    <body>
    //$usu_dao->getId();
    $objUsu = $_SESSION['user'];
    
    $objUsu->getUsuario();
    
    
//        
//        <input type="button" value="Click">
//    </body>
//</html>-->
