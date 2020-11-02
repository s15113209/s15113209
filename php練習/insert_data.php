<?php
require("db_connect.php");
$now = date('Y-m-d H:i:s');
//$sql="INSERT INTO users(username, height, weight, phone,
//email, create_time, birthday)
//VALUES('Sharon', 167, 52, '0963636981', 'sharon890217@gmail.com',
//'$now', '2000-02-17');";
////
//$sql.="INSERT INTO users(username, height, weight, phone,
//email, create_time, birthday)
//VALUES('Mike', 176, 82, '0973155836', 'mike6663232@gmail.com',
//'$now', '1993-08-05');";
//
$sql="INSERT INTO users(username, height, weight, phone,
email, create_time, birthday)

VALUES
/*第一筆*/
('Sharon', 167, 52, '0963636981', 'sharon890217@gmail.com',
'$now', '2000-02-17'),
/*第二筆*/
('Mike', 176, 82, '0973155836', 'mike6663232@gmail.com',
'$now', '1993-08-05')
";


if($conn->multi_query($sql)===True){
    $last_id=$conn->insert_id;
    echo "新資料輸入成功 編號為:".$last_id;
}else{
    echo "新資料輸入失敗".$conn->error;
}

$conn->close();
?>