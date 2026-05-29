<?php

session_start();

require_once '../config/database.php';
require_once '../controllers/TaskController.php';

if (!isset($_SESSION['user_id'])) {

    header("Location: ../views/login.php");
    exit();
}

if (isset($_GET['id'])) {

    $pdo = getConnection();

    $taskController = new TaskController($pdo);

    $taskController->deleteTask(
        $_GET['id'],
        $_SESSION['user_id']
    );

    $_SESSION['success'] = "Tarefa deletada com sucesso!";

    header("Location: ../views/dashboard.php");
    exit();
}

?>