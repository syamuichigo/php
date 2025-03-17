<?php
require_once("config/status_codes.php");
$random_indexes = array_rand($status_codes,4);
foreach($random_indexes as $index){
    $options[] = $status_codes[$index];
}
$question = $options[mt_rand(0,3)];
?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equvi="X-UA-Compatible" conntent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>悪魔の実4択クイズ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="index.html" class="header__logo">悪魔の実クイズ‼</a>
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">
                    <?php echo $question["description"]?>
                </p>
            </div>
            <form class="quiz-form" method="post" action="result.php">
                <input type="hidden" name="answer_code" value="<?php echo $question["code"]?>">
                <div class="quiz-form__item">
                    <?php foreach ($options as $option) : ?>
                        <div class="quiz-form__group">
                            <input type="radio" name="option" id="<?php echo $option["code"]?>" value="<?php echo $option["code"]?>" class="quiz-form__radio">
                            <label for="<?php echo $option["code"]?>" class="quiz-form__label">
                                <?php echo $option["code"]?>
                            </label>
                        </div>
                        <?php endforeach;?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit">回答</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>