<?php
//声明编码UTF-8
header("Content-Type: text/html;charset=utf-8");
$servername = "192.168.3.249";
$username = "portal";
$password = "pwTxLFEHDs4CSfJh";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
//未声明情况下所有操作均为client数据库
mysqli_select_db($conn,"portal");

?>