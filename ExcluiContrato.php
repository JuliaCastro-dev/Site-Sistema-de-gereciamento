<?php


require 'conexão.php';
$codigo = $_GET['codigo'];

$excluiCont= "delete from tbl_contrato where cd_contrato = '$codigo'; ";

$comando = mysqli_query($con, $excluiCont ) or die(mysqli_error($con));

echo '<script>alert("Contrato Excluido!!");</script>';
header('Location:ContratosLista.php');   