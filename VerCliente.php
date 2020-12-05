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

$codigo = $_GET["codigo"];

$pesquisa = "SELECT * FROM tbl_cliente where cd_cli = $codigo ";

$comando = mysqli_query($con, $pesquisa ) or die(mysqli_error($con));
?>



<html>
    <head>
        <title>Cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/SistemaMenu.css" rel="stylesheet" type="text/css"/>
        <link href="css/PESQUISACLIENTE.css" rel="stylesheet" type="text/css"/>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.1.0.js"></script>
        <link href="css/VerCliente.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Gruppo&family=Gupter:wght@400;500&family=Source+Code+Pro:ital,wght@1,500&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="header">
                <div class="dropdown">
                    <button class="dropbtn">Administrador</button>
                    <div class="dropdown-content">
                        <a href="Home.html">Sair</>
                    </div>
                </div>
            </div>

            <div class="sidenav">
                <img src="img/logo header.png" alt=""/>
                <a href="SistemaHome.html">Home</a>
                <a href="PROJETOS.php">Projetos</a>
                <a href="CLIENTES.html">Clientes</a>
                <a href="CONTRATOS.php">Contratos</a>
                 <a href="PERGUNTAS.php">Perguntas</a>
            </div>
        </header>
            <div class="container">
         <div class="form-group has-feedback">
                          <table border="1"> 
                                 <tr> 
                                   <td style="font-family: gruppo">Código</td> 
                                   <td><?php echo $codigo ?>  </td>
                                  
                                 </tr> 
                                 <?php 
                                 
                                 while($dado = $comando->fetch_array()) 
                                    {$codigo=$dado['cd_cli'];
                                    $nome=$dado['nm_cli'];
                                    $cpf=$dado['cpf_cli'];
                                    $tel=$dado['telefone'];
                                    $empresa=$dado['empresa'];
                                    $rua=$dado['end_cli'];
                                  
                                    $contrato=$dado['cd_contrato']; ?> 
                                 <tr> 
                                     <td style="font-family: gruppo">Nome</td>
                                   <td> &nbsp;<?php echo $nome  ?>  &nbsp; </td> 
                                 </tr> 
                                 <tr>
                                     <td style="font-family: gruppo">CPF</td>
                                     <td> &nbsp;<?php echo $cpf  ?>  &nbsp; </td> 
                                     
                                 </tr>
                                 <tr>
                                     <td style="font-family: gruppo">Empresa</td>
                                     <td> &nbsp;<?php echo $empresa  ?>  &nbsp; </td> 
                                    
                                 </tr>
                                 <tr>
                                     <td style="font-family: gruppo">Endereço</td>
                                      <td> &nbsp;<?php echo $rua?>  &nbsp; </td> 
                                 </tr>
                                
                                 <?php } ?> 
                               </table>  
                               <br/>
                               <br/>
                            <a class="botao" href="ExcluirCliente.php?codigo=<?php echo $codigo ?>"> Excluir</a> 
                            <a class="botao "href="ADDContrato.php?codigo=<?php echo $codigo ?>">Adicionar Contrato</a> 
                                       </div>
                           </div>
    </body>
</html>