<!DOCTYPE html>
<?php

    $conexao = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexao, "bancodedado");
    session_start();

?>
<html lang="pt-br">
  <head>
    
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <meta name = "author" content = "João Pedro">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/normalize.css" />

    <script language="javascript">

      function sucesso(){

        setTimeout("window.location='./php/listar.php'", 4000);

      }

      function failed(){

        setTimeout("window.location='../cadastro.html'", 4000);

      }

    </script>>
  </head>
  <body>
      <?php

        $nome = $_POST['nome_cad'];
        $apelido = $_POST['apelido_cad'];
        $cpf = $_POST['cpf_cad'];
        $sexo = $_POST['sexo_cad'];
        $dataNascimento = $_POST['datanascimento_cad'];
        $estado = $_POST['estado_cad'];
        $email = $_POST['email_cad'];
        $cidade = $_POST['cidade_cad'];
        $cep = $_POST['cep_cad'];
        $telefone = $_POST['telefone_cad'];
        $celular = $_POST['celular_cad'];
        $user = $_POST['usuario_cad'];
        $senha = $_POST['senha_cad'];
        
        $sql = mysqli_query($conexao, "INSERT INTO clientes(nome, apelido, cpf, sexo, dataNascimento, estado, email, cidade, cep, telefone, celular, usuario, senha) VAlUES (
            '$nome', '$apelido', '$cpf', '$sexo', '$dataNascimento', '$estado', '$email', '$cidade', $cep, '$telefone', '$celular', '$user', '$senha');") or die (mysqli_error($conexao));

        $consulta = mysqli_query($conexao, "SELECT * FROM clientes WHERE usuario = '$user';") or die (mysqli_error($conexao));
        
        $linhas = mysqli_num_rows($consulta);
            
        if($linhas == 0){

          echo"O login falhou. Você será redirecionado para a página de login em 4 segundos";
          echo"<script language='javascript'>failed()</script>";

        } else {

          $_SESSION["usuario"]=$_POST["usuario_cad"];
          echo"Cadastro realizado com sucesso. Redirecionando em 4 segundos.";
          echo"<script language='javascript'>sucesso()</script";

        }

      ?>
  </body>
</html>