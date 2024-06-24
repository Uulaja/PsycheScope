<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    // Sanitize the input to prevent SQL injection
    $username = htmlspecialchars(trim($_POST['username']));

    // Store the username in the session
    $_SESSION['username'] = $username;
    $_SESSION['question_index'] = 0;
    $_SESSION['answers'] = [];

    // Insert the username into the database
    $stmt = $pdo->prepare("INSERT INTO user (username) VALUES (:username)");
    $stmt->execute(['username' => $username]);
    $_SESSION['user_id'] = $pdo->lastInsertId();

    // Redirect to start the test
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start MBTI Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #ffe0b3, #ffcc99);
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        h1 {
            color: #703b1a;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 1.2em;
            color: #703b1a;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #703b1a;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #a0522d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>MBTI Test</h1>
        <form action="user.php" method="POST">
            <div class="form-group">
                <label for="username">Enter your name:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <button type="submit">Start Test</button>
        </form>
    </div>
</body>
</html>
