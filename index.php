<?php
require_once 'controllers/ProdutoController.php';

// Проверяем, какое действие запросил пользователь, по умолчанию — список продуктов
$action = isset($_GET['action']) ? $_GET['action'] : 'produtos';
$controller = new ProdutoController();

switch ($action) {
    case 'produtos':
        $controller->index();
        break;
    case 'store_produto':
        $controller->store();
        break;
    case 'delete_produto':
        $controller->delete();
        break;
    default:
        $controller->index();
        break;
}
?>