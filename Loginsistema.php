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
}

$login = $_POST['usuario'];
$senha = $_POST['senha'];


$result = $con->query("select * from tbl_socio 
WHERE login = '$login' AND senha = '$senha'");

$rowCount = $result ->num_rows;

if($rowCount == 1){
    header('Location:SistemaHome.html');
  
    
}
else{
echo "login falid";
  }
