<!DOCTYPE html>
<?php

    $conexao = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexao, "bancodedado");
    session_start();

?>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <title>Listar</title>
        <meta name = "author" content = "João Pedro">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/normalize.css" />

    </head>

    <body>

        <header class = "header-listar">
            
            <li><a href="index.php">Sair</a></li>

            <h1>Lista de Usuário</h1>

        </header>
        
        <div class = "main-listar">
            
            <form>
                
                <?php
                    $sql = mysqli_query($conexao, "SELECT * FROM clientes ") or die (mysqli_error($conexao));
                    $linhas = mysqli_num_rows($sql);
                        
                    while($exibe = $sql->fetch_assoc()){

                        echo '<div class = "listar-2-3">'.
                                    '<p> Nome: '.$exibe['nome'].'</p>'.
                                    '<p> Apelido: '.$exibe['apelido'].'</p>'.
                                    '<p> CPF: '.$exibe['cpf'].'</p>'.
                                    '<p> Sexo: '.$exibe['sexo'].'</p>'.
                                    '<p> Data de Nascimento: '.$exibe['dataNascimento'].'</p>'.
                                    '<p> Estado: '.$exibe['estado'].'</p>'.
                             '</div>'.
                             
                             '<div class = "listar-1-3">'.
                                    '<p> Email: '.$exibe['email'].'</p>'.
                                    '<p> Cidade: '.$exibe['cidade'].'</p>'.
                                    '<p> CEP: '.$exibe['cep'].'</p>'.
                                    '<p> Telefone: '.$exibe['telefone'].'</p>'.
                                    '<p> Celular: '.$exibe['celular'].'</p>'.
                                    '<p> Usuário: '.$exibe['usuario'].'</p>'.
                            '</div>';
                            

                    }
                        
                ?>   

            </form>   

            <p><a href="../cadastro.html"><input type="submit" value="Cadastrar"></a></p>

        </div>
    </body>
</html>
