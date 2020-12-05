<?php declare(strict_types=1) ?>

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


?>


<html>
    <head>
        <title>Perguntas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/SistemaMenu.css" rel="stylesheet" type="text/css"/>
        <link href="css/PESQUISACLIENTE.css" rel="stylesheet" type="text/css"/>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.1.0.js"></script>
        <link href="PERGUNTAS.css" rel="stylesheet" type="text/css"/>
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
                    <h1>Perguntas</h1>
                </div>
            </div>

                               <?php 
                                 
                                $pesquisa = "SELECT * FROM tbl_pergunta;";
                                $comando = mysqli_query($con, $pesquisa ) or die(mysqli_error($con));
                                if(mysqli_affected_rows($con) > 0)	// se resultou algum registro(linha)
	                         {
                                   while($dado = $comando->fetch_array()) 
                                    {
                                  $pergunta=$dado['p_pergunta'];
                                     ?> 
                                    <button name="pergunta"  class="accordion" value="<?php echo $pergunta?>"><?php echo $pergunta?></button>
                                        <div class="panel">
                                            <form action="responder.php?pergunta=<?php echo $pergunta ?>" method="POST">
                                               
                                                <input name="resposta" id="resposta" type="text" class="resposta" placeholder="sua resposta aqui"/><br/>
                                                <input id="socio" type="text" name="socio" style="color:#000;"placeholder="seu nome aqui"/><br/>
                                                <?php  $_SESSION['p_pergunta']=$pergunta;?>
                                                <input id="responder" type="submit" value="responder">
                                                       
                                            </form>
                                        </div>    
                                    <?php } 
                                 }
                                 else{
                                 echo 'Ainda não há perguntas! :)';
                                 }
                                 ?>
                                
                                    
                                   
                        </div>
            </div>
               
        </div>
                        <script lang="javascript">
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                  acc[i].addEventListener("click", function() {
                    /* Toggle between adding and removing the "active" class,
                    to highlight the button that controls the panel */
                    this.classList.toggle("active");

                    /* Toggle between hiding and showing the active panel */
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                      panel.style.display = "none";
                    } else {
                      panel.style.display = "block";
                    }
                  });
                }
                </script>
    </body>
</html>
