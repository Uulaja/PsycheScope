<?php
function getQuestions($pdo) {
    $stmt = $pdo->query("SELECT * FROM questions");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getQuestionById($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM questions WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
