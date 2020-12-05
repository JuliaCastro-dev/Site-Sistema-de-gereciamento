<?php

// session_start inicia a sessão
session_start();

// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$servidor = 'localhost';
$usuario = 'root';
$senhab = 'scorpia';
$banco = 'db_empresa';
$con = new mysqli($servidor, $usuario, $senhab, $banco);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}else{
echo "Conectou !!";
} 


