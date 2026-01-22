<?php
session_start();

// Подключение к PostgreSQL
$host = "pg";
$dbname = "studs";
$user = "s368753";
$pass = "8nyIPy9Zu7lSzEyO";

try {
    $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка подключения: " . $e->getMessage());
}
?>