<?php
/*
 * Usando padrão de projeto Design Patterns (PHP Singleton)
 * Classe para a conexão com o banco de dados MySql.
 */ 

class ConexaoBanco{
    private static $host = "127.0.0.1";
    private static $user = "root";
    private static $pw = "";  
    private static $dbname = "R2F";
    private static $conn;
    
    /**
     * Construtor privado. Assim ninguém consegue instanciar essa classe.
     */
    private function ConexaoBanco(){
        
    }
    
    public static function getConn(){
        if(!isset(self::$conn))
            self::$conn = new mysqli(self::$host, self::$user, self::$pw, self::$dbname);
        
        return self::$conn;
    }
}
