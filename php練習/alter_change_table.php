<?php
require("db_connect.php");


$sql="ALTER TABLE users CHANGE COLUMN username username VARCHAR(30),
ADD INDEX(username)";

if($conn->query($sql)===True){
    echo "修改成功";
}else{
    echo "修改失敗".$conn->error;
}

$conn->close();
?>
