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

    $id = $_POST['id'];

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $status = trim($_POST['status']);

    $taskController->updateTask(
        $id,
        $title,
        $description,
        $status,
        $_SESSION['user_id']
    );

    $_SESSION['success'] = "Tarefa atualizada com sucesso!";

    header("Location: ../views/dashboard.php");
    exit();
}

?>