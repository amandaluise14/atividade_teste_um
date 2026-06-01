<?php

include("infra/db/connect.php");
// Inclui o arquivo responsável pela conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST"){
// Verifica se o formulário foi enviado utilizando o método POST

 $usuario = $_POST["usuario"];
 $senha = $_POST["senha"];
 // Recebe os dados digitados pelo usuário no formulário

 $sql = "SELECT * FROM users 
 WHERE username = '$usuario'
 AND password = '$senha'";
// Consulta SQL para verificar a existência do usuário

$resultado = $conn -> query($sql);
// Executa a consulta no banco de dados 

 // Verifica se a consulta retornou pelo menos um registro
if($resultado -> num_rows > 0){
    $_SESSION["usuario"] = $usuario;
// Armazena o nome do usuário na sessão

    header("Location: public/home.php");
// Redireciona o usuário para a página inicial

    exit();
}else{
    $erro = "Usuario ou senha inválidos.";
    // Mensagem de erro
}

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com PHP</title>
</head>
<body>
    <h2>Login com PHP</h2>

    <form method="POST">
<!-- Função de realizar o login na página -->
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario">
    <br>
    <br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha">
    <br>
    <br>
    <button type="submit">Entrar</button>

    </form>

</body>
</html>

