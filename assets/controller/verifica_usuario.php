<?php
/*
 * Script responsável por verificar se o usuário está ou não logado no sistema.
 * Caso não esteja, o usuário será direcionado para a página de login.
 */
session_start();

if (!isset($_SESSION['user'])){
    header('Location: index.html');
}