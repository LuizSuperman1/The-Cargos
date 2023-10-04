<?php

if(isset($_POST['user']) || isset($_POST['senha'])) {

    if (strlen($_POST['user']) == 0) {
        echo "Preencha o usuário";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha a senha";
    } else {
        $user = $_POST['user'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM admin WHERE user = '$user' AND senha = '$senha'";
        $sql_query = $conn->prepare($sql_code);
        $sql_query->execute();

        if($sql_query) {
            $adm = $sql_query->fetch(PDO::FETCH_ASSOC);
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['user'] = $_POST['user'];

            header("Location: /the_cargos/templates/produto-view.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos!";
        }
    }
}