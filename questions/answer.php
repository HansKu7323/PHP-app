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
</head>
<body>
  <h2>クゥイズの結果</h2>
  <?= $result ?>
  
</body>
</html>