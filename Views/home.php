<?php

//Verificando se o usuário está logado.
/*if(!isset($_SESSION["usuario_logado"]))
    header("Location: login.php");


// Para fazer o logout (sair)
if(isset($_GET["sair"])) {
    unset($_SESSION["usuario_logado"]);
    header("Location: login.php");
}*/

?>
<html>
    <head>
        <title>Sistema</title>
        
        <?php include PATH_VIEW . 'includes/css_config.php' ?>

    </head>
    <body>
        <?php include 'includes/cabecalho.php' ?>

        <main>
            tela inicial.
        </main>

        <?php include 'includes/rodape.php' ?>

        <?php include PATH_VIEW . 'includes/js_config.php' ?>
    </body>
</html>