<?php
date_default_timezone_set('Asia/tokyo');
echo time();
echo '<br>';
echo date("Y/m/d-D H:i:sa");
// mktime(hour,minute,second,month,day,year,is_dst);
// date(format,timestamp);
// $d=mktime(9, 12, 31, 6, 10, 2015);
// echo "创建日期是 " . date("Y-m-d h:i:sa", $d);
echo '<br>';
echo "创建日期是 " . date("Y-m-d h:i:sa", mktime(22, 38, 00, 4, 15, 2020));
echo '<br>';

// 通过 PHP strtotime() 用字符串来创建日期
// strtotime(time,now)
$d=strtotime("10:38pm April 15 2020");
echo "创建日期是 " . date("Y-m-d h:i:sa", $d);

?>