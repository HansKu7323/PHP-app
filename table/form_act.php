<?php
$width = $_POST["width"];
// $height = $_POST["height"];
$col = $_POST["col"];
$row = $_POST["row"];
echo "<table width='$width' border='1'>";
echo "<caption style='font-size:50px'>フォムー</caption>";
for($i=0;$i<$row;$i++){
  echo "<tr>";
    for($j=0;$j<$col;$j++){
      echo "<td height='40'></td>";
    }
  echo "</tr>";
}





?>