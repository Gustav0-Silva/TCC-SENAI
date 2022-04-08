<?php

    $dbHost ='Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'ppa';
    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die ('Erro ao conectar com banco de dados');

    $nome = $_POST['nomeTurma'];
    $curso = $_POST['curso'];

    $query_create_table = "CREATE TABLE IF NOT EXISTS $nome (
        id int AUTO_INCREMENT PRIMARY KEY,
        nomeTurma varchar(8) NOT NULL,
        nomeAluno varchar (60),
        frequencia int,
        p1 int,
        p2 int,
        p3 int,
        p4 int)"
or die("Erro ao criar tabela ... " . $conexao->connect_error);
$result_create_table = $conexao->query($query_create_table);

if($result_create_table == TRUE)
{
echo "<p>criou a tabela</p>";
}
else
{
echo "<p>nao criou a tabela</p>";
}

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
            <h1>Turma criada com sucesso!</h1>

            <div class="justify-center"><p>
            <a href="http://localhost/plataforma/cadastrar-aluno.php">Clique aqui</a> para inserir alunos na turma</p>
            </div>
            

        </div>
    </div>
</form>
</body>
</html>