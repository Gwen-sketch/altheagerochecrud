<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        $users = $this->userModel->getUsers();
        include __DIR__ . '/../views/index.php';
    }

    public function create() {
        include __DIR__ . '/../views/create.php';
    }

    public function store() {
        $this->userModel->addUser($_POST['name'], $_POST['email']);
        header("Location: router.php");
        exit;
    }

    public function edit($index) {
        $users = $this->userModel->getUsers();
        if (!isset($users[$index])) {
            die("User not found.");
        }
        $user = $users[$index];
        include __DIR__ . '/../views/update.php';
    }

    public function update($index) {
        $this->userModel->updateUser($index, $_POST['name'], $_POST['email']);
        header("Location: router.php");
        exit;
    }

    public function delete($index) {
        include __DIR__ . '/../views/delete.php';
    }

    public function destroy($index) {
        $this->userModel->deleteUser($index);
        header("Location: router.php");
        exit;
    }
}
?>
