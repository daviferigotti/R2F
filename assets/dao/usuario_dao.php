<?php
require_once $_SERVER['DOCUMENT_ROOT']."/R2F/assets/controller/conexao_banco.php";

/**
 * Classe que faz as verificações de usuário no banco de dados.
 */
class Usuario_dao{
    public $binVar = null;
    
    public function Usuario_dao(){
        $this->binVar = ConexaoBanco::getConn();
    }
            
    function insert($user){
        $query_insert = "INSERT INTO CADUSU ('USUARIO','SENHA') VALUES ('$user->getUsuario()','$user->getSenha()')";
        
        $result = mysqli_query($conn, $query_insert);
        $retorno = mysqli_fetch_array($result);
        
    }
    /**
     * Busca usuário e senha no banco de dados para autenticação no sistema.
     * Será instanciado um objeto Usuario sempre que o usuário e senha for encontrado no banco.
     * Caso o usuário não seja encontrado, o retorno será um objeto nulo do tipo Usuario.
     * 
     * @param String $user Usuário do sistema
     * @param String $senha Senha do usuário
     * @return Usuario Usuário do sistema
     */
    function consultarUsuario($user, $senha){
        $usuario = new Usuario();
        $query = "SELECT ID, USUARIO FROM CADUSU WHERE USUARIO = '$user' AND SENHA = '$senha'";
        
        $result = mysqli_query($this->binVar, $query);
        $retorno = mysqli_fetch_array($result);
        if (isset($retorno['USUARIO'])){
            $usuario = new Usuario($user, $senha, $retorno['ID']);
            return $usuario;
        }else{
            return $usuario;
        }
        
    }
}

