<?php

class User {

    private $pdo;

    public function __construct($pdo) {

        $this->pdo = $pdo;
    }

    public function findByEmail($email) {

        $stmt = $this->pdo->prepare("
            SELECT * FROM users
            WHERE email = :email
            LIMIT 1
        ");

        $stmt->execute([
            'email' => $email
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email, $password) {

        $stmt = $this->pdo->prepare("
            INSERT INTO users (name, email, password)
            VALUES (:name, :email, :password)
        ");

        return $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function emailExists($email) {

        $stmt = $this->pdo->prepare("
            SELECT COUNT(*)
            FROM users
            WHERE email = :email
        ");

        $stmt->execute([
            'email' => $email
        ]);

        return $stmt->fetchColumn() > 0;
    }
}