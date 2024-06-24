<?php
session_start();
include 'config.php';
include 'fungsi.php';

$question_id = $_SESSION['current_question'];
$question = getQuestionById($pdo, $question_id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST['answer'];
    $_SESSION['answers'][$question_id] = $answer;

    // Pindah ke pertanyaan berikutnya
    $next_question_id = $question_id + 1;

    // Cek apakah ada pertanyaan berikutnya
    $next_question = getQuestionById($pdo, $next_question_id);
    if ($next_question) {
        $_SESSION['current_question'] = $next_question_id;
        header('Location: question.php');
        exit();
    } else {
        header('Location: mbti.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBTI Test</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>MBTI Test</h1>
        <form method="POST">
            <div class="question">
                <p><?php echo htmlspecialchars($question['question']); ?></p>
                <label>
                    <input type="radio" name="answer" value="<?php echo htmlspecialchars($question['option1']); ?>" required>
                    <?php echo htmlspecialchars($question['keterangan1']); ?>
                </label>
                <label>
                    <input type="radio" name="answer" value="<?php echo htmlspecialchars($question['option2']); ?>">
                    <?php echo htmlspecialchars($question['keterangan2']); ?>
                </label>
            </div>
            <button type="submit"><?php echo $question_id == count(getQuestions($pdo)) ? 'Submit' : 'Next'; ?></button>
        </form>
    </div>
</body>
</html>
