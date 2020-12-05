

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



$pesquisa = "SELECT * FROM tbl_contrato ";

$comando = mysqli_query($con, $pesquisa ) or die(mysqli_error($con));



?>




<html>
    <head>
        <title>Clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/SistemaMenu.css" rel="stylesheet" type="text/css"/>
        <link href="css/PESQUISACLIENTE.css" rel="stylesheet" type="text/css"/>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.1.0.js"></script>
        <link rel = "preconnect" href = "https://fonts.gstatic.com">
        <link href = "https://fonts.googleapis.com/css2? family = Montserrat: wght @ 200 & display = swap" rel = "stylesheet">família = Montserrat: ital, wght @ 0,200; 1.100 &
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
               
                <a href="#services">Projetos</a>
                <a href="CLIENTES.html">Clientes</a>
                <a href="CONTRATOS.php">Contratos</a>
                 <a href="PERGUNTAS.php">Perguntas</a>
            </div>
        </header>
        <br/>
            <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1>Contratos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <form action="" class="search-form">
                        <div class="form-group has-feedback">
                          <table border="1"> 
                                 <tr> 
                                   <td style="font-family:roboto mono;letter-spacing: 1px; ">Código de contrato  &nbsp; &nbsp;</td> 
                                   <td style="font-family:roboto mono; letter-spacing: 1px;">   Tipo do Serviço</td> 
                                   <td></td> 
                                   
                                 </tr> 
                                 <?php 
                                 
                                 while($dado = $comando->fetch_array()) 
                                    {
                                    $service=$dado['serviço'];
                                    $codigo=$dado['cd_contrato']; 
                                    $_SESSION['codigo']=$codigo; 
                                     ?> 
                                 <tr> 
                                     <td style="font-family: gruppo;"><?php echo $codigo ?>  &nbsp; </td>
                                   <td style="font-family: gruppo; "><?php echo $service  ?>  &nbsp; </td> 
                                  
                                   <td> 
                                     <a href="VerContrato.php?codigo=<?php echo $codigo ?>" id="DETAILS">&nbsp;&nbsp; Detalhes &nbsp;</a> 
                                    
                                   </td> 
                                 </tr> 
                                 <?php } ?> 
                               </table>    
                        </div>
                    </form>
                </div>
            </div>
               
        </div>
   
        
    </body>
</html>

