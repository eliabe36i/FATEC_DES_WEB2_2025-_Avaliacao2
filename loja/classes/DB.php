<?php
class DB {
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=loja", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public function cadastrarProduto($nome, $preco, $descricao, $categoria) {
        $stmt = $this->pdo->prepare("INSERT INTO produtos (nome, preco, descricao, categoria) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nome, $preco, $descricao, $categoria]);
    }

    public function removerProduto($id) {
        $stmt = $this->pdo->prepare("DELETE FROM produtos WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function listarProdutos() {
        $stmt = $this->pdo->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>