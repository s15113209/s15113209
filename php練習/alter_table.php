<?php
require("db_connect.php");
$sql="ALTER TABLE users ADD COLUMN birthday date ";

if($conn->query($sql)===True){
    echo "新增成功";
}else{
    echo "新增失敗".$conn->error;
}

$conn->close();
?>