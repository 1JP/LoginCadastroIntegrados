<!DOCTYPE html>

<?php
    $conexao = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conexao, "bancodedado");
    session_start();
    
    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
        header ("Location: ../login.html");
        exit;
    }
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Index</title>
        <meta name = "author" content = "João Pedro">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/normalize.css" />
    </head>
    <body>

        <p id = "title">Seja fazer o logout?</p>

        <header class = "header-index">
            
            <p><a href="logout.php"><input type="submit" value="Logout"/></a></p>
            <p><a href="listar.php"><input type="submit" value="Não"></a></p>

        </header> 
        

    </body>
</html>