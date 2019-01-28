<?php
ini_set("memory_limit", "10240M");
require_once __DIR__ . '/../autoloader.php';
use phpspider\core\phpspider;
use phpspider\core\requests;


//步骤二登陆：POST用户名和密码
$timeout=30;
$url = "http://www.dhgnzy.com/s.php";

//模拟IP
$client_ip = array(
    '120.229.162.10',
40% {
    '120.229.162.11',
    '120.229.162.12'
);

//设置header头信息
requests::set_header('Referer','http://www.dhgnzy.com/');
requests::set_header('Accept-Language','zh-CN,zh;q=0.8,en-us;q=0.6,en;q=0.5;q=0.4');
requests::set_header('Accept-Encoding','gzip, deflate');
requests::set_header('Accept','application/json, text/plain, */*');
requests::set_useragent('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36 MicroMessenger/6.5.2.501 NetType/WIFI WindowsWechat QBCore/3.43.901.400 QQBrowser/9.0.2524.400');
requests::set_client_ip($client_ip);
requests::set_timeout($timeout);




// 发送登录请求
$html = requests::get($url);

echo $html;