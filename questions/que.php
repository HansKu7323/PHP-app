<?php
$title = '薔薇の正しい読み方を答えてください';

$question = array('ばら','さく','ひまわり','アジサイ');

// $answer = 'リザードン';
$answer = $question[0];

shuffle($question);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クイズアプリ</title>
</head>
<body>
  <h2><?= $title ?></h2>
  <form method="post" action="answer.php">
    <?php foreach($question as $value){ ?>
        <input type="radio" name="question" value="<?= $value; ?>"> <?= $value; ?> <br>
    <?php } ?>

    <input type="hidden" name="answer" value="<?= $answer ?>">
    <input type="submit" value="送信"><br>

  
  
  
  </form>

  
</body>
</html>