<?php
require __DIR__ . '/dbconnect.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>prepre-development</title>
</head>
<body>
    <h1>PHP + MySQL 動作確認</h1>
    <p><?php echo htmlspecialchars($dbStatus, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>
