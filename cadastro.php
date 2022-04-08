
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
<form name="cadastro" action="cadastrar.php" method="POST">
    <div class="container">
        <div class="card">
            <h1>Cadastrar</h1>

            <div id="msgErro"></div>
            <div id="msgSucesso"></div>

            <div class="label-float">
                <input type="text" id="nome" name="nome" placeholder="" required>
                <label id="labelNome" for="nome">Nome Completo</label>
            </div>

            <div class="label-float">
                <input type="password" id="senha" name="senha" placeholder="" required>
                <label id="labelSenha" for="senha">Senha</label>
                <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
            </div>

            <div class="label-float">
                <input type="password" id="confirmSenha" name="confirmSenha" placeholder="" required>
                <label id="labelConfirmSenha" for="confirmSenha">Confirmar Senha</label>
                <i id="verConfirmSenha" class="fa fa-eye" aria-hidden="true"></i>
            </div>


            <div class="label-float">
                <select class="dropdown" id="area" name="area">
                    <option>Selecione</option>
                    <option  value="mecanica">Metalmecânica</option>
                    <option  value="eletrica">Elétrica</option>
                    <option  value="caldeiraria">Caldeiraria</option>
                    <option  value="info">Informática</option>               
                </select>
                <label id="labelArea" for="area">Selecione a área de atuação</label>
            </div>


            <div class="label-float">
                <input type="text" id="registro" placeholder="" name="registro" maxlength="6" required>
                <label id="labelRegistro" for="registro">Número de Registro do Professor</label>
            </div>

            <div class="label-float">
                <input type="text" id="verificador" placeholder="" name="verificador" maxlength="3" required>
                <label id="labelVerificador" for="verificador">Código Verificador</label>
            </div>



            <div class="justify-center">
                <button id="botao"  onclick='cadastrar()'>Cadastrar</button>
            </div>
            

        </div>
    </div>
    <script src="_javascript/cadastro.js"></script>
</form>
</body>
</html>