<?php
$server_name="localhost";
$user_name="root";
$password="willy10019";
$dbname="miaomiaoguai";

$conn=new mysqli($server_name,$user_name,$password,$dbname);
if($conn->connect_error){
    die("連線失敗".$conn->connect_error);
}else{
    echo("Connect Sucess! <br>");
}
?>