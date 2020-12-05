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

    echo '<script type="text/javascript">alert("Olá o Código do cliente é: ' . $codigo . '")</script>';

?>
<html>
    <head>
        <title>Cadastrar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/SistemaMenu.css" rel="stylesheet" type="text/css"/>
        <link href="css/ADDCLIENTE.css" rel="stylesheet" type="text/css"/>
       <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Gruppo&family=Gupter:wght@400;500&family=Source+Code+Pro:ital,wght@1,500&display=swap" rel="stylesheet">
       <script src="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/ADDCLIENTE.js" type="text/javascript"></script>
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
                <a href="CONTRATOS.php">Contrato</a>
                <a href="PERGUNTAS.php">Perguntas</a>
            </div>
         
        </header>
        <main>
            <form method="post" action="PHPADDCONTRATO.php"id="form">
            <fieldset>
            <div class="CONTAINER-FORM">
                <div>Cadastro de Contrato</div>

                <div class="panel-body">
            <div class="form-group">
            <div class="col-md-11 control-label">
                    <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="contrato">Código</label>  
              <div class="col-md-2">
                  <input id="contrato" name="contrato" disabled="" placeholder="" class="form-control input-md" required="" type="text">
              </div>
            </div>
            
             <div class="form-group">
              <label class="col-md-2 control-label" for="contrato">Código do cliente<h11>*</h11></label>  
              <div class="col-md-2">
                  <input id="cliente" name="cliente" placeholder="" value="" class="form-control input-md" required="" type="text">
              </div>
            </div>

  

              <label class="col-md-1 control-label" for="data">Data do Contrato<h11>*</h11></label>  
              <div class="col-md-2">
              <input id="dtcontrato"type="text" name="data" placeholder="DD/MM/AAAA" class="form-control input-md" required="" value='<?php echo date("d/m/Y");?>'/><br/>
           
               <label class="col-md-1 control-label" for="entrega">Data da Entrega<h11>*</h11></label>  
              <div class="col-md-2">
              <input id="dtentrega" name="entrega" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
              
              
              </div>

            <!-- Multiple Radios (inline) -->

            </div>

           

            <!-- Prepended text-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="prependedtext">Serviço<h11>*</h11></label>
              <div class="col-md-5">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="serviço" name="serviço" class="form-control" placeholder="Tipo de serviço" required="" type="text">
                </div>
              </div>
            </div>


            <!-- Search input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="descrição">Descrição <h11>*</h11></label>
              <div class="col-md-5">
                  <input  style="vertical-align: top; resize: vertical; width: 200px; height: 50px;"id="descrição" name="descrição" placeholder="Descrição" class="form-control input-md" required="" value="" type="search" maxlength="150">
              </div>
            </div>
           

            <!-- Prepended text-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="prependedtext">Total<h11>*</h11></label>
              <div class="col-md-2">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                  <input id="total" name="total" class="form-control" placeholder="Preço Total" required="" type="text">
                </div>
              </div>
            </div>
       
           
           
           
           
           




            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="Cadastrar"></label>
              <div class="col-md-8">
                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
              </div>
            </div>

            </div>
            </div>


            </fieldset>
            </form>
        </MAIN>
        <?php
        

       ?>
    </body>
</html>