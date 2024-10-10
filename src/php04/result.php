<?php
require_once('config/status_codes.php');
$answer_code = htmlspecialchars($_POST['answer_code'],ENT_QUOTES);
$option = htmlspecialchars($_POST['option'],ENT_QUOTES);

if (!$option) {
  header('Location: index.php');
}

foreach($status_codes as $status_code) {
    if($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="./index.php" class="header__logo">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="answer__content" >
            <div class="result">
                <?php if($option === $code): ?>
                <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer">
                <table class="answer__item">
                    <tr>
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text"><?php echo($code); ?></td>
                    </tr>
                    <tr>
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text"><?php echo($description); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>