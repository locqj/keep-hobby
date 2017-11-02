
<?php 

$servername = "localhost"; //服务器
$username = "root"; //用户名
$password = "root"; //密码
$dbname = "Siqi"; //数据库名

// 创建连接
$conn = new mysqli("localhost", "root", "root", "Siqi");
// 检测连接
if ($conn->connect_error) {
    die("connection lose: " . $conn->connect_error);
} 
echo "Successful database connection!";


$sql = "INSERT INTO members ( email, password, username, birthday) VALUES ('liqiangmin@hotmail.com', 'Lisiqi77','siqi','1990-05-05')";//将注册信息插入数据库表中

if ($conn->query($sql) === TRUE) {
    echo "The new record was inserted successfully";
} else {
    echo "Error: " . $sql . "
" . $conn->error;
}


?>


       