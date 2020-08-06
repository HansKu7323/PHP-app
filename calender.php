<?php
  //タイムゾーンを設定
  date_default_timezone_set('Asia/Tokyo');
  //前の月・月の月が押えれた場合、GETパラメーターから年月を取得
  if(isset($_GET['ym'])){
    $ym = $_GET['ym'];
  }else{
    //今月の年月を表示
    //Y	4桁の西元年4、例２０２０
    //m 2桁の月表示、例０８
    $ym = date('Y-m');
  }

  //タイムスタンプを作成,フォーマットをチェックする
  // strtotime(time,now)
  $timestamp = strtotime($ym . '-01' );//strtotime($ym . '-01' )當前月份的一號 例)2020-08-01
  if($timestamp === false){
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');//strtotime($ym . '-01' )當前月份的一號 例)$ym = 2020-08 + -01 = 2020-08-01
  }

  //今日の日付　例）2020-08-1
  //Y	4桁の西元年4、例２０２０
  //m 2桁の月表示、例０８
  //j	日付前０ついてない	1 ~ 31
  $today = date('Y-m-j');

  //カレンダーのタイトルを作成　例９2020年8月
  //Y	4桁の西元年4、例２０２０
  //m	数字表示的月份，有前导零	01 到 12
  //n	数字表示的月份，没有前导零	1 到 12
  $html_title = date('Y年m月' ,  $timestamp );

  //前の月・次の月の年月を取得
  //方法１　mktime(hour,minute,second,month,day,year)
  //date ($format , $timestamp)
  // $prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
  // $next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
  //方法２　// 通過 PHP strtotime() 用字符串来創建日期
  // strtotime(time,now)
  $prev = date('Y-m', strtotime('-1 month', $timestamp));
  $next = date('Y-m', strtotime('+1 month', $timestamp));

  //当月の日数を取得
  $day_count = date('t', $timestamp);

  //一日が何曜日を取得
  //方法１
  //w	星期中的第几天，数字表示	0（表示星期天）到 6（表示星期六）
  // $youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
  //方法２
  $youbi = date('w', $timestamp);

  //カレンダー作成の準備
  $weeks = [];
  $week = '';

  //第一週目：空のセルを追加
  //例）一日が水曜だった場合、日から火の三つ分の空セルを追加
  //str_repeat(string,repeat) 函數把字符串重複指定的次數。string	必需。規定要重複的字符串。repeat	必需。規定字符串將被重複的次數。必須大於等於0。
  $week .= str_repeat('<td></td>', $youbi);

  // $day_count = date('t', $timestamp);当月の日数を取得
  //20200801  6
  for($day = 1; $day <= $day_count; $day++, $youbi++){
    //$ym今天的年月or傳來的年月
    //$date = 2020-08-1
    $date = $ym . '-' . $day;

  // $today = date('Y-m-j');今日の日付　例）2020-08-1
    if($today == $date){
      //今日の日付の場合は　class＝”today”をつける
      $week .= '<td class="today">' . $day;
    }else{
      $week .= '<td>' . $day;
    }
    $week .= '</td>';

    //週の終わり、または、月の終わり
    //$youbi，6~36
    //当月の日数を取得 $day_count = date('t', $timestamp); 28,29,30,31
    if ($youbi % 7 == 6 || $day == $day_count){

      if($day == $day_count){
        //月の最終日の場合、空セルを追加
        //例）最終日が木曜の場合、金土の空セルを追加
        $week .= str_repeat('<td></td>', 6 - ($youbi % 7));
      }

      //weeks配列にtrと＄weekを追加
      $weeks[] = '<tr class="table-light">' . $week . '</tr>';

      //weekをリセット
      $week = '';
    }
  }


?>




<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHPカレンダー</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <style>
    body{
      background-color:#aaa;
    }
    .container{
      font-family: 'Noto Sans JP', sans-serif;
    }
    th{
      height:30px;
      text-align:center
    }
    td{
      height:90px;
    }
    .today {
      background-color:orange;
    }
    th:nth-of-type(1),
    td:nth-of-type(1){
      color:red;
    }
    th:nth-of-type(7),
    td:nth-of-type(7){
      color:blue;
    }

table.table-bordered > tbody > tr > td{
    border:1px solid #aaa;
}

  </style>


</head>
<body>
  <div class="container mt-5">
    <h3 class="mb-3">
      <a href="?ym=<?php echo $prev;?>">&lt;</a>
        &nbsp;&nbsp;<?php echo $html_title?>&nbsp;&nbsp;
      <a href="?ym=<?php echo $next;?>">&gt;</a></h3>

    <table class="table table-bordered">
      <tr class="table-success">
        <th>日</th>
        <th>月</th>
        <th>火</th>
        <th>水</th>
        <th>木</th>
        <th>金</th>
        <th>土</th>
      </tr>
      <?php
        foreach($weeks as $week){
          echo $week;
        }
      ?>
    
    </table>






  </div>
  
</body>
</html>