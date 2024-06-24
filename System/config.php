<?php
$host = 'localhost';
$dbname = 'mbti_test';
$username = 'root';  // Sesuaikan dengan user database Anda
$password = '';      // Sesuaikan dengan password database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
