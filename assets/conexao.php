<?php
//$user = isset($_POST['user']);
//$pw = isset($_POST['pw']);
$user = (isset($_POST["user"]) ? $_POST["user"] : null);
$pw = (isset($_POST["pw"]) ? $_POST["pw"] : null);

$_SERVER['PHP_AUTH_USER'] = $user;
$_SERVER['PHP_AUTH_PW'] = $pw;

//sleep(2);
if((isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] == "diego@diego.com") && (isset($_SERVER['PHP_AUTH_PW']) && $_SERVER['PHP_AUTH_PW'] == "123")){
    session_start();
    $_SESSION['user'] = $user;
    echo json_encode(array("conn"=>true,"url"=>'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/r2f_v1.0d/home.php'));
    //header('Location: http://localhost:81/r2f_v1.0d/home.php');
    //header('WWW-Authenticate: Basic realm=Insira seu usuário e senha');
}else {
    header('HTTP/1.1 401');
    //return;
    //header('HTTP/1.1 401 Unauthorized');
    //header('Location: http://localhost:81/r2f_v1.0d/index.html');
    
}

