<?php

date_default_timezone_set('America/Sao_Paulo');

$banco = 'sas';
$usuario = 'root';
$senha = '';
$servidor = 'localhost';

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", "$usuario", "$senha");
} catch (Exception $e) {
    echo "Erro nos dados de conexão com o banco de dados<br> . $e";
}



?>