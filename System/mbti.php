<?php
session_start();
include 'config.php';

if (!isset($_SESSION['answers'])) {
    header('Location: user.php');
    exit();
}

$answers = $_SESSION['answers'];
$result = calculateMBTI($answers);

// Update the database with the result
$stmt = $pdo->prepare("UPDATE user SET mbti_result = :mbti_result WHERE id = :id");
$stmt->execute(['mbti_result' => $result, 'id' => $_SESSION['user_id']]);

header("Location: showmbti.php?type=$result");
exit();

// Fungsi untuk menghitung MBTI
function calculateMBTI($answers) {
    $score = ['E' => 0, 'I' => 0, 'S' => 0, 'N' => 0, 'T' => 0, 'F' => 0, 'J' => 0, 'P' => 0];

    foreach ($answers as $answer) {
        $score[$answer]++;
    }

    $result = "";
    $result .= ($score['E'] >= $score['I']) ? 'E' : 'I';
    $result .= ($score['S'] >= $score['N']) ? 'S' : 'N';
    $result .= ($score['T'] >= $score['F']) ? 'T' : 'F';
    $result .= ($score['J'] >= $score['P']) ? 'J' : 'P';

    return $result;
}
?>
