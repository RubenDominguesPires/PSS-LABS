<?php
// Iniciar a sessão para poder aceder e eliminar as variáveis
session_start();

session_unset();

session_destroy();


header( "refresh:0;url=index.php" ); 
exit();
?>
