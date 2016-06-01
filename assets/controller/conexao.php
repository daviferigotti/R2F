<?php
/**
 * Este Script faz a autenticacao de usuario. 
 */
include_once '../model/usuario.php';
include_once '../dao/usuario_dao.php';

$htmlUser = (isset($_POST["user"]) ? $_POST["user"] : null);
$htmlPw = (isset($_POST["pw"]) ? $_POST["pw"] : null);

$usu_dao = new Usuario_dao();
$objUsu = $usu_dao->consultarUsuario($htmlUser, $htmlPw);

if($objUsu->getUsuario() != null && $objUsu->getId() != null){
    session_start();
    $_SESSION['user'] = $htmlUser;
    echo json_encode(array("conn"=>true,"url"=>'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/R2F/home.php'));
}else {
    header('HTTP/1.1 401');
}

