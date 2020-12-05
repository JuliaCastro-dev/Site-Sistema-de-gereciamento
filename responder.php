<?php


require 'conexão.php';

$resposta = $_POST['resposta'];

$socio = $_POST['socio'];
$pergunta = $_GET["pergunta"];
$insere =  "insert into tbl_resposta(r_resposta, p_pergunta, r_socio)VALUES('$resposta','$pergunta','$socio');";
$comando = mysqli_query($con, $insere ) or die(mysqli_error($con));
$excluiPergunta = "DELETE FROM tbl_pergunta WHERE p_pergunta = '$pergunta'";
$comando = mysqli_query($con, $excluiPergunta ) or die(mysqli_error($con));
echo "<script>alert('Resposta enviada :)');</script>";
header('Location:PERGUNTAS.php'); 