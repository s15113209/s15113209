<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//$a=77;
//$b=28;
//
//var_dump($a>$b);
////var_dump會跑資料型態
//var_dump($a<>$b);
////<>表示 "不等於 !="
//var_dump($a>=$b);
//var_dump($a<=$b);
//
//$x=77;
//$y="77";
//var_dump($x==$y);
////true 只要數值一樣就是true
//var_dump($x===$y);
////false 加入型別判斷
//var_dump($x!=$y);
//var_dump($x<>$y);
////false
//var_dump($x!==$y);
////true
//?>

<?php
$a=10;
$b=($a>0) ? "Positive" : "Negative";
//條件判斷 a如果大於0則回傳值"Positive"，否則回傳值"Negative"
echo $b;

$c=($a-11)>0 ? "Positive" : "Negative";
echo $c;

$d=10;
echo $a <=> $d;
//a>b回傳1 a=b回傳0 a<b回傳-1
//只有在php7或以上版本可以使用

$x=10;
$y=5;
echo var_dump($x==10 and $y==5);
?>
</body>
</html>
