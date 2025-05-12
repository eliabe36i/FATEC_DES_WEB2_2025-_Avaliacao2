<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}
require 'classes/DB.php';
$db = new DB();

if ($_POST) {
    $db->removerProduto($_POST['id']);
    echo "Produto removido!";
}
?>

<form method="POST">
    ID do Produto: <input name="id"><br>
    <input type="submit" value="Remover">
</form>