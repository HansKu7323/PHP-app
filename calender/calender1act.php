<?php
// condition ? exprIfTrue : exprIfFalse
// condition   值用來做為條件的表達式
// exprIfTrue  如果 condition 的值是 truthy (等於或是可轉換為 true) , exprIfTrue  會被執行
// exprIfFalse 如果 condition 的值是 falsy (等於或是可轉換為 false) , exprIfFalse  會被執行
    $year  = isset($_GET['year'])?$_GET['year']:date('Y');
    $month = isset($_GET['month'])?$_GET['month']:date('m');
    $day = isset($_GET['day'])?$_GET['day']:date('d');

    //当年当月的天数
    // mktime(hour,minute,second,month,day,year)
    $days = date("t",mktime(0,0,0,$month,1,$year));

    //当月的第一天是星期几
    // mktime(hour,minute,second,month,day,year)
    $startweek = date("w",mktime(0,0,0,$month,1,$year));
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>calender</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
  <h1>Calender</h1>
   <table class="table">
    <tr class="table-primary">
      <th>日</th>
      <th>月</th>
      <th>火</th>
      <th>水</th>
      <th>木</th>
      <th>金</th>
      <th>土</th>   
    </tr>
    <?php
          echo '<tr>';
          // $startweek=第一天是星期幾=6
          for($i=0;$i<$startweek;$i++){
              echo "<td class='table-active'>&nbsp;</td>";
          }
          // $days=當月天數=31
          for ($j=1;$j<=$days;$j++){
              $i++;
              // $day=當天是幾號=4
              // if($j == $day){
              //     echo "<td bgcolor='green'>{$j}</td>";
              // }else{
              // echo "<td>{$j}</td>";
              // }
              echo "<td class='table-active'>{$j}</td>";
              if($i%7 == 0){
                  echo '</tr>';
              }
          }
    ?>
    </table>
    <a class="btn btn-primary btn-lg active" href="date3.php" role="button">戻る</a>
</div>
  
</body>
</html>
