<?php

$dbHost ='Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ppa';
$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die ('Erro ao conectar com banco de dados');

$turmaChamada = $_GET["turma"];
$idChamada = $_GET["id"];

$sqlChamada = "UPDATE $turmaChamada SET frequencia = frequencia + 1 WHERE id = $idChamada"; 
mysqli_query($conexao, $sqlChamada) or die ("Erro ao executar, confirme o nome da turma e tente novamente");
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
            <h1>Presença Adicionada</h1>

            <form name="chamada-3" action="chamada-2.php" method="POST">
            
                <input display="none" type="hidden" id="nomeTurma" name="nomeTurma" value =<?=$turmaChamada?> >

            

            <div class="justify-center">
                <button id="botao">Clique para continuar a chamada</button>
            </div>
            

        </div>
    </div>



        </div>
    </div>
</form>
</body>
</html>



