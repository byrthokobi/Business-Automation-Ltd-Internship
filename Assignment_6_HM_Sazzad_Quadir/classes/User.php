<?php

class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function authenticate() {
        $users = json_decode(file_get_contents(__DIR__ . '/../data/users.json'), true);

        foreach ($users as $user) {
            if ($user['username'] === $this->username && $user['password'] === $this->password) {
                $_SESSION['user'] = $this->username;
                return true;
            }
        }

        return false;
    }

    public static function isLoggedIn() {
        return isset($_SESSION['user']);
    }

    public static function logout() {
        unset($_SESSION['user']);
    }
}
