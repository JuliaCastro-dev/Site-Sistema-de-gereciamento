<?php

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

$nome = $_POST['Nome'];
$CPF = $_POST['cpf'];
$empresa = $_POST['empresa'];
$tel = $_POST['tel'];
$cidade = $_POST['cidade'];
$rua = $_POST['rua'];
$num = $_POST['numero'];
$consultaNoME = "select * from tbl_cliente where nm_cli = '$nome'";
$insere =  "insert into tbl_cliente(nm_cli, cpf_cli, empresa, end_cli, end_N,telefone,cidade)VALUES('$nome','$CPF','$empresa','$rua', '$num', '$tel' ,'$cidade' );";
$comando = mysqli_query($con, $consultaNoME ) or die(mysqli_error($con));
    
	if(mysqli_affected_rows($con) > 0)	// se resultou algum registro(linha)
	{		
		echo "<script language=javascript> window.alert('Esse nome já foi cadastrado!!!');</script>";
	}
	else
	{		
	    //executando o comando sql para inserir o registro
	    $comando=mysqli_query($con, $insere)or die(mysqli_error($con));
		
	    //exibindo o aviso de execução com sucesso ao usuário através do javascript
	    echo "<script language=javascript> window.alert('Cadastro efetuado com sucesso!!!'); </script>";
              header('Location:ClientesLista.php');   
	}	
	


