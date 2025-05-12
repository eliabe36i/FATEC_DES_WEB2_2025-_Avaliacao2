<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario === 'admin' && $senha === 'admin') {
        $_SESSION['logado'] = true;
        header("Location: home.php");
        exit;
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>

<form method="POST">
    Usuário: <input name="usuario"><br>
    Senha: <input name="senha" type="password"><br>
    <input type="submit" value="Entrar">
</form>
