<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPA - Soluções em Educação</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo-listar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    
</head>
<body>
<form name="chamada-1" action="chamada-2.php" method="POST">
    <div class="container">
        <div class="card">
            <h1>Turma da Chamada</h1>

            <div id="msgErro"></div>
            <div id="msgSucesso"></div>

            <div class="label-float">
                <input type="text" id="nomeTurma" name="nomeTurma" placeholder="" required>
                <label id="labelNomeTurma" for="nomeTurma">Informe o nome da turma</label>
            </div>

            <div class="justify-center">
                <button id="botao"  onclick='criarTurma()'>Buscar</button>
            </div>
            

        </div>
    </div>
    <script src="_javascript/turma-listar.js"></script>
</form>
</body>
</html>