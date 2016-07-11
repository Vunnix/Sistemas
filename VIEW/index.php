<?php
    include '../DAO/ToFish.php';
    session_start();
    $_SESSION['usuario'] = 'usuario';
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);

    if(isset($_POST['send']) && isset($_SESSION['usuario'])) {
        //chamar função faz o processo de enviar o email com anexo
        echo "askd";
    }
    if(isset($_POST['download']) && isset($_SESSION['usuario'])){
        $download = new ToFish();
        $download->PescarDados();
    }else{
        unset($_SESSION['usuario']);
        unset($_POST['download']);
        unset($_POST['send']);
        session_destroy();
    }
?>

<html>
    <head>
        <title> </title>
        </head>
    <body>
    <form name="enviar_email" method="post">
        <br><br>
        <input type="text" name="email">
        <input type="submit" name="send" value="Enviar o arquivo">
        <br><br>
        <input type="submit" name="download"class="btn btn-sucess" value="Protocolo">
    </form>
    </body>
</html>