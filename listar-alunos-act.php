<?php

$dbHost ='Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ppa';
$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die ('Erro ao conectar com banco de dados');

$nome = $_POST['nomeTurma'];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PPA - Soluções em Educação</title>
<link rel="stylesheet" type="text/css" href="_css/estilo-listar.css">



<body>
    <div class="container">
        <div class="card">
            <h1>Lista de Alunos</h1>
            <table>
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Turma</th>
                    <th>Aluno</th>
                    <th>Frequência</th>
                    <th>Nota P1</th>
                    <th>Nota P2</th>
                    <th>Nota P3</th>
                    <th>Nota P4</th>
                    </tr>
                </thead>
                <tbody>
<?php

$sql = "SELECT * FROM $nome";
$rs = mysqli_query($conexao, $sql) or die ("Erro ao executar, confirme o nome da turma e tente novamente"); 

while ($dados = mysqli_fetch_assoc($rs) ) {


?>
                <tr>
                    <td><?=$dados["id"] ?></td>
                    <td><?=$dados["nomeTurma"] ?></td>
                    <td><?=$dados["nomeAluno"] ?></td>
                    <td><?=$dados["frequencia"] ?></td>
                    <td><?=$dados["p1"] ?></td>
                    <td><?=$dados["p2"] ?></td>
                    <td><?=$dados["p3"] ?></td>
                    <td><?=$dados["p4"] ?></td>
                </tr> 


        <?php
}
        ?>              
                </tbody>
                </table>


            <p><a href="http://localhost/plataforma/main.php">Voltar ao menu principal</a> ou <a href="http://localhost/plataforma/listar-alunos.php">fazer nova consulta</a>
            </p>

        </div>
    </div>
    <script src="_javascript/login.js"></script>  
</form>
</body>
</html>