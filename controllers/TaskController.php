<?php

require_once __DIR__ . '/../models/Task.php';

class TaskController {

    private $taskModel;

    public function __construct($pdo) {

        $this->taskModel = new Task($pdo);
    }

    public function createTask($userId, $title, $description, $status) {

        if (empty($title)) {

            $_SESSION['error'] = "Task title is required.";

            header("Location: ../views/create_task.php");
            exit();
        }

        $this->taskModel->create(
            $title,
            $description,
            $status,
            $userId
        );
    }

    public function getTasksByUser($userId) {

        return $this->taskModel->findByUserId($userId);
    }

    public function getTaskById($id, $userId) {

        $task = $this->taskModel->findById($id);

        if (!$task || $task['user_id'] != $userId) {

            $_SESSION['error'] = "Task not found.";

            header("Location: ../views/dashboard.php");
            exit();
        }

        return $task;
    }

    public function updateTask($id, $title, $description, $status, $userId) {

        $task = $this->taskModel->findById($id);

        if (!$task || $task['user_id'] != $userId) {

            $_SESSION['error'] = "Action not allowed.";

            header("Location: ../views/dashboard.php");
            exit();
        }

        $this->taskModel->update(
            $id,
            $title,
            $description,
            $status
        );
    }

    public function deleteTask($id, $userId) {

        $task = $this->taskModel->findById($id);

        if (!$task || $task['user_id'] != $userId) {

            $_SESSION['error'] = "Action not allowed.";

            header("Location: ../views/dashboard.php");
            exit();
        }

        $this->taskModel->delete($id);
    }
}