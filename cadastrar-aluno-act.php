<?php

    $dbHost ='Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'ppa';
    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die ('Erro ao conectar com banco de dados');

    $nome = $_POST['nome'];
    $turma = $_POST['turma'];

    $sql = "INSERT INTO $turma VALUES (null, '$turma', '$nome', 0, 0, 0, 0, 0)";
    mysqli_query($conexao,$sql) or die ("Turma inválida, por favor, digite uma turma que esteja no banco de dados" .$conexao->connect_error);

        
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
            <h1>Aluno cadastrado com sucesso!</h1>

            <div class="justify-center"><p>
            <a href="http://localhost/plataforma/cadastrar-aluno.php">Clique aqui</a> para inserir alunos na turma, ou<a href="http://localhost/plataforma/main.php"> clique aqui </a>para voltar a página principal </p>
            </div>
            

        </div>
    </div>
</form>
</body>
</html>
