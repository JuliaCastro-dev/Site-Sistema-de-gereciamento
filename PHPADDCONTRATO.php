<?php
session_start();

$servidor = 'localhost';
$usuario = 'root';
$senhab = 'scorpia';
$banco = 'db_empresa';
$con = new mysqli($servidor, $usuario, $senhab, $banco);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}


 



$dtentrega = $_POST['entrega'];
$dte = implode('-', array_reverse(explode('/', $dtentrega)));

$dtContrato = $_POST['data'];
$dtc = implode('-', array_reverse(explode('/', $dtContrato)));

$serviço = $_POST['serviço'];
$descrição = $_POST['descrição'];
$codigo =$_POST['cliente'];
$total = $_POST['total'];



$insere =  "insert into tbl_contrato(cd_cli, dataContrato, dataEntrega , serviço, descrição, total)VALUES('$codigo','$dtc','$dte','$serviço','$descrição','$total');";


$comando = mysqli_query($con, $insere ) or die(mysqli_error($con));


	    //exibindo o aviso de execução com sucesso ao usuário através do javascript
	    echo "<script language=javascript> window.alert('Contrato efetuado com sucesso!!!'); </script>";
             header('Location:CONTRATOS.php');    
?>       