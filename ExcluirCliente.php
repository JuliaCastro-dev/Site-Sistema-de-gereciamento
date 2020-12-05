<?php

require 'conexão.php';
$codigo = $_GET["codigo"];

$excluiCli= "delete from tbl_cliente where cd_cli = $codigo ";

$comando = mysqli_query($con, $excluiCli ) or die(mysqli_error($con));

echo '<script>alert("Cliente Excluido!!");</script>';
header('Location:ClientesLista.php');   