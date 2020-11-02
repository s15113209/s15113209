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
$a=1;
$b=1;
do{
    echo $a."*".$b."=".$a*$b."<br>";
    $b++;
    if($b>=10){
        $b=1;
        $a++;
        if($a>9) break;
    }
}while($a<10);
?>
</body>
</html>
