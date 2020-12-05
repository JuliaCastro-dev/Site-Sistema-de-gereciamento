<?php require 'conexão.php'; 
$pesquisa = "SELECT * FROM tbl_contrato";

$comando = mysqli_query($con, $pesquisa ) or die(mysqli_error($con));
$Hoje = date("d/m/Y");
$dth = implode('/', array_reverse(explode('-', $Hoje)));
?>
<html>
    <head>
        <title>Perguntas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/SistemaMenu.css" rel="stylesheet" type="text/css"/>
        <link href="css/PROJETOS.css" rel="stylesheet" type="text/css"/>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.1.0.js"></script>
       
        <link type="text/css" rel="stylesheet" href="/portal/resources/style-guide/css/fluig-style-guide.min.css"/>
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
        <br/>
            <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>Projetos</h1>
                </div>
            </div>
                 <table border="1"> 
                                  <tr>
                         <td style="font-size: 1.2em;font-family: gruppo">Serviço  &nbsp; </td>
                         <td style="font-size: 1.2em;font-family: gruppo">Valor &nbsp; </td> 
                         <td style="font-size: 1.2em;font-family: gruppo">Data De Entrega &nbsp; </td>
                         <td style="font-size: 1.2em;font-family: gruppo">Descrição</td>
                         <td  style="font-size: 1.2em;font-family: gruppo">Situação</td>
                     </tr>
                             
                                 <?php 
                                 
                                 while($dado = $comando->fetch_array()) 
                                    {$codigoCli=$dado['cd_cli'];
                                    $total=$dado['total'];
                                    $serviço=$dado['serviço'];
                                    $descrição=$dado['descrição'];
                                    $dataC=$dado['dataContrato'];
                                    $dataE=$dado['dataEntrega'];
                                    $dte = implode('/', array_reverse(explode('-', $dataE)));
                                  
                                     ?> 
                        <tr> 
                                    
                                   <td> &nbsp;<?php echo $serviço  ?>  &nbsp; </td> 
                                 
                                 
                                    
                                     <td> &nbsp;<?php echo $total  ?> M &nbsp; </td> 
                                     
                                 
                                
                                     
                                     <td> &nbsp;<?php echo $dte  ?>  &nbsp; </td> 
                                    
                                 
                                     
                                      <td> &nbsp;<?php echo $descrição?>  &nbsp; </td> 
                                 
                                 
                                    
                                     <?php if($dte > $dth){
                                                    echo '<td id="ativo">Ativo </td> ';}
                                                    else {
                                                        echo'<td id="atraso">Em Atraso</td>';
                                                    }
                                     ?>  &nbsp;
                                     
                                 </tr>
                                 <?php } ?> 
                               </table>  
            </div>
    </body>
</html>


