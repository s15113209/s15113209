<?php

require_once("db_connect.php");
$sql="DROP TABLE users";
if($conn->query($sql)===True) echo"刪除成功";
else "刪除錯誤".$conn->error;
?>