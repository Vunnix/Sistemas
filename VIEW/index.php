<?php
    include '../DAO/ToFish.php';
    session_start();
    $_SESSION['usuario'] = 'usuario';

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
    <form name="download_excel" method="post">
        <input type="submit" name="download"class="btn btn-sucess" value="Protocolo">
    </form>
    </body>
</html>