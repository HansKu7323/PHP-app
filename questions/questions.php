<?php
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

$kanji_q_array["Q3"]["設問"] = "薔薇";
$kanji_q_array["Q3"]["回答1"] = "バラ";
$kanji_q_array["Q3"]["回答2"] = "ローズ";
$kanji_q_array["Q3"]["回答3"] = "チューリップ";
$kanji_q_array["Q3"]["回答4"] = "ヒマワリ";

echo '<form>';
foreach($kanji_q_array as $key => $val){
	echo '<h3>'.$key.' '.$kanji_q_array[$key]["設問"].'</h3>';
	foreach($kanji_q_array[$key] as $key2 => $val2){
		if($key2 != '設問'){
			echo '<label><input type="radio" name="'.$key.'" value="'.$val2.'">'.$val2.'</label><br>';
		}
	}
}
echo '</form>'
?>



  

  
</body>
</html>