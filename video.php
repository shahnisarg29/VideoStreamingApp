<?php
session_start();

$iframe = isset($_SESSION['iframe']) ? $_SESSION['iframe'] : '';

// Clear the session variable
unset($_SESSION['iframe']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VideoStreamingApp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        iframe {
            width: 100%;
            height: 500px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your Video</h2>
        <?php if (!empty($iframe)): ?>
            <?php echo $iframe; ?>
        <?php else: ?>
            <p>No iframe code stored in memory.</p>
        <?php header("Location: index.php"); endif; ?>
    </div>
</body>
</html>
