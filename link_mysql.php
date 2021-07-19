<?php
//声明编码UTF-8
header("Content-Type: text/html;charset=utf-8");
//portal数据库参数
$servername_portal = "192.168.3.249";
$username_portal = "portal-test";
$password_portal = "SSZkY8FLwM6As5ZT";
//radius数据库参数
$servername_radius = "192.168.3.246";
$username_radius = "root";
$password_radius = "myroot";

// 创建连接portal数据库
$conn_portal = new mysqli($servername_portal, $username_portal, $password_portal);
// 检测连接portal数据库
if ($conn_portal->connect_error) {
    die("连接portal失败: " . $conn_portal->connect_error);
}
//未声明情况下$conn_portal所有操作均为portal数据库
mysqli_select_db($conn_portal, "portal-test");
// 创建连接toughradius数据库
$conn_radius = new mysqli($servername_radius, $username_radius, $password_radius);
// 检测连接toughradius数据库
if ($conn_radius->connect_error) {
    die("连接radius失败: " . $conn_radius->connect_error);
}
//未声明情况下$conn_radius所有操作均为toughradius数据
mysqli_select_db($conn_radius, "toughradius");

?>