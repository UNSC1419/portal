<?php
//启动session
session_start();
//调用数据库连接
include ("link_mysql.php");
echo $_SESSION['Wg-sn'];
echo $_SESSION['User_mac'];
echo $_SESSION['User_ip'];
echo $_SESSION['User_url'];
if(isset($_SESSION['Wg-sn']) and isset($_SESSION['User_mac']) and isset($_SESSION['User_ip']) and isset($_SESSION['User_url'])){



}else{
    $_SESSION['error']="无法获取传递参数";
    header("Location: ./error.php");
    exit;
}