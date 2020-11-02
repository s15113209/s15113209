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
$server_name="localhost";
$user_name="root";
$password="willy10019";
$dbname="miaomiaoguai";

$conn=new mysqli($server_name,$user_name,$password,$dbname);
if($conn->connect_error){
    die("連線失敗".$conn->connect_error);
}

//AUTO_INCREMENT流水號
//NOT NULL不可為空
//PRIMARY KEY主鍵 且值不能重複
//DEFAULT value設定為預設值
//UNSIGNED簡單說是沒有負數?
$sql="
CREATE TABLE users(
id INT(6) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
name varchar(30) NOT NULL,
height FLOAT,
weight FLOAT,
phone varchar(30),
email varchar(50),
create_time DATETIME
)";

if($conn->query($sql)===True) echo "資料表建立成功";
else echo "資料表建立失敗".$conn->error;

$conn->close();

?>
</body>
</html>
