<?php
header("Content-Type: text/html;charset=utf-8");
//获取错误信息并解密
$error = base64_decode(str_replace(" ","+",$_GET['error']));
?>
<html>
<head>
    <meta charset="utf-8">
    <title>错误页面</title>
    <style>
        .container {
            width: 60%;
            margin: 10% auto 0;
            background-color: #f0f0f0;
            padding: 2% 5%;
            border-radius: 10px
        }

        ul {
            padding-left: 20px;
        }

            ul li {
                line-height: 2.3
            }

        a {
            color: #20a53a
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>抱歉！发生了错误</h1>
        <h3>
            <?php
            echo '错误原因:'.$error;
            ?>
        </h3>
        <ul>
            <li>请尝试重新连接WIFI</li>
            <li>请尝试清除缓存后访问</li>
            <li>您可能不在wifi范围内</li>
        </ul>
    </div>
</body>
</html>