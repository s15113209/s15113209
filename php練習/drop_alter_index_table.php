<?php
require("db_connect.php");
$sql="ALTER TABLE users DROP INDEX username";

if($conn->query($sql)===True){
    echo "修改欄位成功";
}else{
    echo "修改欄位失敗".$conn->error;
}

$conn->close();
?>