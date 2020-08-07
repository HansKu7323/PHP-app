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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>
<body class="bg-secondary">
  <div class="container text-center mt-5 px-5 py-5 border bg-white">
    <h2 class="mb-3"><?= $title ?></h2>
    <form method="post" action="answer.php">
      <?php foreach($question as $value){ ?>
          <input class="mb-2" type="radio" name="question" value="<?= $value; ?>"> <?= $value; ?> <br>
      <?php } ?>
      <input type="hidden" name="answer" value="<?= $answer ?>">
      <input type="submit" value="送信"><br>
    </form>
  </div>

  
</body>
</html>