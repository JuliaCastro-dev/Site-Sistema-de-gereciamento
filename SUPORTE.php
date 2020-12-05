<?php  require 'conexão.php'; ?>
<html>
    <head>
        <title>Suporte</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/Header.css" rel="stylesheet" type="text/css"/>
        <link href="css/SUPORTE.css" rel="stylesheet" type="text/css"/>
        <link href="css/FAQ-SUPORTE.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/perguntas.js" type="text/javascript"></script>
        <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Gruppo&family=Gupter:wght@400;500&family=Source+Code+Pro:ital,wght@1,500&display=swap" rel="stylesheet">
    </head>
    <body>
           <header>
            <div id="header">
            <img id ="wave" src ="img/wavee.png" alt="">
       
            
                    <div class="optionsheader"> 
                    <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="SOBRE.html">Sobre</a></li>
                    <li><a href='PORTIFOLIO.html'>Portifólio</a></li>
                    <li><img id="logo" src="img/logo header.png" alt=""></li>
                    <li><a href='CONTATO.html'>Contato</a></li>
                    <li><a href='LOGIN.php'>Login</a></li>
                    <li><a href='SUPORTE.php'>Suporte</a></li>
                    </ul>
                    </div>
            </header>
        <main>     
        <h1>Nos mande uma Pergunta!</h1>
        <span>Assim que recebermos responderemos!</span>
        <div id="chat">
            <form action="FORM_SUPORTE.php" method="POST">
            <input id="nome" name="nome" type="text" placeholder="  Nome" size="50">
            <input id="email" name="email" class="form-control" placeholder="  email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
            <input id="caixa" name="problema" type="text" placeholder="Sua Pergunta" size="150">
            <input id="enviar" type="submit">
            <input id="cancelar" type="reset">
            </form>
        </div>
        <h2>Perguntas frequentes</h2>
        <div id="TodasPERGUNTAS">
        <?php
       
        
            $filtra = "SELECT * FROM tbl_resposta ";
            $comando = mysqli_query($con, $filtra ) or die(mysqli_error($con));
                 while($dado = $comando->fetch_array()) 
                 
                 {
                     $pergunta=$dado['p_pergunta'];
                 $socio=$dado['r_socio'];
                 $resposta=$dado['r_resposta'];?>
          
             <div class="card" onclick="this.classList.toggle('expanded')" id="pergunta">
                <br/>
                <p><?php echo $pergunta?></p>
                  <div class="text1">
                       
                      <div class="text-content">
                         
                          <h5>
                          <?php echo $resposta . " - " . $socio?>
                          </h5>
                          
                      </div>
                </div>
 </div>   
        
               <?php  }?>
           </div> 
        <img style="width: 500px; position:absolute; top:498px; margin-top: 200px;  margin-left: 37em;" id="question "src="img/perguntas.png" alt=""/>
        </main>
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
