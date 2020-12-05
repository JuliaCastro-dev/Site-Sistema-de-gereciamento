<?php



require 'conexão.php';
$nome = $_POST['nome'];
$mensagem = $_POST['problema'];
$email = $_POST['email'];



$insere =  "insert into tbl_pergunta(p_nome,p_email,p_pergunta)VALUES('$nome','$email','$mensagem' );";
$comando=mysqli_query($con, $insere)or die(mysqli_error($con));
 echo "<script language=javascript> window.alert('Pergunta enviada com sucesso!!!'); </script>";		
header('Location:SUPORTE.php');   
	
