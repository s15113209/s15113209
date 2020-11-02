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
for($i=0;$i<=10;$i++){
    if($i%2==1) continue;
    else echo "$i";

    if ($i==6) goto end;
}
echo "我是被省略的echo";
end:{
    echo "YA!";
}
?>
</body>
</html>