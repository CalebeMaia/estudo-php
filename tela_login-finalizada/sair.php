<?php 
// vamos destruir a sessão
//primeiro devemos star ta a sessão
session_start();
unset($_SESSION['id_usuario']); // unset destruir a sessão
header("location:index.php");// direciona para pagina de login

?>