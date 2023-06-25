<?php
    if (!isset ($_COOKIE["username"])){ //exclamacao negando afirmacao, se nao estiver logado ira voltar pra pagina inicial
        header ("Location: ../index.php");
        exit;
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="stylechat.css">
    </head>
    <body>
        <div class="barra">
            <p class="escrita"><strong>Discord</strong></p>
        </div>
        <div class="conteudo">
            <div class="servidores">
                <div class="servers">
                    <img class="logo" src="./imgchat/logo.png"/>
                    <img class="barrinha" src="./imgchat/barrinha.png"/>
                    <a href="https://twitter.com/ericklaus24" target="_blank">
                        <img class="ga" src="./imgchat/steve.png"/>
                    </a>
                    <img class="gaules" src="./imgchat/gaules.jpg"/>
                    <img class="botoeserver" src="./imgchat/botoeserver.png"/>
                </div>
            </div>
            <div class="grande">
                <div class="amigos">
                    <input type="text" name="username" class="procurar" placeholder="Encontre ou comece uma conversa"/><br/>
                    <img class="maisbotoes" src="./imgchat/maisbotoes.png"/>                             
                    <div class="amigo">                
                        <img class="imagem" src="./imgchat/eric.jpeg"/>
                        <p class="eric">Eric Klaus</p>
                    </div>
                    <div class="amigo">
                        <img class="imagem" src="./imgchat/matrix.jpg"/>
                        <p class="matrix">matrix292</p>
                    </div>
                    <div class="amigo">
                        <img class="imagem" src="./imgchat/sherlock.jpeg"/>
                        <p class="sherlock">Sherlock</p>
                    </div>
                </div>
                <div class="perfil">
                    <img class="agilizar" src="./imgchat/agilizar.png"/>
                </div>
            </div>
            <div class="chat">
                <img class="fotoeric" src="./imgchat/eric.jpeg"/>
                <p class="nomechat">Eric Klaus</p>
                <p class="filetinho"></p>
                <p class="nomechat2">VULGO</p>
                <p class="nomechat3">O Erick, Emo</p>
                <input type="text" name="buscar" class="buscar" placeholder="Buscar"/>
                <img class="botoeschat" src="./imgchat/botoeschat.png"/>
                <img class="botoeschatplus" src="./imgchat/botoeschatplus.png"/>
                <img class="bolinha" src="./imgchat/bolinha.png"/>
                <p class="filete"></p>
                <img class="foto1pato" src="./imgchat/pato.jpg"/>
                <p class="nome1pato">Pato</p>
                <p class="horario1pato">Hoje às 19:04</p>
                <p class="texto1pato">Bora dbd</p>
                <img class="foto1eric" src="./imgchat/eric.jpeg"/>
                <p class="nome1eric">Eric Klaus</p>
                <p class="horario1eric">Hoje às 19:05</p>
                <p class="texto1eric">sem dbd hj</p>
                <p class="texto2eric">bora persona 8 coop</p>
                <p class="texto3eric">lançou hj acho q ta mt bom</p>
                <img class="foto2pato" src="./imgchat/pato.jpg"/>
                <p class="nome2pato">Pato</p>
                <p class="horario2pato">Hoje às 19:04</p>
                <img class="meme" src="./imgchat/nerdfacecover.jpg"/>
                <p class="texto2pato">que isso bro</p>
                <p class="texto3pato">what desde qnd vc gosta</p>
                <img class="foto2eric" src="./imgchat/eric.jpeg"/>
                <p class="nome2eric">Eric Klaus</p>
                <p class="horario2eric">Hoje às 19:06</p>
                <p class="texto4eric">joguei sem te contar meses atras toda a franquia... e acabei gostando muito</p>
                <input type="text" name="mensagens" class="mensagens" placeholder="Conversar em @Eric Klaus"/>
                <img class="maislogo" src="./imgchat/maislogo.png"/>
                <img class="logofinalchat" src="./imgchat/logofinalchat.png"/>
            </div>
        </div>
    </body>
</html>