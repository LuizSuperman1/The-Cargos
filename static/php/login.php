<?php

session_start();
include('conexao.php');

if (isset($_POST['user']) || isset($_POST['senha'])) {

    if (strlen($_POST['user']) == 0) {
        echo "<script>alert('Preencha o usuário!')</script>";
        echo "<script>location.href='/the_cargos/index.php'</script>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<script>alert('Preencha a senha!')</script>";
        echo "<script>location.href='/the_cargos/index.php'</script>";
    } else {
        $user = $_POST['user'];
        $senha = $_POST['senha'];

        $sql_code = "SELECT * FROM admin WHERE Email = '$user' AND Senha = '$senha'";
        $sql_query = $conn->prepare($sql_code);
        $sql_query->execute();
        $dados = $sql_query->fetch(PDO::FETCH_ASSOC);

        if ($dados['Acesso'] == '1') {
            $_SESSION['logado'] = 'sim';
            $_SESSION['Acesso'] = $dados['Acesso'];
            print "<script>alert('O login foi um sucesso! Seja bem-vindo ADM!')</script>";
            print "<script>location.href='/the_cargos/templates/gerente.php'</script>";
        } else if ($dados['Acesso'] == '2') {
            print "<script>alert('Você não tem permissão para acessar essa página!')</script>";
            print "<script>location.href='/the_cargos/index.php'</script>";
        } else {
            print "<script>alert('Falha ao logar! E-mail ou senha incorretos!')</script>";
            print "<script>location.href='/the_cargos/index.php'</script>";
        }
    }
}