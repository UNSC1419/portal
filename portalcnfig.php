<?php
//启动session
session_start();
//声明编码UTF-8
header("Content-Type: text/html;charset=utf-8");
//调用封装函数页面
include("function.php");
//判断GET提交的数据是否为真
if (isset($_GET['sn'])) {
    //检测提交数据是否合法
    $Wg_UpData = htmlentities($_GET['sn']);
    //以?gcenv=分割出SN和base64数据
    $Wg_UpSplit = explode('?gcenv=', $Wg_UpData);
    if (count($Wg_UpSplit) == 2) {
        $Wg_sn = $Wg_UpSplit[0];
        //base64解密get获得的数据
        $Wg_Data = base64_decode($Wg_UpSplit[1]);
        //以&分割获得的数据
        $Wg_Split = explode('&', $Wg_Data);
        //判断分割出的参数是否有正确的数量
        if (count($Wg_Split) == 3) {
            //去除无用字符
            $Replace = str_replace('usrmac=', '', $Wg_Split[0]);
            //判断获得的参数是否合法
            if ($Replace !== $Wg_Split[0]) {
                $User_mac = $Replace;
                $Replace = str_replace('usrip=', '', $Wg_Split[1]);
                if ($Replace !== $Wg_Split[1]) {
                    $User_ip = $Replace;
                    $Replace = str_replace('submitUrl=', '', $Wg_Split[2]);
                    if ($Replace !== $Wg_Split[1]) {
                        $User_url = $Replace;
                        //传值至session
                        $_SESSION['Wg_sn'] = $Wg_sn;
                        $_SESSION['User_mac'] = $User_mac;
                        $_SESSION['User_ip'] = $User_ip;
                        $_SESSION['User_url'] = $User_url;
                        //跳转portal页面+
                        header("Location: ./portal.php");
                        exit;
                    } else {
                        error_web("回调地址非法");
                        exit;
                    }
                } else {
                    error_web("用户IP地址非法");
                    exit;
                }
            } else {
                error_web("MAC地址非法");
                exit;
            }
        } else {
            error_web("数据结构非法");
            exit;
        }
    } else {
        error_web("SN段非法");
        exit;
    }
} else {
    error_web("无数据");
    exit;
}
