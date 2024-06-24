<?php
session_start();
include 'config.php';
include 'fungsi.php';

// Inisialisasi sesi
if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
}

if (!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = 1;
}

header('Location: question.php');
exit();
?>
