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
$a=5;
$b=&$a;
//$b指向$a的記憶體位置(參考位置) a改變會牽動到b

$a = 10;
echo $a;
echo $b;
?>
</body>
</html>