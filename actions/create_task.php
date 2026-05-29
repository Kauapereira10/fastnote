<?php

session_start();

require_once '../config/database.php';
require_once '../controllers/TaskController.php';

if (!isset($_SESSION['user_id'])) {

    header("Location: ../views/login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pdo = getConnection();

    $taskController = new TaskController($pdo);

    $userId = $_SESSION['user_id'];

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $status = trim($_POST['status']);

    $taskController->createTask(
        $userId,
        $title,
        $description,
        $status
    );

    $_SESSION['success'] = "Tarefa criada com sucesso!";

    header("Location: ../views/dashboard.php");
    exit();
}

?>