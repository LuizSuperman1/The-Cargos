<?php

if (!isset($_SESSION)) {
    session_start();
  }

if (!isset($_SESSION['Id_Adm'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"admlogin.php\">Entrar</a></p>");
}