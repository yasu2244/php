<?php

require_once('config/status_codes.php');

$random_indexes = array_rand($status_codes, 4);   // ランダムに4つのデータを取得
foreach ($random_indexes as $index) {  
           // foreach 文を用いてシャッフルされた配列から4回新しい配列に代入する。
     $options[] = $status_codes[$index];
     // ランダムに取得された配列のキー0 〜 3 番目の要素を、新しく作成した配列に代入して選択肢用の配列を作成
}
$question = $options[mt_rand(0, 3)];          // [0から3]の4つの数字からランダムに返す。つまり上記でランダムで取得された4つの中からmt_rand関数でランダムに1つ選びそれが答えとする
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question['description'] ?>
                </p>
            </div>
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" value="<?php echo $question['code'] ?>">
                <div class="quiz-form__item">
                    <?php foreach ($options as $option): ?> 
                        <!-- $optionsで取得した4つのデータ(1つは正解)を取得した数だけ(4回)繰り返す -->
                    <div class="quiz-form__group">
                        <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
                        <label class="quiz-form__label" for="<?php echo $option['code'] ?>">
                        <?php echo $option['code'] ?>
                        <!-- 実際に表示される選択肢 -->
                        </label>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>