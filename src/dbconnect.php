<?php

$host = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

try {
    $pdo = new PDO("mysql:host={$host};dbname={$dbName};charset=utf8mb4", $user, $password);
    $dbStatus = 'DB接続成功';
} catch (PDOException $e) {
    $dbStatus = 'DB接続失敗: ' . $e->getMessage();
}
