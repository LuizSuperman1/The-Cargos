<?php

if (!isset($_SESSION)) {
  session_start();
}

if (!$_SESSION['Acesso'] == 1) {
  die("<p style=\"text-align:center;margin-top:20vh\">Você precisa entrar como ADM para acessar essa página.</p><p style=\"text-align:center;\"><a href=\"/the_cargos/templates/admlogin.php\">Voltar</a></p>");
}