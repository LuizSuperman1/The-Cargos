<?php

if (!isset($_SESSION)) {
    session_start();
  }

if (!isset($_SESSION['Id_Adm'])) {
    die("<p style=\"text-align:center;margin-top:20vh\">Você não pode acessar esta página porque não está logado.</p><p style=\"text-align:center;\"><a href=\"admlogin.php\">Entrar</a></p>");
}