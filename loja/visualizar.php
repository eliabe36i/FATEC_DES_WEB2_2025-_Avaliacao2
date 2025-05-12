<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}
require 'classes/DB.php';
$db = new DB();
$produtos = $db->listarProdutos();

foreach ($produtos as $p) {
    echo "<hr>";
    echo "ID: " . $p['id'] . "<br>";
    echo "Nome: " . $p['nome'] . "<br>";
    echo "Preço: " . $p['preco'] . "<br>";
    echo "Descrição: " . $p['descricao'] . "<br>";
    echo "Categoria: " . $p['categoria'] . "<br>";
}
?>