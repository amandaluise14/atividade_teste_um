<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "sistema_simples";
$conn =new mysqli($host,$user,$pass,$db);

// if($conn -> connect_error){
//     die("Erro na conexão");
// }else{
//     echo ("<p> BD: ok </p>");
// }
?>

Está página serve para conectar as páginas 