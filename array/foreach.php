<?php
    //設定一組同學分數的陣列，陣列所引使用學生名稱
    $foreach_array = array('小三'=>77 , '老張'=>56 , '大威'=>94 , '小史'=>84 ,'阿花'=>35 , '小明'=>60);

    //班級總分為0、人數為0
    $total = 0;
    $num = 0;
    //第一種foreach用法：適用只取值不取索引的狀況下使用
    // foreach(迴圈名稱 as $value) <= 一定是填 $value
    foreach($foreach_array as $value) {
        // 計算分數總和
        $total = $total + $value;
        // 計算陣列內有多少元素
        $num = $num + 1;
        // 輸出每個分數
        echo $value."<br>";
    }

    // 顯示分數總和
    echo "同學總分：".$total."分<br>";
    // 顯示考試總人數
    echo "共".$num."人參加考試<br>";

 
    //第2種foreach用法：適用取值和取索引的狀況下使用
    // foreach(迴圈名稱 as $key => $value) <= 一定是填 $key 和 $value
    foreach($foreach_array as $key => $value) {
        //同時取出索引和值
       echo $key."的分數：".$value."分<br>";
    }



//多次元配列使い方
$flo = array(
	'Q1' => array('設問'=>'薔薇','回答1'=>'バラ','回答2'=>'ローズ','回答3'=>'チューリップ','回答4'=>'ヒマワリ'),
	'Q2' => array('設問'=>'紫陽花','回答1'=>'アジサイ','回答2'=>'ローズ','回答3'=>'チューリップ','回答4'=>'ヒマワリ'),
	'Q3' => array('設問'=>'椿','回答1'=>'ツバキ','回答2'=>'ローズ','回答3'=>'チューリップ','回答4'=>'ヒマワリ')
);

$array2 = [
	'Q1' => ['設問'=>'薔薇','回答1'=>'バラ','回答2'=>'ローズ','回答3'=>'チューリップ','回答4'=>'ヒマワリ'],
	'Q2' => ['設問'=>'紫陽花','回答1'=>'アジサイ','回答2'=>'ローズ','回答3'=>'チューリップ','回答4'=>'ヒマワリ'],
	'Q3' => ['設問'=>'椿','回答1'=>'ツバキ','回答2'=>'ローズ','回答3'=>'チューリップ','回答4'=>'ヒマワリ']
];

//$kanji_q_array というのが配列の名前で、_array はつけなくてもいいんですが、配列だよ、とわかりやすくするために、配列の変数名には array とつけるのがオススメです。
$kanji_q_array["Q1"]["設問"] = "薔薇";
$kanji_q_array["Q1"]["回答1"] = "バラ";
$kanji_q_array["Q1"]["回答2"] = "ローズ";
$kanji_q_array["Q1"]["回答3"] = "チューリップ";
$kanji_q_array["Q1"]["回答4"] = "ヒマワリ";
//上の図でKEYと書かれた＝(イコール)の左側がキーになります。
//これが2つ並んでいるので「多次元配列」と呼び、
//キーに名前がついているのが「連想配列」になります。
$kanji_q_array["Q2"]["設問"] = "紫陽花";
$kanji_q_array["Q2"]["回答1"] = "アジサイ";
$kanji_q_array["Q2"]["回答2"] = "ローズ";
$kanji_q_array["Q2"]["回答3"] = "チューリップ";
$kanji_q_array["Q2"]["回答4"] = "ヒマワリ";

$kanji_q_array["Q3"]["設問"] = "椿";
$kanji_q_array["Q3"]["回答1"] = "ツバキ";
$kanji_q_array["Q3"]["回答2"] = "ローズ";
$kanji_q_array["Q3"]["回答3"] = "チューリップ";
$kanji_q_array["Q3"]["回答4"] = "ヒマワリ";

print_r($flo);
echo '<br>';
print_r($array2);

foreach($kanji_q_array as $key => $val){
	echo '<h3>'.$key.' '.$kanji_q_array[$key]["設問"].'</h3>';
	foreach($kanji_q_array[$key] as $key2 => $val2){
		if($key2 != '設問'){
			echo '<label><input type="radio" name="'.$key.'" value="'.$val2.'">'.$val2.'</label><br>';
		}
	}
}


foreach($flo as $key3 => $val3){
	echo '<h3>'.$key3.' '.$flo[$key3]["設問"].'</h3>';
	foreach($flo[$key3] as $key4 => $val4){
		if($key4 != '設問'){
			echo '<label><input type="radio" name="'.$key3.'" value="'.$val4.'">'.$val4.'</label><br>';
		}
	}
}


?>