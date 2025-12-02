<?php
// Configurações do Banco de Dados
$host = "localhost";
$usuario = "root"; 
$senha = "";       
$banco = "versoseencontros";

// Criando a conexão
$mysqli = new mysqli($host, $usuario, $senha, $banco);

// Verificando se deu erro
if ($mysqli->connect_errno) {
    die("Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8");
?>