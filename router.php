<?php
require_once __DIR__ . '/controllers/UserController.php';

$controller = new UserController();

$action = $_GET['action'] ?? 'index';
$index = $_GET['index'] ?? null;

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'edit':
        $controller->edit($index);
        break;
    case 'update':
        $controller->update($index);
        break;
    case 'delete':
        $controller->delete($index);
        break;
    case 'destroy':
        $controller->destroy($index);
        break;
    default:
        $controller->index();
        break;
}
?>
