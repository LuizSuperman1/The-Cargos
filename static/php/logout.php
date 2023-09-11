<?php

if (!isset($_SESSION)) {
    session_start();
}

session_destroy();

header("Location: /the_cargos/The-Cargos/templates/admlogin.php");