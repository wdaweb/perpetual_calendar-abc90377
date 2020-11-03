<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $month=11;//當月月份
    $day=date('t',strtotime("2020-10"));//當月天數
    $startW=date('w',strtotime("2020-$month-01"));//當月從星期幾開始
    echo "<table>";
    echo"<thead>";
    echo"<tr>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
    </tr>";
    
    echo"</thead>";
    for ($i=0; $i < 6; $i++) { 
        echo "<tr>";
        for($j=0;$j < 7;$j++) {
            echo "<td>";
            if ($i==0 && $j<$startW || (($i*7+$j)-($startW-1))>$day) {
                echo "";
            }else {
                echo ($i*7+$j)-($startW-1);
            }
            
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    
</body>
</html>