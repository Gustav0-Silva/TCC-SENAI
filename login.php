<?php
$dbHost ='Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'ppa';
$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName) or die ('Erro ao conectar com banco de dados');


if(isset($_POST['registro']) || isset($_POST['senha'])) {

    if(strlen($_POST['registro']) == 0) {
        echo "Preencha seu registro";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $registro = $conexao->real_escape_string($_POST['registro']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE registro = '$registro' AND senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            header('Location: main.php');

        } else {
            echo "Falha ao logar! Registro ou senha incorretos";
        }

    }

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Entrar</h1>
            <form action="" method="POST">
            <div class="label-float">
                <input type="text" id="registro" placeholder="" name="registro" maxlength="6" required>
                <label for="usuario">Número de Registro</label>
            </div>

            <div class="label-float">
                <input type="password" id="senha" placeholder="" name="senha" required>
                <label for="usuario">Senha</label>
                <i id="verSenha" class="fa fa-eye" aria-hidden="true"></i>
            </div>

            <div class="justify-center">
                <button type="submit">Entrar</button>
            </div>

            <div class="justify-center">
                <hr>
            </div>

            <p>Professor não cadastrado?
                <a href="http://localhost/plataforma/cadastro.php">Clique aqui</a>
            </p>

        </div>
    </div>
    <script src="_javascript/login.js"></script>  
</form>
</body>
</html>