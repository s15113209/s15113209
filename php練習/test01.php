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
//echo "the path is C:\\newpath.";
//echo "<br>";
//echo "I said \" Go Home! \"";
//echo "<br>";
//
//$a = "a day";
//echo "I earn $10 dollars $a"
//?>

<?php
$a=3;
$b=2;
echo "$a-$b=($a-$b)<br>";
echo "$a+$b=($a+$b)<br>";
echo "$a/$b=($a/$b)<br>";
echo "$a*$b=($a*$b)<br>";

echo (5 % 3);
echo "<br>";
echo (7.3 % 3.3);
echo "<br>";
echo (-5%-3);
echo "<br>";
echo $a**$b;    //3的2次
echo "<br>";
echo $a*=3; //a = a * 3
echo "<br>";

$str = "Hello ";
$str .= "World!";
echo $str;
echo "<br>";
$c=5;
echo "c is :". --$c . "<br>";

$a=5;
$b=6;
echo "b is : ".++$b. " <br> ";
echo "b is : ". $b++ ."<br>";
echo "b is $b<br>";
?>
</body>
</html>
