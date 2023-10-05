<?php

if (!isset($_SESSION)) {
  session_start();
}

if (!$_SESSION['logado'] == 'sim') {
  die("<p style=\"text-align:center;margin-top:20vh\">Você não pode acessar esta página porque não está logado.</p><p style=\"text-align:center;\"><a href=\"/the_cargos/index.php\">Entrar</a></p>");
}