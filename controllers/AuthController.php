<?php

require_once __DIR__ . '/../models/User.php';

class AuthController {

    private $userModel;

    public function __construct($pdo) {

        $this->userModel = new User($pdo);
    }

    public function register($name, $email, $password) {

        if ($this->userModel->emailExists($email)) {

            $_SESSION['error'] = "Email already registered.";

            header("Location: ../views/register.php");
            exit();
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $this->userModel->createUser(
            $name,
            $email,
            $passwordHash
        );

        $_SESSION['success'] = "Account created successfully.";

        header("Location: ../views/login.php");
        exit();
    }

    public function login($email, $password) {

        $user = $this->userModel->findByEmail($email);

        if (!$user || !password_verify($password, $user['password'])) {

            $_SESSION['error'] = "Invalid email or password.";

            header("Location: ../views/login.php");
            exit();
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        header("Location: ../views/dashboard.php");
        exit();
    }
}