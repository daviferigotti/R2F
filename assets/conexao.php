<?php
/**
 * Este Script faz a autenticacao de usuario. 
 */
include_once './model/usuario.php';
include_once './dao/usuario_dao.php';

$user = (isset($_POST["user"]) ? $_POST["user"] : null);
$pw = (isset($_POST["pw"]) ? $_POST["pw"] : null);

$usu_dao = new Usuario_dao();
$usu = $usu_dao->buscar($user, $pw);

if(!is_null($usu['USUARIO'])){
//if((isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] == $user) && (isset($_SERVER['PHP_AUTH_PW']) && $_SERVER['PHP_AUTH_PW'] == $pw)){
    session_start();
    $_SESSION['user'] = $user;
    echo json_encode(array("conn"=>true,"url"=>'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/R2F/home.php'));
    //header('Location: http://localhost:81/r2f_v1.0d/home.php');
    //header('WWW-Authenticate: Basic realm=Insira seu usuário e senha');
}else {
    header('HTTP/1.1 401');
    //return;
    //header('HTTP/1.1 401 Unauthorized');
    //header('Location: http://localhost:81/r2f_v1.0d/index.html');
    
}

