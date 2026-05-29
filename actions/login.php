<?php

session_start();

require_once '../config/database.php';
require_once '../controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pdo = getConnection();

    $authController = new AuthController($pdo);

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $authController->login(
        $email,
        $password
    );
}

?>