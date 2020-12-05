<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>lOGIN</title>
        <link href="css/LOGIN.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css2?family=Arimo&family=Gruppo&family=Gupter:wght@400;500&family=Source+Code+Pro:ital,wght@1,500&display=swap" rel="stylesheet">
        <script src="js/Login.js" type="text/javascript"></script>
    </head>
    <body>
      
        <img id="gradiente" src="img/ondatwo.png" alt=""/>
            <div id="logotipo">
             <img src="img/logo header.png" alt=""/><br/>
            <span>TechOneHub</span>
        </div>  
        <div id="login"
        
        <table>
            <tr>
                <td id="ladodireito"><img src="img/homemlogin.png" alt=""/><br/>
                    
                <td/> 
            </tr>
        </table>
             <div id="credenciais">
             <form name="form" action="Loginsistema.php" method="post">
                 <span>Login</span><input type="text" id="usuario" name="usuario"/> <br/>
             <span>Senha</span><input type="password" id="senha" name="senha"/><br/>
            
             <input  id="logar" type="submit" value="Login" name="login">
             <input  id="limpar" type="reset" value="Limpar" name="Limpar" onClick="limpar()">
             <input  id="Sair" type="button" value="Sair" name="Sair">
             </form>
            </div>
    </div>
        
    </body>
</html>
