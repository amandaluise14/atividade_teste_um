<?php
 // Inicia a sessão atual para que ela possa ser manipulada
    session_start();
// Remove todos os dados na sessão
    session_destroy();
// Redireciona para a página inicial
    header("Location: ../index.php");
    exit();
?>