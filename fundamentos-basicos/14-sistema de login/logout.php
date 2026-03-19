<?php
// Inicia a sessão
session_start();

// Remove todas as variáveis da sessão
session_unset();

// Destrói completamente a sessão
session_destroy();

// Redireciona para a tela de login
header("Location: index.php");
?>
