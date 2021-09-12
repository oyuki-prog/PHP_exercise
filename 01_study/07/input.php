<?php
$name = '';
$age = '';
$err_messages = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    if (empty($name)) {
        $err_messages[] = '氏名を入力して下さい';
    }

    if (empty($age)) {
        $err_messages[] = '年齢を入力して下さい';
    }

    if ($name && $age) {
        header('Location: thankyou.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>個人情報送信</h1>
    <?php if ($err_messages): ?>
        <h2>エラーメッセージ</h2>
        <ul>
            <?php foreach ($err_messages as $err_message): ?>
                <li><?= $err_message ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="POST">
        <div>
            <label for="name">氏名</label><br>
            <input type="text" name="name" id="name" value="<?= $name ?>">
        </div>
        <div>
            <label for="age">年齢</label><br>
            <input type="text" name="age" id="age" value="<?= $age ?>">
        </div>
        <div class="submit">
            <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>