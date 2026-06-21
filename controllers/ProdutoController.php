<?php
require_once 'config/database.php';
require_once 'models/Produto.php';

class ProdutoController {
    private $model;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->model = new Produto($db);
    }

    public function index() {
        $produtos = $this->model->readAll();
        require_once __DIR__ . '/../views/produtos/index.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST['referencia'], $_POST['descricao'], $_POST['preco_unitario']);
            header("Location: index.php?action=produtos");
            exit();
        }
    }

    // НОВЫЙ МЕТОД: Логика удаления
    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->delete($_GET['id']);
        }
        header("Location: index.php?action=produtos");
        exit();
    }
}
?>