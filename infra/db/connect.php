<?php

session_start();

// Define o endereço do servidor do banco de dados
$host = "localhost";
// Define o usuário utilizado para acessar o banco de dados
$user = "root";
// Define a senha do usuário do banco de dados
$pass = "root";
$db = "sistema_simples";
$conn =new mysqli($host,$user,$pass,$db);

// if($conn -> connect_error){
//     die("Erro na conexão");
// }else{
//     echo ("<p> BD: ok </p>");
// }
?>
<!-- Este arquivo serve para conexão com o banco de dados -->

