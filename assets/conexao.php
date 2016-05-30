<?php
/**
 * Este Script faz a autentica��o de usu�rio. 
 * Hoje apenas ser� logado ao sistema o usu�rio diego@diego.com com a senha 123.
 * Ainda n�o h� banco de dados criado para que a autentica��o funcione com outros usu�rios. 
 */
//$user = isset($_POST['user']);
//$pw = isset($_POST['pw']);
$user = (isset($_POST["user"]) ? $_POST["user"] : null);
$pw = (isset($_POST["pw"]) ? $_POST["pw"] : null);

echo '<pre>';
var_dump($user);
echo "aquieee: $user";
die;

$conn = mysqli_connect("localhost", "root", "", "r2f");

$query = "SELECT `id`, `usuario` FROM `cadusu` WHERE `usuario` = '$user' and `senha` = '$pw'";

$resultado = mysqli_query($conn, $query);

$row = mysqli_fetch_array($resultado);
echo $row['usuario'];


$_SERVER['PHP_AUTH_USER'] = $row['usuario'];
$_SERVER['PHP_AUTH_PW'] = $row['senha'];

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

