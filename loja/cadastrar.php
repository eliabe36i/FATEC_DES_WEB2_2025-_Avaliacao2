<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}
require 'classes/DB.php';
$db = new DB();

if ($_POST) {
    $db->cadastrarProduto($_POST['nome'], $_POST['preco'], $_POST['descricao'], $_POST['categoria']);
    echo "Produto cadastrado com sucesso!";
}
?>

<form method="POST">
    Nome: <input name="nome"><br>
    Preço: <input name="preco"><br>
    Descrição: <input name="descricao"><br>
    Categoria: <input name="categoria"><br>
    <input type="submit" value="Cadastrar">
</form>