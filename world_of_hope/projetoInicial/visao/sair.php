<?php
//Destruindo sessão para efetuar o logoff
session_start();
unset($_SESSION["nome"]);
unset($_SESSION["login"]);
unset($_SESSION["perfil"]);
session_destroy();

header("location:login.php");