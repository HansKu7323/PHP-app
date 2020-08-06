<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
  <h1 class="text-center">九九表</h1>
    <table class="table container">
            <?php
            echo '<tr>';
              for ($i=0; $i<10; $i++){
                echo '<th class="table-primary" scope="col">' . $i . '</th>';
              }
            echo  '</tr>';
            for ($i=1; $i<10; $i++){
              echo '<tr class="">';
              echo '<th class="table-primary"　scope=""row>' . $i . '</th>';
              for($j=1; $j<10; $j++){
                $res = $i * $j;
                // echo '<td class="table-active">'. $res . '</td>'; 

                if ($res % 2 === 0){
                  echo '<td class="table-active">' . $res . '</td>';
                }else{
                  echo '<td class="">' . $res . '</td>';
                }
              }
              echo '</tr>';
            }  
            ?>
     </table>
    
</body>
</html>