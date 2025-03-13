<?php
class UserModel {
    private $file = __DIR__ . '/../storage/users.json'; // JSON file path

    public function getUsers() {
        return json_decode(file_get_contents($this->file), true) ?: [];
    }

    public function saveUsers($users) {
        file_put_contents($this->file, json_encode($users, JSON_PRETTY_PRINT));
    }

    public function addUser($name, $email) {
        $users = $this->getUsers();
        $users[] = ['name' => $name, 'email' => $email];
        $this->saveUsers($users);
    }

    public function updateUser($index, $name, $email) {
        $users = $this->getUsers();
        if (isset($users[$index])) {
            $users[$index] = ['name' => $name, 'email' => $email];
            $this->saveUsers($users);
        }
    }

    public function deleteUser($index) {
        $users = $this->getUsers();
        if (isset($users[$index])) {
            array_splice($users, $index, 1);
            $this->saveUsers($users);
        }
    }
}
?>

