<?php

function getConnection(): PDO {

    $host = "localhost";
    $dbname = "fastnote";
    $user = "root";
    $pass = "";

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    try {

        $pdo = new PDO($dsn, $user, $pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;

    } catch (PDOException $e) {

        die("Connection error: " . $e->getMessage());
    }
}