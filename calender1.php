<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calender</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>
<body class="bg-info">
<div class="container p-5 d-flex justify-content-center">
  <form action="dateact.php">
    <label for="year">西元年入力してください</label>
      <input type="number" name="year" id="year">
    <label for="mont">月入力してください</label>
      <input type="number" name="month" id="month">
      <input type="submit" value="送信">
  </form>
</div>
  
</body>
</html>