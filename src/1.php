<?php

class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $role;

    public function __construct($id, $name, $email, $password, $role) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }
}

$users = array(
    new User(1, 'John Doe', 'john.doe@example.com', 'password123', 'admin'),
    new User(2, 'Jane Smith', 'jane.smith@example.com', 'password456', 'user')
);

function authenticate($email, $password) {
    global $users;

    foreach ($users as $user) {
        if ($user->getEmail() == $email && $user->getPassword() == $password) {
            return $user;
        }
    }

    return null;
}

$authenticatedUser = authenticate('john.doe@example.com', 'password123');

if ($authenticatedUser != null) {
    echo "Welcome, {$authenticatedUser->getName()}! You are logged in as a {$authenticatedUser->getRole()}.";
} else {
    echo "Invalid login credentials";
}
?>