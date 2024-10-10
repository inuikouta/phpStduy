<?php
require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);

foreach($random_numbers as $index) {
    $options[] = $status_codes[$index];
}

$question = $options[mt_rand(0,3)];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php04">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <form action="./result.php" class="problem__wrapper" method="post">
            <div class="problem__question">
                <p>Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p><?php echo ($question['description']) ?></p>
            </div>
            <div class="problem__answer">
                <input type="hidden" name="answer_code" value="<?php echo ($question['code']) ?>">
                <?php foreach($options as $option):?>
                <div class="problem__answer__group">
                    <input type="radio" id="<?php echo ($option['code']) ?>" name="option" value="<?php echo ($option['code']) ?>" class="problem__answer__radio-btn">
                    <label for="<?php echo ($option['code']) ?>" class="problem__answer__label"><?php echo ($option['code']) ?></label>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="problem__answer__btn">
                <input type="submit" value="回答" class="problem__answer__btn-submit">
            </div>
        </form>
    </main>
</body>
</html>