<?php
//启动session
session_start();
header("Content-Type: text/html;charset=utf-8");
//调用数据库连接
include ("link_mysql.php");
include("function.php");
if(isset($_SESSION['Wg_sn']) and isset($_SESSION['User_mac']) and isset($_SESSION['User_ip']) and isset($_SESSION['User_url'])){
    $Wg_sn = $_SESSION['Wg_sn'];
    $User_mac = $_SESSION['User_mac'];
    $User_ip = $_SESSION['User_ip'];
    $User_url = $_SESSION['User_url'];

    //开始查询设备SN
    //定义mysql语句 搜索Wg_sn
    $mysql = "SELECT * FROM `wg_sn` WHERE `wg_snid` LIKE '$Wg_sn'";
    //执行MySQL语句
    $ret_portal = mysqli_query($conn_portal, $mysql);
    //返回mysql的错误代码
    if (!$ret_portal) {
        printf("Error: %s\n", mysqli_error($conn_portal));
        exit();
    }
    //将mysql返回的搜索结果传递至$row_portal
    $row_portal = mysqli_fetch_assoc($ret_portal);
    //判断参数中的SN是否有效
    if (!isset($row_portal['wg_snid'])){
        error_web("设备不合法");
        exit;
    }
    //传递广告方案ID至$adplan_id
    $adplan_id = $row_portal['adplan_id'];
    //释放查询结果数组
    unset($row_portal);

    //开始查询ad方案对应的广告url
    //定义mysql语句
    $mysql = "SELECT * FROM `adplan_data` WHERE `adplan_id` LIKE '$adplan_id'";
    //执行MySQL语句
    $ret_portal = mysqli_query($conn_portal, $mysql);
    //返回mysql的错误代码
    if (!$ret_portal) {
        printf("Error: %s\n", mysqli_error($conn_portal));
        exit();
    }
    //将mysql返回的搜索结果传递至$row_portal
    $row_portal = mysqli_fetch_assoc($ret_portal);
    //判断广告ID是否有效
    if (!isset($row_portal['adplan_id'])){
        error_web("AD广告方案不存在");
        exit;
    }
    //判断广告RUL是否有效
    if ($row_portal['adplan_url']===""){
        error_web("AD广告URL不存在");
        exit;
    }
    //传递广告URl至$adplan_url
    $adplan_url = $row_portal['adplan_url'];
    //释放查询结果数组
    unset($row_portal);
    //查询用户操作系统和浏览器
    $User_UaSplit=explode('  |  ',user_agent($_SERVER['HTTP_USER_AGENT']));
    $User_Os = $User_UaSplit[0];
    $User_Browser = $User_UaSplit[1];
    $User_mac1= str_replace(':','',$User_mac);
    //向portal填充log日志
    //定义Mysql语句
    $mysql = "INSERT INTO `login_log` (`log_id`, `log_time`, `user_mac`, `wg_snid`, `adplan_id`, `adplan_url`,`User_Os`,`User_Browser`) VALUES (NULL, NOW(), '$User_mac1', '$Wg_sn', '$adplan_id', '$adplan_url', '$User_Os', '$User_Browser');";
    $ret_portal = mysqli_query($conn_portal,$mysql);
    //返回mysql的错误代码
    if (!$ret_portal) {
        printf("Error: %s\n", mysqli_error($conn_portal));
        exit();
    }
    //查询radius数据库
    //查询以MAC地址为账号

    $mysql = "SELECT * FROM `tr_subscribe` WHERE `subscriber` LIKE '$User_mac1'";
    $ret_radius = mysqli_query($conn_radius, $mysql);
    //返回mysql的错误代码
    if (!$ret_radius) {
        printf("Error: %s\n", mysqli_error($conn_radius));
        exit();
    }
    //传递查询结果至$row_radius
    $row_radius = mysqli_fetch_assoc($ret_radius);
    //判断账号是否存在
    if (isset($row_radius['subscriber'])){
        //账号存在的情况执行
        //判断账号是否启用
        if ($row_radius['status'] !== 'enabled'and $row_radius['status']==='disabled'){
            error_web("您无权连接");
            exit;
        }
        //生成返回链接
        $SubmitUrl= $User_url.'?usrip='.$User_ip.'&usrmac='.$User_mac.'&usrname='.$User_mac1.'&password='.$User_mac1.'&success='.'http://baidu.com/';
        //加密返回链接
        $SubmitUrl = base64_encode($SubmitUrl);
        //携带返回链接跳转AD页面
        header("Location: ./adweb-2/ad2.php?SubmitUrl=".$SubmitUrl);
        session_destroy();
        exit;

    }else{


        //账号不存在向radius中添加用户
        //定义Mysql语句 添加用户mac账户
        $mysql = "INSERT INTO `tr_subscribe` (`id`, `node_id`, `subscriber`, `realname`, `password`, `domain`, `addr_pool`, `policy`, `is_online`, `active_num`, `bind_mac`, `bind_vlan`, `ip_addr`, `mac_addr`, `in_vlan`, `out_vlan`, `up_rate`, `down_rate`, `up_peak_rate`, `down_peak_rate`, `up_rate_code`, `down_rate_code`, `status`, `remark`, `begin_time`, `expire_time`, `create_time`, `update_time`) VALUES (NULL, '0', '$User_mac1', NULL, '$User_mac1', NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, '9999', '9999', '9999', NULL, NULL, NULL, 'enabled', NULL, NOW(), NOW() + interval 2 year , now(), now());";
        $ret_radius = mysqli_query($conn_radius, $mysql);
        if (!$ret_radius) {
        printf("Error: %s\n", mysqli_error($conn_radius));
        exit();

    }
        //生成返回链接
        $SubmitUrl= $User_url.'?usrip='.$User_ip.'&usrmac='.$User_mac.'&usrname='.$User_mac1.'&password='.$User_mac1.'&success='.'http://baidu.com/';
        //加密返回链接
        $SubmitUrl = base64_encode($SubmitUrl);
        //携带返回链接跳转AD页面
        header("Location: ./adweb-1/ad.php?SubmitUrl=".$SubmitUrl);
        session_destroy();
        exit;
    }
    #echo $adplan_url
    #echo $adplan_id
    #echo $Wg_sn;
    #echo $User_mac;
    #echo $User_ip;
    #echo $User_url;
}else{
    error_web("无法获取传递参数");
    exit;
}