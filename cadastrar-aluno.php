<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPA - Soluções em Educação</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo-cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    
</head>
<body>
<form name="cadastro" action="cadastrar-aluno-act.php" method="POST">
    <div class="container">
        <div class="card">
            <h1>Cadastrar Aluno</h1>

            <div id="msgErro"></div>
            <div id="msgSucesso"></div>

            <div class="label-float">
                <input type="text" id="nome" name="nome" placeholder="" required>
                <label id="labelNome" for="nome">Nome Completo</label>
            </div>

            <div class="label-float">
                <input type="text" id="turma" name="turma" placeholder="" required>
                <label id="labelTurma" for="turma">Turma</label>
            </div>

            <div class="justify-center">
                <button type="submit" id="botao"  onclick='cadastrarAluno()'>Cadastrar Aluno</button>
            </div>
            

        </div>
    </div>
    <script src="_javascript/aluno.js"></script>
</form>
</body>
</html>