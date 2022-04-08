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
<form name="criar-turma" action="criar-turma-act.php" method="POST">
    <div class="container">
        <div class="card">
            <h1>Criar Turma</h1>

            <div id="msgErro"></div>
            <div id="msgSucesso"></div>

            <div class="label-float">
                <input type="text" id="nomeTurma" name="nomeTurma" placeholder="" required>
                <label id="labelNomeTurma" for="nomeTurma">Informe o nome da turma</label>
            </div>

            <div class="label-float">
                <input type="text" id="curso" name="curso" placeholder="" required>
                <label id="labelCurso" for="curso">Informe o nome do curso</label>
            </div>

            <div class="label-float">
                <select class="dropdown" id="areaCurso" name="areaCurso">
                    <option>Selecione</option>
                    <option  value="mecanica">Metalmecânica</option>
                    <option  value="eletrica">Elétrica</option>
                    <option  value="caldeiraria">Caldeiraria</option>
                    <option  value="info">Informática</option>               
                </select>
                <label id="labelAreaCurso" for="area">Selecione a área de ensino</label>
            </div>

            <div class="label-float">
                <select class="dropdown" id="periodo" name="periodo">
                    <option>Selecione</option>
                    <option  value="manha">Manhã</option>
                    <option  value="tarde">Tarde</option>
                    <option  value="noite">Noite</option>
                    <option  value="integral">Integral</option>               
                </select>
                <label id="labelArea" for="area">Selecione o período das aulas</label>
            </div>

            <div class="justify-center">
                <button id="botao"  onclick='criarTurma()'>Cadastrar</button>
            </div>
            

        </div>
    </div>
    <script src="_javascript/turma.js"></script>
</form>
</body>
</html>