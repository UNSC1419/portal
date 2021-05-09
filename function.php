<?php
function error_web($error_data)
{
    //本方法向数据库error_log表写入错误信息及跳转错误页面
    //引用数据库
    include("link_mysql.php");
    //获取get所有参数
    $erroe_get_data = $_SERVER['QUERY_STRING'];
    //解析操作系统和浏览器表示
    $User_UaSplit = explode('  |  ', user_agent($_SERVER['HTTP_USER_AGENT']));
    $User_Os = $User_UaSplit[0];
    $User_Browser = $User_UaSplit[1];
    //获取agent
    $User_agent = $_SERVER['HTTP_USER_AGENT'];
    //填充error日志
    $mysql = "INSERT INTO `portal-test`.`error_log` (`error_id`, `error_time`, `error_getdata`, `error_name`, `error_user_os`, `error_user_browser`, `error_user_agent`) VALUES (NULL, NOW(), '$erroe_get_data', '$error_data', '$User_Os', '$User_Browser', '$User_agent');";
    $ret_portal = mysqli_query($conn_portal, $mysql);
    if (!$ret_portal) {
        printf("Error: %s\n", mysqli_error($conn_portal));
        exit();
    }
    $error_data = base64_encode($error_data);
    header("Location: ./error.php?error=" . $error_data);
}

function user_agent($ua)
{
    //开始解析操作系统
    $os = null;
    if (preg_match('/Windows NT 6.0/i', $ua)) {
        $os = "Windows Vista";
    } elseif (preg_match('/Windows NT 6.1/i', $ua)) {
        $os = "Windows 7";
    } elseif (preg_match('/Windows NT 6.2/i', $ua)) {
        $os = "Windows 8";
    } elseif (preg_match('/Windows NT 6.3/i', $ua)) {
        $os = "Windows 8.1";
    } elseif (preg_match('/Windows NT 10.0/i', $ua)) {
        $os = "Windows 10";
    } elseif (preg_match('/Windows NT 5.1/i', $ua)) {
        $os = "Windows XP";
    } elseif (preg_match('/Mac OS X/i', $ua)) {
        $os = "Mac OS X";
    } elseif (preg_match('#Linux#i', $ua)) {
        $os = "Linux ";
    } elseif (preg_match('#Windows Phone#i', $ua)) {
        $os = "Windows Phone ";
    } elseif (preg_match('/Windows NT 5.2/i', $ua) && preg_match('/Win64/i', $ua)) {
        $os = "Windows XP 64 bit";
    } elseif (preg_match('/Android ([0-9.]+)/i', $ua, $matches)) {
        $os = "Android " . $matches[1];
    } elseif (preg_match('/iPhone OS ([_0-9]+)/i', $ua, $matches)) {
        $os = 'iPhone ' . $matches[1];
    } else {
        $os = '未知操作系统';
    }
    if (preg_match('#(Camino|Chimera)[ /]([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Camino ' . $matches[2];
    } elseif (preg_match('#SE 2([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = '搜狗浏览器 2' . $matches[1];
    } elseif (preg_match('#360([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = '360浏览器 ' . $matches[1];
    } elseif (preg_match('#Maxthon( |\/)([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Maxthon 浏览器' . $matches[2];
    } elseif (preg_match('#Chrome/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Chrome ' . $matches[1];
    } elseif (preg_match('#XiaoMi/MiuiBrowser/([0-9.]+)#i', $ua, $matches)) {
        $browser = '小米浏览器 ' . $matches[1];
    } elseif (preg_match('#Safari/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Safari浏览器 ' . $matches[1];
    } elseif (preg_match('#opera mini#i', $ua)) {
        preg_match('#Opera/([a-zA-Z0-9.]+)#i', $ua, $matches);
        $browser = 'Opera Mini ' . $matches[1];
    } elseif (preg_match('#Opera.([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Opera ' . $matches[1];
    } elseif (preg_match('#TencentTraveler ([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = '腾讯TT浏览器 ' . $matches[1];
    } elseif (preg_match('#(UCWEB|UBrowser|UCBrowser)/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'UC浏览器 ' . $matches[1];
    } elseif (preg_match('#Vivaldi/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Vivaldi浏览器 ' . $matches[1];
    } elseif (preg_match('#wp-(iphone|android)/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'WordPress客户端 ' . $matches[1];
    } elseif (preg_match('#Edge ([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = '微软Edge浏览器 ' . $matches[1];
    } elseif (preg_match('#MSIE ([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Internet Explorer ' . $matches[1];
    } elseif (preg_match('#(Firefox|Phoenix|SeaMonkey|Firebird|BonEcho|GranParadiso|Minefield|Iceweasel)/([a-zA-Z0-9.]+)#i', $ua, $matches)) {
        $browser = 'Firefox浏览器 ' . $matches[2];
    } else {
        $browser = '未知浏览器';
    }
    return $os . "  |  " . $browser;
}

?>