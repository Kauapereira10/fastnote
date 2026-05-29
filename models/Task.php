<?php

class Task {

    private $pdo;

    public function __construct($pdo) {

        $this->pdo = $pdo;
    }

    public function create($title, $description, $status, $userId) {

        $stmt = $this->pdo->prepare("
            INSERT INTO tasks (
                title,
                description,
                status,
                user_id
            )
            VALUES (
                :title,
                :description,
                :status,
                :user_id
            )
        ");

        return $stmt->execute([
            'title' => $title,
            'description' => $description,
            'status' => $status,
            'user_id' => $userId
        ]);
    }

    public function findByUserId($userId) {

        $stmt = $this->pdo->prepare("
            SELECT *
            FROM tasks
            WHERE user_id = :user_id
            ORDER BY created_at DESC
        ");

        $stmt->execute([
            'user_id' => $userId
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {

        $stmt = $this->pdo->prepare("
            SELECT *
            FROM tasks
            WHERE id = :id
            LIMIT 1
        ");

        $stmt->execute([
            'id' => $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $title, $description, $status) {

        $stmt = $this->pdo->prepare("
            UPDATE tasks
            SET
                title = :title,
                description = :description,
                status = :status
            WHERE id = :id
        ");

        return $stmt->execute([
            'title' => $title,
            'description' => $description,
            'status' => $status,
            'id' => $id
        ]);
    }

    public function delete($id) {

        $stmt = $this->pdo->prepare("
            DELETE FROM tasks
            WHERE id = :id
        ");

        return $stmt->execute([
            'id' => $id
        ]);
    }
}