<?php

    $dbHost ='Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'ppa';
    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die ('Erro ao conectar com banco de dados');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $registro = $_POST['registro'];
    $verificador = $_POST['verificador'];



    $sql = "INSERT INTO usuarios VALUES";
    $sql .= "(null, '$nome', '$senha', '$registro', '$verificador')";
    mysqli_query($conexao,$sql) or die ("Erro ao cadastrar");
    mysqli_close($conexao);
    
    ?>
    
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPA - Soluções em Educação</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo-login.css">

</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Professor cadastrado com sucesso!</h1>

            <div class="justify-center"><p>
            <a href="http://localhost/plataforma/login.php">Clique aqui</a> para voltar a tela de login</p>
            </div>
            

        </div>
    </div>
</form>
</body>
</html>