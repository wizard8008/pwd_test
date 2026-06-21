<?php
class Produto {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function readAll() {
        return $this->db->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ref, $desc, $preco) {
        $stmt = $this->db->prepare("INSERT INTO produtos (referencia, descricao, preco_unitario) VALUES (?, ?, ?)");
        return $stmt->execute([$ref, $desc, $preco]);
    }

    // НОВЫЙ МЕТОД: Удаление
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM produtos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>