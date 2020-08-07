<?php
  $question = $_POST['question'];
  $answer = $_POST['answer'];

  //結果判定
  if($question == $answer){
    $result = '正解';
  }else{
    $result = '不正解';
  }
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クイズ結果</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>
<body>
  <div class="container text-center">
    <h2 class="mt-5">クゥイズの結果</h2>
    <p>
      <?= $result ?>
    </p>
  </div>
</body>
</html>