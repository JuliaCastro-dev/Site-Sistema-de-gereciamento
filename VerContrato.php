
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

$codigo = $_GET['codigo'];

$pesquisa = "SELECT * FROM tbl_contrato where cd_contrato = $codigo ";

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
                                    {$codigoCli=$dado['cd_cli'];
                                    $total=$dado['total'];
                                    $serviço=$dado['serviço'];
                                    $descrição=$dado['descrição'];
                                    $dataC=$dado['dataContrato'];
                                    $dtc = implode('/', array_reverse(explode('-', $dataC)));
                                    $dataE=$dado['dataEntrega'];
                                    $dte = implode('/', array_reverse(explode('-', $dataE)));
                                  
                                     ?> 
                                 <tr> 
                                     <td style="font-family: gruppo">Serviço</td>
                                   <td> &nbsp;<?php echo $serviço  ?>  &nbsp; </td> 
                                 </tr> 
                                 <tr>
                                     <td style="font-family: gruppo">Valor</td>
                                     <td> &nbsp;<?php echo $total  ?>  &nbsp; </td> 
                                     
                                 </tr>
                                 <tr>
                                     <td style="font-family: gruppo">Data De Entrega</td>
                                     <td> &nbsp;<?php echo $dte  ?>  &nbsp; </td> 
                                    
                                 </tr>
                                 <tr>
                                     <td style="font-family: gruppo">Descrição</td>
                                      <td> &nbsp;<?php echo $descrição?>  &nbsp; </td> 
                                 </tr>
                                 <tr>
                                     <td  style="font-family: gruppo">Data do Contrato</td>
                                     <td><?php echo $dtc ?>  &nbsp; </td> 
                                 </tr>
                                 <?php } ?> 
                               </table>  
                               <br/>
                               <br/>
                            <a class="botao" href="ExcluiContrato.php?codigo=<?php echo $codigo ?>"> Excluir</a> 
                         
                                       </div>
                           </div>
    </body>
</html>