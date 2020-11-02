<?php
require("db_connect.php");
$sql="ALTER TABLE users DROP COLUMN age";

if($conn->query($sql)===True){
    echo "刪除成功";
}else{
    echo "刪除失敗".$conn->error;
}

$conn->close();
?>