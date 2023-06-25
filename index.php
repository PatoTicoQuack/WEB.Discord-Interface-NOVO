<?php 
    session_start();
    if (isset ($_COOKIE["username"])){
        header ("Location: ./HomePage/chat.php");
        exit;
    }
?>
<html>
    <head>
        <style>
            <?php include "style.css" ?>
        </style>
    </head>
    <body background="https://i.pinimg.com/originals/b6/07/6b/b6076bb4df9a3532e01ad33b4e563643.jpg">
        <div class="container">
            <div class="login">
                <form method="post" action="verificacao.php">
                    <p class="texto"><strong>Boas-vindas de volta!</strong></p>
                    <p class="second">Estamos muito animados em te ver novamente!</p>
                    <p class="terc"><label for="username"><strong>E-MAIL OU NÚMERO DE TELEFONE *</strong></label></p>
                    <input type="text" id="username" name="username" class="email"/><br/>
                    <p class="quart"><label for="password"><strong>SENHA *</strong></label></p>
                    <input type="password" id="password" name="password" class="password"/><br/>
                    <a class="quint" href="https://www.youtube.com/watch?v=AHqOT1rCip0" target="_blank">Esqueceu sua senha? *</a><br>
                    <input type="submit" value="Entrar" class="entrar"/><br/>
                    <p class="sext">Precisando de uma conta?<a href="https://www.youtube.com/watch?v=yvPVp7cweOA" target="_blank">Registre-se</a><br></p>
                    <?php 
                        if (isset ($_SESSION["erro"])){
                            $erro = $_SESSION["erro"];
                            echo "<p class='sext'>$erro</p>";
                        }
                    ?>
                </form>
            </div>
        </div>
        <div class="blankspc">
        </div>
    </body>
</html>