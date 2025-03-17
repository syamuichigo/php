<?php
require_once("config/status_codes.php");
$answer_code = htmlspecialchars($_POST["answer_code"],ENT_QUOTES);
$option = htmlspecialchars($_POST["option"],ENT_QUOTES);
if(!$option){
    header("location: index.php");
}
foreach($status_codes as $status_code){
    if($status_code["code"] === $answer_code){
        $code = $status_code["code"];
        $description = $status_code["description"];
        $meaning = $status_code["meaning"];
    }
}
$result = $option === $code;
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
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="index.html" class="header__logo">悪魔の実クイズ‼</a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
                <?php if($result):?>
                <h2 class="result__text--correct">正解</h2>
                <?php else:?>
                <h2 class="result__text--incorrect">不正解</h2>
                <?php endif;?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">答え</th>
                        <td class="answer-table__text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">問題</th>
                        <td class="answer-table__text">
                            <?php echo $description ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">解説</th>
                        <td class="answer-table__text">
                            <?php echo $meaning ?>
                        </td>
                    </tr>
                </table>
            </div>
            <a href="index.php" class="result-back">次の問題</a>
        </div>
    </main>