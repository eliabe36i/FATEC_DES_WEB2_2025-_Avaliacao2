<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}
?>

<h1>Bem-vindo!</h1>
<a href="cadastrar.php">Cadastrar Produto</a><br>
<a href="remover.php">Remover Produto</a><br>
<a href="visualizar.php">Visualizar Produtos</a><br>
<a href="logout.php">Logout</a>