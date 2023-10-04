<?php

session_start();
include('conexao.php');

if(isset($_POST['user']) || isset($_POST['senha'])) {

    if (strlen($_POST['user']) == 0) {
        echo "<p style=\"text-align:center;margin-top:20vh\">Preencha o usuário.</p><p style=\"text-align:center;\"><a href=\"/the_cargos/index.php\">Voltar</a></p>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<p style=\"text-align:center;margin-top:20vh\">Preencha a senha.</p><p style=\"text-align:center;\"><a href=\"/the_cargos/index.php\">Voltar</a></p>";
    } else {
        $user = $_POST['user'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM admin WHERE User = '$user' AND Senha = '$senha'";
        $sql_query = $conn->prepare($sql_code);
        $sql_query->execute();

        if ($sql_query) {
            $adm = $sql_query->fetch(PDO::FETCH_ASSOC);
            $_SESSION['logado'] = 'sim';

            header("Location: /the_cargos/templates/produto-view.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos!";
        }
    }
}