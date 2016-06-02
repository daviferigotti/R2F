<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
spl_autoload_register(function(){
    echo 'Ola';
    
});

session_start();
echo session_id();
var_dump($_SESSION);
if (is_object($_SESSION['user'])) {
    //header('Location: index.html');
}

//session_destroy();
//var_dump($_SESSION);
