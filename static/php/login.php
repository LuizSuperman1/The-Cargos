<?php

if (isset($_POST['user']) || isset($_POST['senha'])) {

    if (strlen($_POST['user']) == 0) {
        echo "Preencha o usuário";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha a senha";
    } else {
        $user = $_POST['user'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM admin WHERE user = '$user' AND senha = '$senha'";
        $sql_query = sqlsrv_prepare($conn, $sql_code);

        if (sqlsrv_execute($sql_query)) {
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['user'] = $user;

            header("Location: ./templates/produto-view.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos!";
        }
    }
}