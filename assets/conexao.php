<?php
/**
 * Este Script faz a autentica��o de usu�rio. 
 */
$user = $_POST["user"];
$pw = (isset($_POST["pw"]) ? $_POST["pw"] : null);

$conn = mysqli_connect("localhost", "root", "", "r2f");

$query = "SELECT `id`, `usuario` FROM `cadusu` WHERE `usuario` = '$user' and `senha` = '$pw'";

$resultado = mysqli_query($conn, $query);

$row = mysqli_fetch_array($resultado);

$_SERVER['PHP_AUTH_USER'] = $row['usuario'];
$_SERVER['PHP_AUTH_PW'] = $pw;
if(in_array($user, $row)){
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

